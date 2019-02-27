import Axios from 'axios';

export default {
  async getApplicants({commit}, postId) {
    try {
      const result = await Axios.get(`/api/applicants/?postId=${postId}`, {
        headers: {
          'Accept': 'application/json'
        }
      });
      
      commit('setApplicants', result.data.applicants);

    } catch (e) {
      commit('setErrorState', true);
      commit('setErrorMessages', e.response.data.errors);
    }
    
  }
};
