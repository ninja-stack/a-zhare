export default {
  isError(state) {
    return state.isError;
  },
  errorMessages(state) {
    const messages = [];

    console.log(state);

    for (const error of Object.values(state.errorMessages)) {
      error.forEach((message) => {
        messages.push(message);
      });
    }

    return messages;
  }
};

