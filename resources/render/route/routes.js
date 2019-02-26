import Home from '../views/Home';
import Login from '../views/Login';
import Profile from '../views/Profile';
import Community from '../views/Community';
import SignUp from '../views/SignUp';
import Chat from '../views/Chat';
import CreateCommunity from '../views/CreateCommunity';
import CreatePost from '../views/CreatePost';
import RequestDetail from '../views/RequestDetail';

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
      name: 'community',
      path: '/community/:slug',
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
      path: '/chat',
      component: Chat
    },
    {
      path: '/create-community',
      component: CreateCommunity
    },
    {
      path: '/new-post',
      component: CreatePost
    },
    {
      path: '/request_detail',
      component: RequestDetail
    }
  ]
};
