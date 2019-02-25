export default {
  setDrawer(state, drawer) {
    state.drawer = 'drawer';
  },
  toggleDrawer(state, payload) {
    state.drawer = payload;
  }
}
