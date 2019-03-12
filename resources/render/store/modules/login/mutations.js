export default {
  setLoadingState(state, status) {
    state.isLoading = status;
  },
  setErrorState(state, status) {
    state.isError = status;
  },
  setErrorMessages(state, messages) {
    state.errorMessages = messages;
  },
  restart(state) {
    state.isError = false;
    state.errorMessages = {};
  }
};
