<template>
	<div  id="footer">
		
		<div  class="maps__wrapper">
			<div class="maps__map maps__map1"></div>
		</div>
		
		<footer class="footer">
		<div class="container">
			<div>
				
				<div class="footer__content-100" style="margin-bottom: 15px;">
					<a href="#">Despre noi</a>
				</div>
				<div class="footer__content-100" style="margin-bottom: 15px;">
					<a href="#">Articole</a>
				</div>
				<div class="footer__content-100" style="margin-bottom: 15px;">
					<a href="#">Contacte</a>
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
					
					<div class="footer__langs-container" >
						<div class="footer__lang-item" :class="{'active': lang === 'ro'}" @click="setLang('ro')"><img class="flag" src="/img/ro.svg"></div>
						<div class="footer__lang-item" :class="{'active': lang === 'ru'}" @click="setLang('ru')"><img class="flag" src="/img/ru.svg"></div>
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
					<div class="footer__content-100">
						<a href="mailto:cereri@gmail.com">
							info@cpb.md
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
	export default {
		components: {
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
	.maps__wrapper {
		width: 100%;
		display: flex;
		padding: 10px 0 10px 0;
	}
	.maps__map {
		width: 100%;
		height: 400px;
	}
	.maps__map1 {
		background: url('/img/map.jpg');
		margin-right: 5px;
		background-position: center;
		background-position-x: center;
		background-position-y: center;
	}
	@media (max-width: 768px) {
		.maps__wrapper {
			flex-wrap: wrap;
		}
		.maps__map {
			width: 100%;
			margin: 5px;
		}
	}
	.footer__langs-container {
		display: flex;
		width: 100%;
		align-items: center;
		justify-content: center;
	}
	.footer__lang-item {
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
	.footer__lang-item.active {
		border: 1px solid white;
	}
	.footer__lang-item .flag {
		width: 18px;
		height: 15px;
		margin: 2px;
	}
	footer {
		background: linear-gradient(0deg, #7a0701 0%, #a40a02 100%);
		color: white;
		padding: 50px 20px 80px 20px;
	}
	.footer__title {
		font-size: 16px;
		font-weight: bold;
		margin-bottom: 30px;
	}
	.footer__content {
		display: flex;
		flex-wrap: wrap;
		margin-bottom: 30px;
	}
	.footer__content-name {
		width: 50%;
	}
	.footer__content-value {
		width: 50%;
	}
	.footer__content-100 {
		width: 100%;
	}
	a, a:visited, a:link, a:hover {
		color: white;
		text-decoration: none;
		border-bottom: 1px dashed white;
	}
	a.a-img,
	a.a-img:link,
	a.a-img:visited,
	a.a-img:active {
		border: none;
		margin: 7px 10px 0 0;
		display:inline-block;
	}
	
	footer .container {
		display: flex;
		flex-wrap: wrap;
	}
	
	footer .container > div {
		width: 100%;
		float: left;
	}
	
	@media (min-width: 1155px) {
		footer {
			padding: 50px 0 80px 0;
		}
	}
	@media (min-width: 768px) {
		footer .container > div {
			width: 33.33%;
		}
	}
</style>
