export default {
  setDrawer({commit}, value) {
    commit('setDrawer', value);
    commit('toggleDrawer', value);
  },
};
