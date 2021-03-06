import Axios from 'axios';

export default {
  async login({commit}, credentials) {
    commit('setErrorState', false);
    try {
      const result = await Axios.post('/api/login', credentials, {
        headers: {
          'Accept': 'application/json'
        }
      });

      const token = result.headers.authorization;
      localStorage.setItem('token', token);
    } catch (e) {
      if (!process.env.PRODUCTION) {
        console.error(e.response);
      }
      commit('setErrorState', true);
      commit('setErrorMessages', e.response.data.errors);
    }
  },
  async restart({commit}) {
    commit('restart');
  }
};
