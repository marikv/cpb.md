<template>
	<div id="PhotoGallery">
		
		<h1>
			<span v-if="lang === 'ru'">Наши фотографии</span>
			<span v-if="lang === 'ro'">Foto Galerie</span>
		</h1>
		
		
		<Gallery :images="images" :index="index" @close="index = null"></Gallery>
		
		<div class="thumbs">
			<div
				class="image"
				v-for="(image, imageIndex) in images"
				:key="imageIndex"
				@click="index = imageIndex"
				:style="{ backgroundImage: 'url(' + image + ')', width: '300px', height: '200px' }"
			></div>
			
			<div style="clear: both"></div>
			
		</div>
		
		<div style="clear: both; height: 70px;"></div>
		
	</div>
</template>

<script>
	import Gallery from 'vue-gallery';

	export default {
		components: {
			Gallery,
		},
		data() {
			return {
				index: null,
				images: [
					'/img/gallery/1-min.JPG',
					'/img/gallery/2-min.JPG',
					'/img/gallery/3-min.JPG',
					'/img/gallery/4-min.jpg',
					'/img/gallery/5-min.jpg',
				],
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
	#PhotoGallery {
		text-align: center;
	}
	.image {
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center center;
		border: 1px solid #ebebeb;
		margin: 0 10px 10px 10px;
		border-radius: 4px;
		cursor: pointer;
		transition: transform 0.3s;
		-webkit-transition: -webkit-transform 0.3s
	}
	.image:hover {
		transform: scale(1.1);
		-webkit-transform: scale(1.1);
		
	}
	h1 {
		padding: 40px 0 25px 0;
	}
	.thumbs {
		display: flex;
		align-items: center;
		justify-content: center;
		flex-wrap: wrap;
	}
</style>
