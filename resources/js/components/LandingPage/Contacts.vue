<template>
	<div id="Contacts" >
		
		
		<div class="maps__wrapper">
			<div class="maps__map maps__map1"></div>
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
		},
		methods: {
		},
		mounted() {

		}
	}
</script>

<style scoped>

</style>
