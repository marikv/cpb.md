<template>
	<div id="topHeader">
		
		<div class="top-header">
			<div class="container">
				<div class="flex" style="justify-content: space-between;">
					<div class="logo">
						<a v-if="logoSrc" href="/">
							<img :src="logoSrc" alt="">
						</a>
						<a v-if="logoText" href="/" class="logo-text">{{logoText}}</a>
					</div>
					<div class="phones">
						<a v-if="phone1" :href="`tel:${phone1}`">
							{{phone1}}
						</a>
						<a v-if="phone2" :href="`tel:${phone2}`">
							{{phone2}}
						</a>
					</div>
					<div class="site-navbar">
						<nav class="site-navigation position-relative text-right" role="navigation">
							<menuComponent id="menuDesktop"></menuComponent>
						</nav>
					</div>
					
					<nav role='navigation' class="site-navigation-mobile">
						<div id="menuMobileToggle">
							<input type="checkbox" id="menuMobileToggleCheckbox" />
							<span></span>
							<span></span>
							<span></span>
							<menuComponent id="menuMobile"></menuComponent>
						</div>
					</nav>
					
					
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	import menuComponent from './menuComponent';
	export default {
		components: {
			menuComponent,
		},
		data() {
			return {
			};
		},
		computed: {
			lang() {
				return this.$store.getters.getLang;
			},
			logoSrc() {
				return window.settingsData.logoImgFile ? `/uploads/${window.settingsData.logoImgFile}` : '';
			},
			logoText() {
				return window.settingsData[`logotext_${this.lang}`];
			},
			phone1() {
				return window.settingsData['phone1'];
			},
			phone2() {
				return window.settingsData['phone2'];
			},
		},
		methods: {
		},
	}
</script>

<style>
	#topHeader {
		position: absolute;
		z-index: 3;
		width: 100%;
		font-weight: 200;
	}
	.site-navigation-mobile {
		display: block;
	}
	#menuDesktop {
		padding: 0;
	}
	#menuMobileToggle{
		display: block;
		position: absolute;
		z-index: 999;
		top: 10px;
		right: 30px;
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
	#menuMobileToggle > span{
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
	#menuMobileToggle > span:first-child {
		transform-origin: 0% 0%;
	}
	#menuMobileToggle > span:nth-last-child(2) {
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
		color: #003176;
	}
	.top-header {
		box-shadow: 0px 10px 16px rgba(84, 83, 83, 0.15);
		width: 100%;
		z-index: 1;
		background: white;
	}
	.logo {
		width: 140px;
		display: flex;
		align-items: center;
	}
	.logo-text {
		font-size: 24px;
		padding-top: 10px;
		padding-left: 6px;
	}
	.logo a {
		color: black;
		text-decoration: none;
	}
	.logo a img {
		height: 60px;
		position: absolute;
		top: 1px;
	}
	.phones {
		width: 170px;
		display: flex;
		flex-wrap: wrap;
		font-size: 15px;
		align-items: center;
		padding-left: 30px;
		padding-top: 10px;
		padding-bottom: 5px;
	}
	.phones a {
		color: #003176;
		text-decoration: none;
		padding-right: 10px;
	}
	.site-navbar {
		width: calc(100% - 200px);
		display: none;
	}
	
	.site-navbar .site-navigation .site-menu > li {
		display: inline-block;
	}
	
	.site-navbar .site-navigation .site-menu .active {
		color: #003176;
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
		color: #003176;
	}
	
	.site-navbar .site-navigation .site-menu a {
		text-decoration: none !important;
		display: inline-block;
	}
	
	@media (max-width: 550px) {
		.phones {
			width: 180px;
			font-size: 14px;
			padding-left: 20px;
		}
		#menuMobileToggle {
			right: 12px;
		}
	}
	.top-header {
		height: 40px;
	}
	@media (min-width: 1000px) {
		.site-navbar {
			display: block;
		}
		
		.logo a img {
			position: absolute;
			top: -10px;
			height: 125px;
		}
		.top-header {
			height: auto;
		}
		
		.site-navigation-mobile {
			display: none;
		}
	}
</style>
