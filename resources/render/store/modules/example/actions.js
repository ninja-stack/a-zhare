export default {
  async increase({commit}, count) {
    commit('increment', count);
  }
};
