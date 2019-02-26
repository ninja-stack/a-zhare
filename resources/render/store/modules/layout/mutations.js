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
  setDrawer(state, drawer) {
    state.drawer = 'drawer';
  },
  toggleDrawer(state, payload) {
    state.drawer = payload;
  },
  setPostList(state, postList) {
    state.postList = postList;
  }
}
