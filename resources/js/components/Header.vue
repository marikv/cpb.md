<template>
	<div style="position: relative">
		
		<div class="top-header">
			<div class="container">
				<div class="flex" style="justify-content: space-between;">
					<div class="logo">
						<a href="/">
							<img src="/img/logo_box_mini.png" alt="Credit Box">
						</a>
						<a href="/" class="logo-text">CPB</a>
					</div>
					<div class="phones">
						<a href="tel:+37323185858">
							0(231) 8-58-58
						</a>
						<a href="tel:+37323189058">
							0(231) 8-90-58
						</a>
					</div>
					<div class="site-navbar">
						<nav class="site-navigation position-relative text-right" role="navigation">
							<ul class="site-menu">
								<li>
									<a href="#calculator-section" v-scroll-to="{el: '#calculator-section'}">
										<span v-if="lang === 'ru'">Калькулятор</span>
										<span v-else>Calculator</span>
									</a>
								</li>
								<li>
									<a href="#cerere-online" v-scroll-to="{el: '#cerere-online'}">
										<span v-if="lang === 'ru'">Онлайн заявка</span>
										<span v-else>Cerere Online</span>
									</a>
								</li>
								<li>
									<a href="#faq-section" v-scroll-to="{el: '#faq-section'}">FAQ</a>
								</li>
								<li>
									<a href="#footer" v-scroll-to="{el: '#footer'}">
										<span v-if="lang === 'ru'">Контакты</span>
										<span v-else>Contacte</span>
									</a>
								</li>
								<li>
									<a href="javascript:void(0)" @click.stop.prevent="showLangs=!showLangs">
										<div class="lang-item"><img class="flag" :src="`/img/${lang}.svg`"> {{langName}}</div>
									</a>
									<div class="langs-container" v-show="showLangs">
										<div class="lang-item" v-show="lang!=='ro'" @click="setLang('ro')"><img class="flag" src="/img/ro.svg"> Ro</div>
										<div class="lang-item" v-show="lang!=='ru'" @click="setLang('ru')"><img class="flag" src="/img/ru.svg"> Ру</div>
									</div>
								</li>
							</ul>
						</nav>
					</div>
					
					<nav role='navigation' class="site-navigation-mobile">
						<div id="menuMobileToggle">
							<input type="checkbox" />
							<span></span>
							<span></span>
							<span></span>
							<ul id="menuMobile">
								<li>
									<a href="#calculator-section" v-scroll-to="{el: '#calculator-section'}">
										<span v-if="lang === 'ru'">Калькулятор</span>
										<span v-else>Calculator</span>
									</a>
								</li>
								<li>
									<a href="#cerere-online" v-scroll-to="{el: '#cerere-online'}">
										<span v-if="lang === 'ru'">Онлайн заявка</span>
										<span v-else>Cerere Online</span>
									</a>
								</li>
								<li>
									<a href="#faq-section" v-scroll-to="{el: '#faq-section'}">FAQ</a>
								</li>
								<li>
									<a href="#footer" v-scroll-to="{el: '#footer'}">
										<span v-if="lang === 'ru'">Контакты</span>
										<span v-else>Contacte</span>
									</a>
								</li>
								<li>
									<a href="javascript:void(0)" @click.stop.prevent="showLangs=!showLangs">
										<div class="lang-item"><img class="flag" :src="`/img/${lang}.svg`"> {{langName}}</div>
									</a>
									<div class="langs-container" v-show="showLangs">
										<div class="lang-item" v-show="lang!=='ro'" @click="setLang('ro')"><img class="flag" src="/img/ro.svg"> Ro</div>
										<div class="lang-item" v-show="lang!=='ru'" @click="setLang('ru')"><img class="flag" src="/img/ru.svg"> Ру</div>
									</div>
								</li>
							</ul>
						</div>
					</nav>
					
					
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				showLangs: false,
				//lang: 'ro',
			};
		},
		computed: {
			langName() {
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

<style scoped>
	
	.site-navigation-mobile {
		display: block;
	}
	#menuMobileToggle{
		display: block;
		position: absolute;
		z-index: 999;
		top: 20px;
		right: 40px;
		-webkit-user-select: none;
		user-select: none;
	}
	#menuMobileToggle input{
		display: block;
		width: 40px;
		height: 32px;
		position: absolute;
		top: -7px;
		left: -5px;
		cursor: pointer;
		opacity: 0; /* hide this */
		z-index: 2; /* and place it over the hamburger */
		-webkit-touch-callout: none;
	}
	#menuMobileToggle span{
		display: block;
		width: 33px;
		height: 4px;
		margin-bottom: 5px;
		position: relative;
		background: #949494;
		border-radius: 3px;
		z-index: 1;
		transform-origin: 4px 0px;
		transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
		background 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
		opacity 0.55s ease;
	}
	#menuMobileToggle span:first-child {
		transform-origin: 0% 0%;
	}
	#menuMobileToggle span:nth-last-child(2) {
		transform-origin: 0% 100%;
	}
	#menuMobileToggle input:checked ~ span {
		opacity: 1;
		transform: rotate(45deg) translate(-2px, -1px);
		background: #535353;
	}
	#menuMobileToggle input:checked ~ span:nth-last-child(3) {
		opacity: 0;
		transform: rotate(0deg) scale(0.2, 0.2);
	}
	#menuMobileToggle input:checked ~ span:nth-last-child(2) {
		opacity: 1;
		transform: rotate(-45deg) translate(0, -1px);
	}
	#menuMobile {
		position: fixed;
		width: 300px;
		margin: -100px 0 0 0;
		padding: 50px;
		padding-top: 125px;
		right: -100px;
		background: #ffffff;
		list-style-type: none;
		-webkit-font-smoothing: antialiased;
		transform-origin: 0% 0%;
		transform: translate(100%, 0);
		transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
		border-bottom-left-radius: 30px;
		box-shadow: -4px 3px 17px 3px rgba(0, 0, 0, 0.37);
	}
	#menuMobile li{
		padding: 10px 0;
		font-size: 18px;
	}
	#menuMobileToggle input:checked ~ ul{
		transform: scale(1.0, 1.0);
		opacity: 1;
	}
	#menuMobileToggle li > a {
		padding: 5px 20px;
		color: #000;
		display: inline-block;
		text-decoration: none !important;
	}
	#menuMobileToggle li > a:hover {
		color: #4cbc09;
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	.top-header {
		box-shadow: 0px 10px 16px rgba(84, 83, 83, 0.15);
		/*position: absolute;*/
		width: 100%;
		z-index: 1;
		background: white;
	}
	.logo {
		width: 220px;
		display: flex;
		align-items: center;
	}
	.logo-text {
		font-family: "Harabara Mais Demo";
		font-size: 24px;
		padding-top: 10px;
		padding-left: 6px;
	}
	.logo a {
		color: black;
		text-decoration: none;
	}
	.logo a img {
		margin-top: 10px;
		height: 30px;
	}
	.phones {
		width: 220px;
		display: flex;
		flex-wrap: wrap;
		font-size: 15px;
		align-items: center;
		padding-left: 40px;
		padding-top: 10px;
		padding-bottom: 10px;
	}
	.phones a {
		color: #4cbc09;
		text-decoration: none;
		padding-right: 20px;
	}
	.site-navbar {
		width: calc(100% - 200px);
		display: none;
	}
	
	.site-navbar .site-navigation .site-menu > li {
		display: inline-block;
	}
	
	.site-navbar .site-navigation .site-menu .active {
		color: #4cbc09;
		display: inline-block;
		padding: 5px 20px;
	}
	
	.site-navbar .site-navigation .site-menu > li > a {
		padding: 5px 20px;
		color: #000;
		display: inline-block;
		text-decoration: none !important;
	}
	
	.site-navbar .site-navigation .site-menu > li > a:hover {
		color: #4cbc09;
	}
	
	.site-navbar .site-navigation .site-menu a {
		text-decoration: none !important;
		display: inline-block;
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
		color: #4cbc09;
	}
	
	@media (max-width: 550px) {
		.phones {
			width: 180px;
			font-size: 14px;
			padding-left: 20px;
		}
		#menuMobileToggle {
			right: 5px;
		}
	}
	@media (min-width: 1000px) {
		.site-navbar {
			display: block;
		}
		
		.logo a img {
			margin-top: 10px;
			height: 40px;
		}
		
		.site-navigation-mobile {
			display: none;
		}
	}
</style>
