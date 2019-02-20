import Vue from 'vue';
import Buefy from 'buefy';
import { router } from './plugins/router';
import { store } from './plugins/vuex';
import App from './App';
import 'buefy/dist/buefy.min.css';

Vue.use(Buefy);

new Vue({
  el: '#app',
  store,
  router,
  render: h => h(App)
});
