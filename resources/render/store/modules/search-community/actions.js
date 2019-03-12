import Axios from 'axios';

export default {
  async search({commit}, query) {
    try {
      const result = await Axios.get('/api/community/search', {
        headers: {
          'Accept': 'application/json',
        },
        params: {
          q: query
        }
      });
      console.log(result.data);
      commit('setCommunities', result.data.communities);
    } catch (e) {
      commit('setErrorState', true);
      commit('setErrorMessages', e.response.data.errors);
    }
  },

  async join({commit}, {id, token}) {
    try {
      const result = await Axios.get('/api/community/join', {
        headers: {
          'Accept': 'application/json',
          'Authorization': `${token}`
        },
        params: {
          community_id: id
        }
      });

      commit('setSuccessState', true);
      commit('setSuccessMessage', result.data.message);
    } catch (e) {
      commit('setErrorState', true);
      // commit('setErrorMessages', e.response.data.errors);
    }
  }
};
