import Vue from 'vue';
import { router } from './plugins/router';
import { store } from './plugins/vuex';
import './plugins/vuetify';
import App from './App';

new Vue({
  el: '#app',
  store,
  router,
  render: h => h(App)
});
