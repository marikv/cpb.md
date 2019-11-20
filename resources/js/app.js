import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';
import VueAxios from 'vue-axios';
import VueScrollTo from 'vue-scrollto';
import App from './App.vue';
import store from './store';

Vue.use(VueScrollTo, {
	container: "body",
	duration: 500,
	easing: "ease",
	offset: -40,
	force: true,
	cancelable: true,
	onStart: false,
	onDone: false,
	onCancel: false,
	x: false,
	y: true
});

Vue.use(VueRouter);
Vue.use(VueAxios, axios);

axios.defaults.baseURL = '';

App.store = store;
new Vue(App).$mount('#app');
