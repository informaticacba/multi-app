window._ = require('lodash');
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.Vue = require('vue'); 

import ElementUI from 'element-ui';
import VueRouter from 'vue-router';
   
Vue.use(VueRouter);
Vue.use(ElementUI);

Vue.component('layout-component', require('./components/LayoutComponent.vue').default)

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'login',
            component: Vue.component('login-component', require('./components/LoginComponent.vue').default)
        },
        {
            path: '/home',
            name: 'home',
            component: Vue.component('home-component', require('./components/HomeComponent.vue').default),
        },
    ],
});

const app = new Vue({ 
    el: '#app', 
    router,    
});

