import Home from '../views/Home';
import Login from '../views/Login';
import Profile from '../views/Profile';
import Community from '../views/Community';
import SignUp from '../views/SignUp';
import CreateCommunity from '../views/CreateCommunity';

export default {
  mode: 'history',
  routes: [
    {
      path: '/',
      component: Home
    },
    {
      path: '/login',
      component: Login
    },
    {
      path: '/community',
      component: Community
    },
    {
      path: '/profile',
      component: Profile
    },
    {
      path: '/signup',
      component: SignUp
    },
    {
      path: '/create-community',
      component: CreateCommunity
    }
  ]
};
