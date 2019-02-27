export default {
  setErrorState(state, status) {
    state.isError = status;
  },
  setErrorMessages(state, messages) {
    state.errorMessages = messages;
  },
  setPosts(state, applicants) {
    state.applicants = applicants;
  }
};
