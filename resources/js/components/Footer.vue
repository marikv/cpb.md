<template>
	<div id="footer">
		<footer class="footer">


			<div class="container">

				<div>

					<div class="footer__content-100" style="margin-bottom: 15px;">
						<router-link :to="{ name: 'LandingPage', hash: '#topHeader' }" v-scroll-to="{el: '#topHeader'}">
							<span v-if="lang === 'ro'">Despre noi</span>
							<span v-if="lang === 'ru'">О нас</span>
							<span v-if="lang === 'en'">About</span>
						</router-link>
					</div>
					<div class="footer__content-100" style="margin-bottom: 15px;">
						<a href="#">Articole</a>
					</div>
					<div class="footer__content-100" style="margin-bottom: 15px;">
						<router-link :to="{ name: 'LandingPage', hash: '#PhotoGallery' }"  >
							<span v-if="lang === 'ro'">Galeria Noastră</span>
							<span v-if="lang === 'ru'">Наша галерея</span>
							<span v-if="lang === 'en'">Our Gallery</span>
						</router-link>
					</div>
					<div class="footer__content-100" style="margin-bottom: 15px;">
						<router-link to="/categories">
							<span v-if="lang === 'ro'">Catalog</span>
							<span v-if="lang === 'ru'">Каталог</span>
							<span v-if="lang === 'en'">Catalogue</span>
						</router-link>
					</div>
					<div class="footer__content-100" style="margin-bottom: 15px;">
						<router-link to="/news">
							<span v-if="lang === 'ro'">Noutăți</span>
							<span v-if="lang === 'ru'">Статьи</span>
							<span v-if="lang === 'en'">News</span>
						</router-link>
					</div>
					<div class="footer__content-100" style="margin-bottom: 15px;">
						<router-link to="/custom-products">
							<span v-if="lang === 'ro'">Produse la comandă</span>
							<span v-if="lang === 'ru'">Продукция на заказ</span>
							<span v-if="lang === 'en'">Custom products</span>
						</router-link>
					</div>
					<div class="footer__content-100" style="margin-bottom: 15px;">
						<router-link to="/vacancies">
							<span v-if="lang === 'ro'">Locuri vacante</span>
                            <span v-if="lang === 'ru'">Вакансии</span>
							<span v-if="lang === 'en'">Vacancies</span>
						</router-link>
					</div>
					<div class="footer__content-100" style="margin-bottom: 15px;">
						<router-link :to="{ name: 'LandingPage', hash: '#Contacts' }" v-scroll-to="{el: '#Contacts'}">
							<span v-if="lang === 'ro'">Contacte</span>
							<span v-if="lang === 'ru'">Контакты</span>
							<span v-if="lang === 'en'">Contacts</span>
						</router-link>
					</div>

					<div v-if="lang === 'ru'" class="footer__title">
						<!--					Время работы-->
					</div>
					<div v-else class="footer__title">
						<!--					Ore de lucru-->
					</div>
					<div class="footer__content">
						<!--					<div v-if="lang === 'ru'" class="footer__content-name">Понедельник</div>-->
						<!--					<div v-else class="footer__content-name">Luni</div>-->
						<!--					<div class="footer__content-value">08:00 - 19:00</div>-->
						<!--					<div v-if="lang === 'ru'" class="footer__content-name">Вторник</div>-->
						<!--					<div v-else class="footer__content-name">Marți</div>-->
						<!--					<div class="footer__content-value">08:00 - 19:00</div>-->
						<!--					<div v-if="lang === 'ru'" class="footer__content-name">Среда</div>-->
						<!--					<div v-else class="footer__content-name">Miercuri</div>-->
						<!--					<div class="footer__content-value">08:00 - 19:00</div>-->
						<!--					<div v-if="lang === 'ru'" class="footer__content-name">Четверг</div>-->
						<!--					<div v-else class="footer__content-name">Joi</div>-->
						<!--					<div class="footer__content-value">08:00 - 19:00</div>-->
						<!--					<div v-if="lang === 'ru'" class="footer__content-name">Пятница</div>-->
						<!--					<div v-else class="footer__content-name">Vineri</div>-->
						<!--					<div class="footer__content-value">08:00 - 19:00</div>-->
						<!--					<div style="width: 100%;margin-bottom: 10px;"></div>-->
						<!--					<div v-if="lang === 'ru'" class="footer__content-name">Суббота</div>-->
						<!--					<div v-else class="footer__content-name">Sâmbătă</div>-->
						<!--					<div class="footer__content-value">08:00 - 17:00</div>-->
						<!--					<div v-if="lang === 'ru'" class="footer__content-name">Воскресенье</div>-->
						<!--					<div v-else class="footer__content-name">Duminică</div>-->
						<!--					<div class="footer__content-value">08:00 - 17:00</div>-->
					</div>
				</div>
				<div style="text-align: center">
					<div v-if="lang === 'ru'" class="footer__title">Адрес</div>
					<div v-else class="footer__title">Adresa</div>

					<div class="footer__content">
						<div class="footer__content-100" style="margin-bottom: 15px;">
							or. Bălți, str.Stefan cel Mare 111
						</div>

						<div class="footer__langs-container">
							<div class="footer__lang-item" :class="{'active': lang === 'ro'}" @click="setLang('ro')">
								<img class="flag" src="/img/ro.svg"></div>
							<div class="footer__lang-item" :class="{'active': lang === 'ru'}" @click="setLang('ru')">
								<img class="flag" src="/img/ru.svg"></div>
							<div class="footer__lang-item" :class="{'active': lang === 'en'}" @click="setLang('en')">
								<img class="flag" src="/img/en.svg"></div>
						</div>

					</div>
				</div>
				<div style="text-align: right">
					<div v-if="lang === 'ru'" class="footer__title">Контакты</div>
					<div v-else class="footer__title">Contacte</div>
					<div class="footer__content">
						<div class="footer__content-100">
							<a v-if="phone1" :href="`tel:${phone1}`">
								{{phone1}}
							</a>
							<a v-if="phone2" :href="`tel:${phone2}`">
								{{phone2}}
							</a>
						</div>
						<div class="footer__content-100" style="margin: 10px 0;">
							<a :href="`mailto:${email}`">
								{{email}}
							</a>
						</div>
						<div class="footer__content-100">
							<a class="a-img" href="https://www.facebook.com/cpbmd/" target="_blank">
								<img src="/img/facebook.svg" style="height: 30px;">
							</a>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
