export default {
  setErrorState(state, status) {
    state.isError = status;
  },
  setErrorMessages(state, messages) {
    state.errorMessages = messages;
  },
  setCommunities(state, result) {
    state.communities = result;
  },
  setSuccessState(state, status) {
    state.isSuccess = status;
  },
  setSuccessMessage(state, message) {
    state.successMessage = message;
  }
};
