import Vue from 'vue';
import Vuex, { Store } from 'vuex';
import config from '../store';

Vue.use(Vuex);

export const store = new Store(config);
