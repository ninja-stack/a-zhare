import Axios from 'axios';

export default {
  async getPostList ({commit}, token) {
    commit('setLoadingState', true);
    commit('setErrorState', false);
    try {
      const result = await Axios.get('/api/get-user-communities', {
        headers: {
          'Accept' : 'application/json',
          'Authorization' : `${token}`
        }
        
      }); 
      
      commit('setPostList', result.data.communities); 
    } catch (e) {
      commit('setErrorState', true);
      commit('setErrorMessages', e.responses.data.errors);
    }
  },

  setDrawer({commit}, value) {
    commit('setDrawer', value);
    commit('toggleDrawer', value);
  },
};
