<template>
	<div id="news">
		<main>
			<div class="container">
				<div class="container__content">
					
					 article
				
				
				</div>
			</div>
		</main>
	</div>
</template>

<script>

	export default {
		components: {
		
		},
		data() {
			return {
				articles: [],
			};
		},
		computed: {
			lang() {
				return this.$store.getters.getLang;
			},
		},
		methods: {
		
		},
		mounted() {
		}
	}
</script>

<style>
</style>