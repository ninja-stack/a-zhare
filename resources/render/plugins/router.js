import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from '../route/routes';
import { beforeEach } from '../route/guards';

Vue.use(VueRouter);

const Router = new VueRouter(routes);
Router.beforeEach(beforeEach);

export const router = Router;

