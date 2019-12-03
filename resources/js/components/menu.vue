<template>
		<ul :id="id" class="site-menu">
			<li>
				<router-link to="/" v-scroll-to="{el: '#home-section'}">
					<span v-if="lang === 'ru'">О нас</span>
					<span v-if="lang === 'ro'">Despre noi</span>
					<span v-if="lang === 'en'">About</span>
				</router-link>
			</li>
			<li>
				<a href="/#PhotoGallery" v-scroll-to="{el: '#PhotoGallery'}">
					<span v-if="lang === 'ru'">Наша галерея</span>
					<span v-if="lang === 'ro'">Galeria Nostră</span>
					<span v-if="lang === 'en'">Our Gallery</span>
				</a>
			</li>
			<li>
				<a href="/#products">
					<span v-if="lang === 'ru'">Каталог</span>
					<span v-if="lang === 'ro'">Catalog</span>
					<span v-if="lang === 'en'">Catalogue</span>
				</a>
			</li>
			<li>
				<router-link to="/news">
					<span v-if="lang === 'ru'">Статьи</span>
					<span v-if="lang === 'ro'">Articole</span>
					<span v-if="lang === 'en'">News</span>
				</router-link>
			</li>
			<li>
				<a href="#footer" v-scroll-to="{el: '#footer'}">
					<span v-if="lang === 'ro'">Contacte</span>
					<span v-if="lang === 'ru'">Контакты</span>
					<span v-if="lang === 'en'">Contacts</span>
				</a>
			</li>
			<li>
				<a href="javascript:void(0)" @click.stop.prevent="showLangs=!showLangs">
					<div class="lang-item"><img class="flag" :src="`/img/${lang}.svg`"> {{langName}}</div>
				</a>
				<div class="langs-container" v-show="showLangs">
					<div class="lang-item" v-show="lang!=='ro'" @click="setLang('ro')"><img class="flag" src="/img/ro.svg"> Ro</div>
					<div class="lang-item" v-show="lang!=='ru'" @click="setLang('ru')"><img class="flag" src="/img/ru.svg"> Ру</div>
					<div class="lang-item" v-show="lang!=='en'" @click="setLang('en')"><img class="flag" src="/img/en.svg"> En</div>
				</div>
			</li>
		</ul>
</template>

<script>
	
	export default {
		props: ['id'],
		data() {
			return {
				showLangs: false,
			};
		},
		computed: {
			langName() {
				if (this.lang === 'en') {
					return 'En';
				}
				return this.lang === 'ro' ? 'Ro' : 'Ру';
			},
			lang() {
				return this.$store.getters.getLang;
			},
		},
		methods: {
			setLang(lang) {
				this.showLangs = false;
				this.$store.commit('setLang', lang);
			},
		},
	}
</script>

<style>
	.site-navigation-mobile {
		display: block;
	}
	
	.flag {
		height: 14px;
		margin-right: 5px;
		border-radius: 3px;
	}
	.langs-container {
		position: absolute;
		z-index: 3;
		background: white;
		padding: 0 20px 10px;
		border-radius: 10px;
	}
	.lang-item {
		display: flex;
		align-items: center;
		cursor: pointer;
	}
	.lang-item:hover {
		color: #003176;
	}
</style>
