<template>
		<ul :id="id" class="site-menu" @click="menuClick">
			<li>
				<router-link :to="{ name: 'LandingPage', hash: '#topHeader' }" v-scroll-to="{el: '#topHeader'}">
					<span v-if="lang === 'ro'">Despre noi</span>
					<span v-if="lang === 'ru'">О нас</span>
					<span v-if="lang === 'en'">About</span>
				</router-link>
			</li>
			<li>
				<router-link :to="{ name: 'LandingPage', hash: '#PhotoGallery' }"  >
					<span v-if="lang === 'ro'">Galeria<br>Noastră</span>
					<span v-if="lang === 'ru'">Наша<br>галерея</span>
					<span v-if="lang === 'en'">Our Gallery</span>
				</router-link>
			</li>
			<li>
				<router-link to="/categories">
					<span v-if="lang === 'ro'">Catalog</span>
					<span v-if="lang === 'ru'">Каталог</span>
					<span v-if="lang === 'en'">Catalogue</span>
				</router-link>
			</li>
			<li>
				<router-link to="/news">
					<span v-if="lang === 'ro'">Noutăți</span>
					<span v-if="lang === 'ru'">Статьи</span>
					<span v-if="lang === 'en'">News</span>
				</router-link>
			</li>
			<li>
				<router-link to="/custom-products">
					<span v-if="lang === 'ro'">Produse la<br>comandă</span>
					<span v-if="lang === 'ru'">Продукция<br>на заказ</span>
					<span v-if="lang === 'en'">Custom<br>products</span>
				</router-link>
			</li>
            <li>
                <router-link to="/vacancies">
                    <span v-if="lang === 'ro'">Locuri<br>vacante</span>
                    <span v-if="lang === 'ru'">Вакансии</span>
                    <span v-if="lang === 'en'">Vacancies</span>
                </router-link>
            </li>
			<li>
				<router-link :to="{ name: 'LandingPage', hash: '#Contacts' }" v-scroll-to="{el: '#Contacts'}">
					<span v-if="lang === 'ro'">Contacte</span>
					<span v-if="lang === 'ru'">Контакты</span>
					<span v-if="lang === 'en'">Contacts</span>
				</router-link>
			</li>
			<li>
				<a href="javascript:void(0)" @click.stop.prevent="showLangs=!showLangs">
					<div class="lang-item">
						<img class="flag" :src="`/img/${lang}.svg`">
<!--						{{langName}}-->
					</div>
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
			menuClick() {
				document.getElementById('menuMobileToggleCheckbox').checked = !document.getElementById('menuMobileToggleCheckbox').checked;
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
