import Axios from 'axios';

export default {
  async login({commit}, credentials) {
    try {
      const result = await Axios.post('/api/login', credentials, {
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
  }
};
