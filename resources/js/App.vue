<template>
	<div>
		<Header></Header>
		
		<div id="paralax__wrapper" class="paralax__wrapper">
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
		
		<router-view></router-view>

		<Footer></Footer>
		
		<div v-show="showSpinner" class="spinner__wraper">
			<pulse-loader :loading="showSpinner" :color="spinnerColor" :size="spinnerSize"></pulse-loader>
		</div>
	</div>
</template>

<script>
	import PulseLoader from 'vue-spinner/src/PulseLoader.vue';
	import Parallax from 'vue-parallaxy';
	import Header from './components/Header';
	import Footer from './components/Footer';
	
	export default {
		components: {
			Header,
			Footer,
			PulseLoader,
			Parallax,
		},
		data() {
			return {
				spinnerColor: '#002957',
				spinnerSize: '20px',
			};
		},
		computed: {
			langing_bg_1() {
				return window.settingsData['langing_bg_1'];
			},
			showSpinner() {
				return this.$store.getters.getShowSpinner;
			}
		},
		mounted() {
			// this.$store.commit('setShowSpinner', true);
		}
	}
</script>