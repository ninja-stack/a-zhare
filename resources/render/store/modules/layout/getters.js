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

  drawerState(state) {
    return state.drawer;
  },

  colorState(state) {
    return state.color;
  },

  getPosts(state){
    return state.postList;
  }
};

