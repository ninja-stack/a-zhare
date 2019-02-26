import Axios from 'axios';

export default {
  async getPosts ({commit}, slug) {
    const result = await Axios.get(`/api/community/${slug}`, {
      headers: {
        'Accept': 'application/json'
      }
    })
  },
  async increase({commit}, count) {
    commit('increment', count);
  }
};
