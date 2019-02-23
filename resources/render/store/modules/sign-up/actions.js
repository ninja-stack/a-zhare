import Axios from 'axios';

export default {
  async register({commit}, formData) {
    commit('setLoadingState', true);

    console.log(formData);
    try {
      const result = await Axios.post('/api/register', formData, {
        headers: {
          'Accept': 'application/json'
        }
      });

      const token = result.headers.authorization;
      localStorage.setItem('token', token);
    } catch(e) {
      commit('setErrorState', true);
      commit('setErrorMessages', e.response.data.errors);
    }

    commit('setLoadingState', false);
  },

  async increase({commit}, count) {
    commit('increment', count);
  }
};
