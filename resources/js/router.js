import Vue from 'vue'
import VueRouter from 'vue-router'
import HomePage from './pages/HomePage'
import AboutPage from './pages/AboutPage'

Vue.use(VueRouter);

const routes = [
    {path: '/', component: HomePage},
    {path: '/about', component: AboutPage}
];
const router = new VueRouter({
    mode: 'history',
    routes
});

export default router;