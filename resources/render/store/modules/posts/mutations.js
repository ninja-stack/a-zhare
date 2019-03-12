export default {
  setErrorState(state, status) {
    state.isError = status;
  },
  setErrorMessages(state, messages) {
    state.errorMessages = messages;
  },
  setPosts(state, posts) {
    state.posts = posts;
  },
  setRequestPosts(state, posts) {
    state.requestPosts = posts;
  },
  setContentPosts(state, posts) {
    state.contentPosts = posts;
  },
  setCommunity(state, community) {
    state.community = community;
  }
};
