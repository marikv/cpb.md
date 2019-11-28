<template>
	<div id="news" class="news__wrapper">
		NEWS
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
		},
		methods: {
		
		},
		mounted() {

		}
	}
</script>

<style>
	.news__wrapper {
		background-color: white;
		padding: 30px;
		border-radius: 10px;
	}
</style>
