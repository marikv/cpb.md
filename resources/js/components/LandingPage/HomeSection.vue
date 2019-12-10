<template>
	<div >
		<div id="HomeSection" ></div>
		<div id="home-section__container-wrapper" class="home-section__container-wrapper">
			<div class="container home-section__container">
				<div class="home-section__title" v-html="home_section_title"></div>
				<div class="home-section__text" :style="{'opacity': opacity}" v-html="home_section_text"></div>
			</div>
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
				const topHeader = document.getElementById('topHeader');
				const h = topHeader.offsetHeight;
				if (this.scrollPosition > 330) {
					topHeader.style.position = 'fixed';
				} else {
					topHeader.style.position = 'absolute';
				}
			}
		},
		mounted() {
			const textH = document.getElementById('home-section__container-wrapper').offsetHeight;
			const heightParalax = document.getElementById('paralax__wrapper').offsetHeight;
			if (textH > heightParalax) {
				document.getElementById('paralax__wrapper').style.height = (textH + 70) + 'px';
				document.getElementById('paralax-home').style.height = (textH + 70) + 'px';
				
			}
			window.addEventListener('scroll', this.updateScroll);
		},
		destroy() {
			window.removeEventListener('scroll', this.updateScroll)
		},
	}
</script>
