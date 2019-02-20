import example from './modules/example';

const debug = process.env.NODE_ENV !== 'production';

export default {
  modules: {
    example
  },
  strict: debug,
  plugins: []
};
