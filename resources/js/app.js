window._ = require('lodash');

window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Vue = require('vue'); 
window.ElementUI = require('element-ui');
//import 'element-ui/lib/theme-chalk/index.css';
import lang from 'element-ui/lib/locale/lang/es'

Vue.use(lang)

Vue.use(ElementUI);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',   
});
