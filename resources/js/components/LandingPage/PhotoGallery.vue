<template>
	<div>
		<div id="PhotoGallery" v-if="images.length">
			
			<h1>
				<span v-if="lang === 'ru'">Фото галерея</span>
				<span v-if="lang === 'ro'">Galerie Foto</span>
				<span v-if="lang === 'en'">Photo Gallery</span>
			</h1>
			
			<Gallery :images="images" :index="index" @close="index = null"></Gallery>
			
			<vue-glide
					:focus-at="0"
					:rewind="false"
					:perView="perView"
			>
				<vue-glide-slide
						v-for="(image, i) in images"
						:key="i"
				>
					<div	class="image"
							@click="index = i"
							:style="{ backgroundImage: 'url(' + image + ')', width: '300px', height: '200px' }"
					></div>
				</vue-glide-slide>
				
				<template slot="control">
					<button data-glide-dir="<">
						<img src="/img/arrow-left.svg" height="34px">
					</button>
					<button data-glide-dir=">">
						<img src="/img/arrow-right.svg" height="34px">
					</button>
				</template>
			</vue-glide>
			
			<div style="clear: both; height: 70px;"></div>
		
		</div>
	</div>
</template>

<script>
	import Gallery from 'vue-gallery';
	
	import { Glide, GlideSlide } from 'vue-glide-js'
	import 'vue-glide-js/dist/vue-glide.css';


	export default {
		components: {
			Gallery,
			[Glide.name]: Glide,
			[GlideSlide.name]: GlideSlide
		},
		data() {
			return {
				index: null,
			};
		},
		computed: {
			lang() {
				return this.$store.getters.getLang;
			},
			images() {
				return window.photos.length ? window.photos.map(item => `/uploads/${item.path}`) : [];
			},
			perView() {
				if (this.images) {
					return Math.floor(window.innerWidth / 320);
				}
				return 0;
			},
		},
		methods: {
		},
		mounted() {

		}
	}
</script>

<style>
	#PhotoGallery {
		text-align: center;
	}
	.glide div[data-glide-el="controls"] {
		position: absolute;
		top: 50%;
		width: 100%;
	}
	.glide div[data-glide-el="controls"] button:active,
	.glide div[data-glide-el="controls"] button:focus {
		outline: none;
	}
	.glide div[data-glide-el="controls"] button {
		position: absolute;
		top: 50%;
		width: 40px;
		height: 40px;
		margin-top: -23px;
		font-size: 60px;
		font-weight: 100;
		line-height: 30px;
		text-decoration: none;
		text-align: center;
		background: rgba(0, 0, 0, 0.43);
		box-sizing: content-box;
		border: 2px solid #fff;
		border-radius: 33px;
		opacity: .5;
		cursor: pointer;
		padding: 10px;
	}
	.glide div[data-glide-el="controls"] button:hover {
		opacity: .8;
	}
	.glide div[data-glide-el="controls"] button[data-glide-dir=">"] {
		right: 10px;
	}
	.glide div[data-glide-el="controls"] button[data-glide-dir="<"] {
		left: 10px;
	}
	.image {
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center center;
		border: 1px solid rgba(226, 225, 225, 0.63);
		margin: 10px auto;
		border-radius: 4px;
		cursor: pointer;
		transition: transform 0.2s;
		-webkit-transition: -webkit-transform 0.2s;
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
		flex-wrap: nowrap;
	}
</style>
