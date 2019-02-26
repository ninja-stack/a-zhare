import Axios from 'axios';

export default {
  async getPosts({commit}, slug) {
    try {
      const result = await Axios.get(`/api/community/${slug}/posts`, {
        headers: {
          'Accept': 'application/json'
        }
      });
      
      commit('setPosts', result.data.posts);

    } catch (e) {
      commit('setErrorState', true);
      commit('setErrorMessages', e.response.data.errors);
    }
    
  }
};
