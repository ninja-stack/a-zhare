import example from './modules/example';
import login from './modules/login';
import signUp from './modules/signUp';

const debug = process.env.NODE_ENV !== 'production';

export default {
  modules: {
    example,
    login,
    signUp
  },
  strict: debug,
  plugins: []
};
