export default {
  setErrorContentState(state, status) {
    state.isErrorContent = status;
  },
  setErrorRequestState(state, status) {
    state.isErrorRequest = status;
  },
  setErrorMessagesContent(state, messages) {
    state.errorMessagesContent = messages;
  },
  setErrorMessagesRequest(state, messages) {
    state.errorMessagesRequest = messages;
  }
};
