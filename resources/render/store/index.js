import example from './modules/example';
import login from './modules/login';
import signUp from './modules/sign-up';
import createCommunity from './modules/create-community';

const debug = process.env.NODE_ENV !== 'production';

export default {
  modules: {
    example,
    login,
    'sign-up': signUp,
    'create-community': createCommunity
  },
  strict: debug,
  plugins: []
};
