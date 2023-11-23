import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';
import VueAxios from 'vue-axios';
import VueScrollTo from 'vue-scrollto';
import App from './App.vue';
import store from './store';

import VueGlide from 'vue-glide-js';
import 'vue-glide-js/dist/vue-glide.css';
Vue.use(VueGlide);

import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';
Vue.use(VueSweetalert2, {
	confirmButtonColor: '#41b882',
	cancelButtonColor: '#ff7674',
});


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

import LandingPage from './components/LandingPage';
import News from './components/News';
import Article from './components/News/Article';
import Categories from './components/Products';
import Category from './components/Products/ProductsList';
import Product from './components/Products/Product';
import CustomProducts from './components/Pages/CustomProducts';
import SimplePage from "./components/Pages/SimplePage.vue";


Vue.use(VueRouter);
const router = new VueRouter({
	routes:[
		{
			path: '/',
			component: LandingPage,
			name: 'LandingPage',
		},
		{
			path: '/news',
			component: News,
			meta: { scrollToTop: true },
		},
		{
			path: '/custom-products',
			component: CustomProducts,
			meta: { scrollToTop: true },
		},
		{
			path: '/vacancies',
			component: SimplePage,
			meta: { scrollToTop: true },
		},
		{
			path: '/article/:id',
			component: Article,
			meta: { scrollToTop: true },
		},
		{
			path: '/categories',
			component: Categories,
			meta: { scrollToTop: true },
		},
		{
			path: '/category/:id',
			component: Category,
			props: true,
			meta: { scrollToTop: true },
		},
		{
			path: '/products/:id',
			component: Product,
			props: true,
			meta: { scrollToTop: true },
		},
		{
			path: '*',
			redirect: '/404',
			meta: { scrollToTop: true },
		}
	],
	mode: 'history',
	scrollBehavior (to, from, savedPosition) {
		if (to.hash) {
			return window.scrollTo({
				top: document.querySelector(to.hash).offsetTop,
				behavior: 'smooth'
			})
		} else {
			return { x: 0, y: 0 }
		}
	}
});
Vue.router = router;

Vue.use(VueAxios, axios);

axios.defaults.baseURL = '';

App.router = Vue.router;
App.store = store;
new Vue(App).$mount('#app');
