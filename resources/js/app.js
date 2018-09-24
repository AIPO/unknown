require('./bootstrap');

import Vue from 'vue'
import Buefy from 'buefy'

window.Vue = Vue;
Vue.use(Buefy);

import router from './router'


let MainHeader = require('./partials/MainHeader.vue');
let MainFooter = require('./partials/MainFooter.vue');


const app = new Vue({
    el: '#app',
    router,
    components: {MainHeader, MainFooter},
});
