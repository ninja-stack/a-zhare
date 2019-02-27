export default {
  isError(state) {
    return state.isError;
  },

  errorMessages(state) {
    const messages = [];

    for (const error of Object.values(state.errorMessages)) {
      error.forEach((message) => {
        messages.push(message);
      });
    }

    return messages;
  },
  posts(state) {
    return state.posts;
  },

  requestPosts(state) {
    return state.requestPosts;
  },

  contentPosts(state) {
    return state.contentPosts
  }
};
