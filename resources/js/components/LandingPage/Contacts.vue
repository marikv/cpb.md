<template>
	<div id="Contacts" >
		
		
		<div class="maps__wrapper">
			<div class="maps__map maps__map1"></div>
		</div>
		
		<div class="bg-contacts" >
			<div class="container">
				<div class="container__content contacts-container__content">
					<div v-html="text"></div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>

	export default {
		components: {},
		data() {
			return {
			
			};
		},
		computed: {
			lang() {
				return this.$store.getters.getLang;
			},
			text() {
				return window.magazine[`text_${this.lang}`];
			}
		},
		methods: {
		},
		mounted() {
		}
	}
</script>

<style >

	.bg-contacts {
		/*background-image: url('/img/bg.jpg');*/
		background-size: cover;
		background-repeat: no-repeat;
	}
	.bg-contacts a {
		color: #1F75CC;
	}
</style>
