<template>
	
	<div style="position: relative">
		<div class="home-section__wrapper">
			
			<div id="home-section__container-wrapper" class="home-section__container-wrapper">
				<div class="container home-section__container">
					<div class="home-section__title" v-html="home_section_title">
						<br>
					</div>
					<div class="home-section__text" :style="{'opacity': opacity}" v-html="home_section_text">
					
					</div>
				</div>
			</div>
			
			<parallax
					id="paralax-home"
					:fixed="false"
					:speedFactor="0.75"
					:sectionHeight="60"
					:breakpoint="'(min-width: 968px)'"
			>
				<img v-if="langing_bg_1" :src="`/uploads/${langing_bg_1}`" alt="">
			</parallax>
		
		</div>
	</div>
</template>

<script>
	import Parallax from 'vue-parallaxy';
	
	export default {
		components: {
			Parallax,
		},
		data() {
			return {
				scrollPosition: null
			};
		},
		computed: {
			opacity() {
				const textH = document.getElementById('home-section__container-wrapper') ?
					document.getElementById('home-section__container-wrapper').offsetHeight : 800;
				
				return window.innerWidth < 1000 ? 1 : (textH - this.scrollPosition) / textH
			},
			lang() {
				return this.$store.getters.getLang;
			},
			langing_bg_1() {
				return window.settingsData['langing_bg_1'];
			},
			home_section_title() {
				return window.settingsData[`home_section_title_${this.lang}`];
			},
			home_section_text() {
				return window.settingsData[`home_section_text_${this.lang}`];
			},
		},

		methods: {
			updateScroll() {
				this.scrollPosition = window.scrollY;
				console.log(this.scrollPosition);
			}
		},
		mounted() {
			const textH = document.getElementById('home-section__container-wrapper').offsetHeight;
			const heightParalax = document.getElementById('paralax-home').offsetHeight;
			if (textH > heightParalax) {
				document.getElementById('paralax-home').style.height = (textH + 70) + 'px';
			}
			window.addEventListener('scroll', this.updateScroll);
		},
		destroy() {
			window.removeEventListener('scroll', this.updateScroll)
		},
	}
</script>

<style>
	@keyframes slideInFromLeft {
		0% {
			transform: translateX(-50px);
		}
		100% {
			transform: translateX(0);
		}
	}
	@-webkit-keyframes fadeInFromNone {
		0% {
			display: none;
			opacity: 0;
		}
		
		1% {
			display: block;
			opacity: 0;
		}
		
		100% {
			display: block;
			opacity: 1;
		}
	}
	
	@-moz-keyframes fadeInFromNone {
		0% {
			display: none;
			opacity: 0;
		}
		
		1% {
			display: block;
			opacity: 0;
		}
		
		100% {
			display: block;
			opacity: 1;
		}
	}
	
	@-webkit-keyframes fadeInFromNone {
		0% {
			display: none;
			opacity: 0;
		}
		
		1% {
			display: block;
			opacity: 0;
		}
		
		100% {
			display: block;
			opacity: 1;
		}
	}
	
	@-moz-keyframes fadeInFromNone {
		0% {
			display: none;
			opacity: 0;
		}
		
		1% {
			display: block;
			opacity: 0;
		}
		
		100% {
			display: block;
			opacity: 1;
		}
	}
	
	@-o-keyframes fadeInFromNone {
		0% {
			display: none;
			opacity: 0;
		}
		
		1% {
			display: block;
			opacity: 0;
		}
		
		100% {
			display: block;
			opacity: 1;
		}
	}
	
	@keyframes fadeInFromNone {
		0% {
			display: none;
			opacity: 0;
		}
		
		1% {
			display: block;
			opacity: 0;
		}
		
		100% {
			display: block;
			opacity: 1;
		}
	}
	
	.home-section__wrapper {
	}
	.home-section__container-wrapper {
		position: absolute;
		top: 0;
		width: 100%;
		margin-bottom: 100px;
		padding-top: 40px;
	}
	.home-section__container {
		display: flex;
		font-family: 'Roboto', sans-serif;
		font-weight: 300;
	}
	.home-section__title {
		-webkit-animation: fadeInFromNone 0.5s ease-out,
		slideInFromLeft 0.3s ease-out;
		-moz-animation: fadeInFromNone 0.5s ease-out,
		slideInFromLeft 0.3s ease-out;
		-o-animation: fadeInFromNone 0.5s ease-out,
		slideInFromLeft 0.3s ease-out;
		animation: fadeInFromNone 0.5s ease-out,
					slideInFromLeft 0.3s ease-out;
		color: white;
		text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.86);
		font-size: 50px;
		font-family: 'Roboto', sans-serif;
		font-weight: 300;
		padding-top: 100px;
		width: 50%;
	}
	.home-section__text {
		background: rgba(255, 255, 255, 0.75);
		padding: 120px 40px 50px 40px;
		border-radius: 3px;
		font-size: 18px;
		max-width: 600px;
		width: calc(50% - 20px);
		margin: -20px 0 10px 20px;
	}
	@media (max-width: 1000px) {
		.home-section__container {
			flex-wrap: wrap;
		}
		.home-section__title {
			padding-top: 40px;
			font-size: 30px;
			margin: 10px 20px;
			width: 100%;
			max-width: 100%;
		}
		.home-section__text {
			width: 100%;
			max-width: 100%;
			margin: 10px 20px;
			padding: 30px;
		}
	}
	.home-section__wrapper .Masthead {
		height: calc(100vh - 90px);
		min-height: calc(100vh - 90px);
	}
	.home-section__wrapper {
		background: -moz-linear-gradient(90deg, rgba(2,0,36,0.3) 0%, rgba(9,9,121,0.3) 35%, rgba(0,212,255,0.3) 100%);
		background: -webkit-linear-gradient(90deg, rgba(2,0,36,0.3) 0%, rgba(9,9,121,0.3) 35%, rgba(0,212,255,0.3) 100%);
		background: linear-gradient(90deg, rgba(2,0,36,0.3) 0%, rgba(9,9,121,0.3) 35%, rgba(0,212,255,0.3) 100%);
	}
</style>
