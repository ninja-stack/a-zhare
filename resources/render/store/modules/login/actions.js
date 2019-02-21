export default {
  async login({commit}, count) {
    commit('increment', count);
  }
};