</template>

<script>
	import menuComponent from './menuComponent';
	export default {
		components: {
			menuComponent,
		},
		computed: {
			lang() {
				return this.$store.getters.getLang;
			},
			phone1() {
				return window.settingsData['phone1'];
			},
			phone2() {
				return window.settingsData['phone2'];
			},
			email() {
				return window.settingsData['email'];
			},
		},
		methods: {
			setLang(lang) {
				this.$store.commit('setLang', lang);
			}
		},
		mounted() {

		}
	}
</script>

<style>
	#footer {
		font-weight: 200;
	}
	#footer .footer__langs-container {
		display: flex;
		width: 100%;
		align-items: center;
		justify-content: center;
	}

	#footer .footer__lang-item {
		padding: 2px;
		border: 1px solid transparent;
		border-radius: 3px;
		display: flex;
		align-items: center;
		justify-content: center;
		margin-right: 7px;
		margin-top: 10px;
		cursor: pointer;
	}

	#footer .footer__lang-item.active {
		border: 1px solid white;
	}

	#footer .footer__lang-item .flag {
		width: 18px;
		height: 15px;
		margin: 2px;
	}

	#footer footer {
	    background: #15304E;
		background: linear-gradient(90deg, rgba(2, 0, 36, 0.8) 0%, rgba(9, 9, 121, 0.8) 35%, rgba(0, 116, 140, 0.8) 100%);
		color: white;
		padding: 80px 20px 80px 20px;
	}

	#footer .footer__title {
		font-size: 16px;
		font-weight: bold;
		margin-bottom: 30px;
	}

	#footer .footer__content {
		display: flex;
		flex-wrap: wrap;
		margin-bottom: 30px;
	}

	#footer .footer__content-name {
		width: 50%;
	}

	#footer .footer__content-value {
		width: 50%;
	}

	#footer .footer__content-100 {
		width: 100%;
	}

	#footer a,
	#footer a:visited,
	#footer a:link,
	#footer a:hover {
		color: white;
		text-decoration: none;
		border-bottom: 1px dashed white;
	}

	#footer a.a-img,
	#footer a.a-img:link,
	#footer a.a-img:visited,
	#footer a.a-img:active {
		border: none;
		margin: 7px 10px 0 0;
		display: inline-block;
	}

	#footer footer .container {
		display: flex;
		flex-wrap: wrap;
	}

	#footer footer .container > div {
		width: 100%;
		float: left;
	}

	@media (min-width: 1155px) {
		#footer footer {
			padding: 100px 0 80px 0;
		}
	}

	@media (min-width: 768px) {
		#footer footer .container > div {
			width: 33.33%;
		}
	}
</style>
