const Home = require('./components/home').default;
const login = require('./components/auth/login').default;
const logout = require('./components/auth/logout').default;
const register = require('./components/auth/register').default;

export const routes = [
    { path:'/home', component: Home, name: 'Home'},
    { path:'/', component: login, name: 'login'},
    { path:'/logout', component:logout, name:'logout'},
    { path:'/register', component:register, name:'register'},
]
