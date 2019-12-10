<template>
	<div >
		<HomeSection></HomeSection>
		<PhotoGallery></PhotoGallery>
		<Pdfs></Pdfs>
		<FaqSection></FaqSection>
		<Contacts></Contacts>
	</div>
</template>

<script>

	import HomeSection from './HomeSection';
	import PhotoGallery from './PhotoGallery';
	import Pdfs from './Pdfs';
	import Contacts from './Contacts';
	import FaqSection from './FaqSection';

	export default {
		components: {
			HomeSection,
			FaqSection,
			PhotoGallery,
			Contacts,
			Pdfs,
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
