<template>
	<div >
		<HomeSection></HomeSection>
		<PhotoGallery></PhotoGallery>
		<FaqSection></FaqSection>
		<Contacts></Contacts>
		
	</div>
</template>

<script>

	import HomeSection from './HomeSection';
	import PhotoGallery from './PhotoGallery';
	import Contacts from './Contacts';
	import FaqSection from './FaqSection';

	export default {
		components: {
			HomeSection,
			FaqSection,
			PhotoGallery,
			Contacts,
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
