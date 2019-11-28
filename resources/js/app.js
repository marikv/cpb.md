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

import News from './components/News';
import LandingPage from './components/LandingPage';


Vue.use(VueRouter);
const router = new VueRouter({
	routes:[
		{
			path: '/',
			component: LandingPage,
		},
		{
			path: '/news',
			component: News,
		},
		{
			path: '*',
			redirect: '/404',
		}
	]
});
Vue.router = router;

Vue.use(VueAxios, axios);

axios.defaults.baseURL = '';

App.router = Vue.router;
App.store = store;
new Vue(App).$mount('#app');
