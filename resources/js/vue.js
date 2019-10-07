import Vue from 'vue';

Vue.component('my-component', require('./components/List.vue').default);
Vue.component('modal', require('./components/Modal.vue').default);

const app = new Vue({
    el: '#app_vue',
});