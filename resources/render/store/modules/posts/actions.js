import Axios from 'axios';

export default {
  async getCommunityInfo({commit}, slug){
    commit('setErrorState', false);
    try {
      const result = await Axios.get(`/api/community/${slug}`, {
        headers: {
          'Accept': 'application/json'
        }
      });

      commit('setCommunity', result.data.community);

    } catch (e) {
      commit('setErrorState', true);
      commit('setErrorMessages', e.response.data.errors);
    }
  },
  async getPosts({commit}, slug) {
    commit('setErrorState', false);
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
  },

  async getAllCommunityPost({commit}, token) {
    commit('setErrorState', false);
    try {
      const result = await Axios.get(`/api/post/all`, {
        headers: {
          'Accept': 'application/json',
          'Authorization': `${token}`
        }
      });
      
      commit('setPosts', result.data.posts);

    } catch (e) {
      commit('setErrorState', true);
      commit('setErrorMessages', e.response.data.errors);
    }
  },

  async getProfilePosts({commit}, token) {
    commit('setErrorState', false);
    try {
      const result = await Axios.get(`/api/post/profile`, {
        headers: {
          'Accept': 'application/json',
          'Authorization': `${token}`
        }
      });
      
      let request = [];
      let content = [];

      result.data.posts.forEach(post => {
        if(post.type === 'REQUEST') {
          request.push(post)
        } else {
          content.push(post)
        }
      });

      commit('setRequestPosts', request);
      commit('setContentPosts', content);

    } catch (e) {
      commit('setErrorState', true);
      commit('setErrorMessages', e.response.data.errors);
    }
  }
};
