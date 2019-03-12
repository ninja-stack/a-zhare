import example from './modules/example';
import layout from './modules/layout';
import login from './modules/login';
import signUp from './modules/sign-up';
import createCommunity from './modules/create-community';
import posts from './modules/posts';
import applicants from './modules/applicants';
import searchCommunity from './modules/search-community';
import createPost from './modules/create-post';

const debug = process.env.NODE_ENV !== 'production';

export default {
  modules: {
    example,
    layout,
    login,
    signUp,
    'create-community': createCommunity,
    posts,
    'search-community': searchCommunity,
    'create-post': createPost,
    applicants
  },
  strict: debug,
  plugins: []
};
