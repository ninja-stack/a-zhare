import Axios from 'axios';

export default {
  async createContent({commit}, {formData, token}) {
    commit('setErrorContentState', false);

    try {
      await Axios.post('/api/create-content-post', formData, {
        headers: {
          'Accept': 'application/json',
          'Authorization': `${token}`
        }
      });

    } catch (e) {
      console.error(e.response);
      commit('setErrorContentState', true);
      commit('setErrorMessagesContent', e.response.data.errors);
    }
  },
  async createRequest({commit}, {formData, token}) {
    commit('setErrorRequestState', false);

    try {
      await Axios.post('/api/create-request-post', formData, {
        headers: {
          'Accept': 'application/json',
          'Authorization': `${token}`
        }
      });

    } catch (e) {
      console.error(e.response);
      commit('setErrorRequestState', true);
      commit('setErrorMessagesRequest', e.response.data.errors);
    }
  }
};
