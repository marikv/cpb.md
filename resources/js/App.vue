<template>
	<div>
		<Header></Header>
		<HomeSection></HomeSection>
		<CerereSection></CerereSection>
		<PhotoGallery></PhotoGallery>
		<FaqSection></FaqSection>
		<Footer></Footer>
	</div>
</template>

<script>
	import Header from './components/Header';
	import HomeSection from './components/HomeSection';
	import CerereSection from './components/CerereSection';
	import PhotoGallery from './components/PhotoGallery';
	import FaqSection from './components/FaqSection';
	import Footer from './components/Footer';
	
	export default {
		components: {
			Header,
			HomeSection,
			CerereSection,
			FaqSection,
			Footer,
			PhotoGallery,
		},
		data() {
			return {
			
			};
		}
	}
</script>
