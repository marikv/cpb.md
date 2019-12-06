<template>
	<div>
		<div id="PhotoGallery" v-show="images.length > 0">
			
			<h1>
				<span v-if="lang === 'ru'">Фото галерея</span>
				<span v-if="lang === 'ro'">Galerie Foto</span>
				<span v-if="lang === 'en'">Photo Gallery</span>
			</h1>
			
			
			
			<Gallery :images="galleryItems"
			         :index="index"
			         :options="galleryOptions"
			         @close="index = null"></Gallery>
			
			
			
			
			
			<vue-glide
					:key="'vue-glide-key-photo'"
					v-if="images.length > 0"
					:type="'slider'"
					:start-at="0"
					:bound="true"
					:focus-at="0"
					:rewind="false"
					:perView="perView"
					:bullet="true"
			>
				<vue-glide-slide
						v-for="(image, i) in images"
						:key="i"
				>
					<div	class="slide-image"
					        @click="gallery(imagesArray, i, 'images')"
							:style="{ backgroundImage: 'url(/uploads/' + image.path + ')', width: `${imageWidth}px`, height: `${(imageWidth * 6 / 9)}px` }"
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
		</div>
			
			
		
		<div id="VideoGallery" v-show="videos.length > 0">
			
			<h1>
				<span v-if="lang === 'ru'">Видео галерея</span>
				<span v-if="lang === 'ro'">Galerie Video</span>
				<span v-if="lang === 'en'">Video Gallery</span>
			</h1>
			
			
			
			
			
			<vue-glide
				:key="'vue-glide-key-video'"
				v-if="videos.length > 0"
				:start-at="0"
				:bound="true"
				:type="'slider'"
				:focus-at="0"
				:rewind="false"
				:perView="perViewVideo"
				:bullet="true"
			>
				<vue-glide-slide
						v-for="(video, i) in videos"
						:key="i" >
					<div	class="slide-image"
					        @click="gallery(videos, i, 'video')"
					        :style="{ backgroundImage: 'url(' + video.poster + ')', width: `${videoWidth}px`, height: `${(videoWidth * 6 / 9)}px`  }" >
						<img src="/img/play-button.svg" :style="{height: '60px', marginTop: `${(videoWidth * 6 / 9) / 2 - 30}px`}">
					</div>
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
				videoWidth: 400,
				imageWidth: 300,
				index: null,
				youTubeOptions: {
					// The list object property (or data attribute) with the YouTube video id:
					youTubeVideoIdProperty: 'youtube',
					// Optional object with parameters passed to the YouTube video player:
					// https://developers.google.com/youtube/player_parameters
					youTubePlayerVars: {
						autoplay: 1,
						controls: 1,
					},
					// Require a click on the native YouTube player for the initial playback:
					youTubeClickToPlay: true,
				},
				imageOptions: {},
				galleryOptions: {},
				galleryItems: [],
			};
		},
		computed: {
			lang() {
				return this.$store.getters.getLang;
			},
			images() {
				return window.photos.length ? window.photos.filter(item => item.type === 0).map(item => {
					item.pathMini =  item.path.substring(0, item.path.lastIndexOf(".")) + "_mini" + item.path.substring(item.path.lastIndexOf("."));
					return item;
				}) : [];
			},
			imagesArray() {
				return this.images.map(item => `/uploads/${item.path}`);
			},
			videos() {
				return window.photos.length ? window.photos.filter(item => item.type !== 0).map(item => {
					item.youtube = this.getYoutubeIdFromLink(item.path);
					item.type = 'text/html';
					item.href = item.path;
					item.title = '';
					item.poster = `https://img.youtube.com/vi/${item.youtube}/0.jpg`;
					return item;
				}) : [];
			},
			perView() {
				if (this.images) {
					return Math.floor(window.innerWidth / 320);
				}
				return 0;
			},
			perViewVideo() {
				if (this.images) {
					return Math.floor(window.innerWidth / 420);
				}
				return 0;
			},
		},
		methods: {
			gallery(videos, i, type){
				this.index = i;
				this.galleryItems = videos;
				if (type === 'videos'){
					this.galleryOptions = this.youTubeOptions;
				} else {
					this.galleryOptions = this.imageOptions;
				}
			},
			getYoutubeIdFromLink(url){
				const regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;
				const match = url.match(regExp);
				return (match && match[7].length === 11)? match[7] : false;
			}
		},
		mounted() {

		}
	}
</script>

