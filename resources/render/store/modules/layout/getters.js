export default {
  isError(state) {
    return state.isError;
  },

  drawerState(state) {
    return state.drawer;
  },

  colorState(state) {
    return state.color;
  },

  getCommunities(state){
    return state.communities;
  }
};

