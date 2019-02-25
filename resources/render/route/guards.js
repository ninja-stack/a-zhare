export const beforeEach = (to, from, next) => {
  const token = localStorage.getItem('token');

  if (to.fullPath === '/login' || to.fullPath === '/signup') {
    if (token === null) {
      next();
    } else {
      next('/');
    }
  } else if (to.fullPath === '/logout') {
    localStorage.clear();
    next('/login');
  } else {
    if (token === null) {
      next('/login');
    } else {
      next();
    }
  }
};
