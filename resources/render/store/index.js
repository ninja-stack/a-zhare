import example from './modules/example';
import login from './modules/login';

const debug = process.env.NODE_ENV !== 'production';

export default {
  modules: {
    example,
    login
  },
  strict: debug,
  plugins: []
};
