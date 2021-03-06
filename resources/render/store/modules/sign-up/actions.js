import Axios from 'axios';

export default {
  async register({commit}, formData) {
    try {
      const result = await Axios.post('/api/register', formData, {
        headers: {
          'Accept': 'application/json'
        }
      });

      const token = result.headers.authorization;
      localStorage.setItem('token', token);
    } catch (e) {
      commit('setErrorState', true);
      commit('setErrorMessages', e.response.data.errors);
    }
  },
  async restart({commit}){
    commit('restart');
  }
};
