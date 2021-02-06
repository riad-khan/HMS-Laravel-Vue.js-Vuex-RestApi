const Home = require('./components/home').default;
const login = require('./components/auth/login').default;
const logout = require('./components/auth/logout').default;
const register = require('./components/auth/register').default;
const forgot = require('./components/auth/forgot-password').default;
const reset = require('./components/auth/reset-password').default;

export const routes = [
    { path:'/home', component: Home, name: 'Home'},
    { path:'/', component: login, name: 'login'},
    { path:'/logout', component:logout, name:'logout'},
    { path:'/register', component:register, name:'register'},
    { path:'/forgot-password', component:forgot, name:'forgot'},
    { path:'/reset-password/:token', component:reset, name:'reset'},
]
