<template>
	<div >
		<HomeSection></HomeSection>
		<CerereSection></CerereSection>
		<PhotoGallery></PhotoGallery>
		<FaqSection></FaqSection>
	</div>
</template>

<script>

	import HomeSection from './HomeSection';
	import CerereSection from './CerereSection';
	import PhotoGallery from './PhotoGallery';
	import FaqSection from './FaqSection';

	export default {
		components: {
			HomeSection,
			CerereSection,
			FaqSection,
			PhotoGallery,
		},
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

<style >

</style>
