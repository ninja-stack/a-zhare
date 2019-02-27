export default {
  isErrorContent(state) {
    return state.isErrorContent;
  },
  isErrorRequest(state) {
    return state.isErrorRequest;
  },

  errorMessagesContent(state) {
    const messages = [];

    for (const error of Object.values(state.errorMessagesContent)) {
      error.forEach((message) => {
        messages.push(message);
      });
    }

    return messages;
  },

  errorMessagesRequest(state) {
    const messages = [];

    for (const error of Object.values(state.errorMessagesRequest)) {
      error.forEach((message) => {
        messages.push(message);
      });
    }

    return messages;
  }
};
