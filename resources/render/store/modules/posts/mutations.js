export default {
  getPosts(state, posts) {
    state.posts = posts;
  },
  
  increment(state, increment) {
    state.count += increment;
  }
};
