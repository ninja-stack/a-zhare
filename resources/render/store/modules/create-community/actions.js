import Axios from 'axios';

export default {
  async increase({commit}, count) {
    commit('increment', count);
  },

  async create({commit}, {formData, token}) {
    commit('setLoadingState', true);

    try {
      const result = await Axios.post('/api/create-community', formData, {
        headers: {
          'Accept': 'application/json',
          'Authorization': `${token}`
        }
      });

    } catch (e) {
      console.log(e.response);
      commit('setErrorState', true);
      commit('setErrorMessages', e.response.data.errors);
    }

    commit('setLoadingState', false);
  }
};
