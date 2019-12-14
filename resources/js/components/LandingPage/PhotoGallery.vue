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
			
			<vueper-slides class="no-shadow"
			               v-if="images.length > 0"
			               :visible-slides="perView"
			               :slide-multiple="true"
			               :arrows="true"
			               :slide-ratio="1/8"
			               :arrows-outside="false"
			               :bullets-outside="true"
			               :dragging-distance="70">
				<vueper-slide v-for="(image, i) in images"
				              :key="i"
				              :title="''">
					
					<template v-slot:content>
						<div	class="slide-image"
						        @click="gallery(imagesArray, i, 'images')"
						        :style="{ backgroundImage: 'url(/uploads/' + image.path + ')', width: `${imageWidth}px`, height: `${(imageWidth * 6 / 9)}px` }"
						></div>
					</template>
					
				</vueper-slide>
			</vueper-slides>
			
		</div>
		
		
		<div id="VideoGallery" v-show="videos.length > 0">
			
			<h1>
				<span v-if="lang === 'ru'">Видео галерея</span>
				<span v-if="lang === 'ro'">Galerie Video</span>
				<span v-if="lang === 'en'">Video Gallery</span>
			</h1>
			
			<vueper-slides class="no-shadow"
			               v-if="videos.length > 0"
			               :visible-slides="perViewVideo"
			               :slide-multiple="true"
			               :arrows="true"
			               :slide-ratio="1/8"
			               :arrows-outside="false"
			               :bullets-outside="true"
			               :dragging-distance="70">
				<vueper-slide v-for="(video, i) in videos"
				              :key="i"
				              :title="''">
					
					<template v-slot:content>
						<div	class="slide-image"
						        @click="openVideoModal(video)"
						        :style="{ backgroundImage: 'url(' + video.poster + ')', width: `${videoWidth}px`, height: `${(videoWidth * 6 / 9)}px`  }" >
							<img src="/img/play-button.svg" :style="{height: '60px', marginTop: `${(videoWidth * 6 / 9) / 2 - 30}px`}">
						</div>
					</template>
				
				</vueper-slide>
			</vueper-slides>
		
		</div>
		
		<div class="video-modal__overlay" v-if="showVideoModal">
			<img src="/img/close_white.svg" @click="showVideoModal = false" height="30px" style="position: fixed; top: 20px; right: 30px; cursor: pointer;"/>
			<div class="video-modal__inner">
				<iframe width="100%"
				        height="415"
				        :src="`https://www.youtube.com/embed/${activeYoutube}?autoplay=1`"
				        frameborder="0"
				        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
				        allowfullscreen></iframe>
			</div>
		</div>
	</div>
</template>


<script>
	import Gallery from 'vue-gallery';
	import { VueperSlides, VueperSlide } from 'vueperslides';
	import 'vueperslides/dist/vueperslides.css';

	export default {
		components: {
			Gallery,
			VueperSlides,
			VueperSlide,
		},
		data() {
			return {
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
				showVideoModal: false,
				activeYoutube: '',
			};
		},
		computed: {
			videoWidth() {
				if (window.innerWidth < 400) {
					return window.innerWidth;
				}
				return 400;
			},
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
					if (window.innerWidth <= 400) {
						return 1;
					}
					return Math.ceil(window.innerWidth / 320) - 1;
					const floor = Math.floor(window.innerWidth / 320);
					if (floor === 0) {
						return 1;
					}
					return 0;
				}
				return 0;
			},
			perViewVideo() {
				if (this.videos) {
					if (window.innerWidth <= 460) {
						return 1;
					}
					return Math.ceil(window.innerWidth / 420) - 1;
					const floor = Math.floor(window.innerWidth / 420);
					if (floor === 0) {
						return 1;
					}
					return 0;
				}
				return 0;
			},
		},
		methods: {
			gallery(videos, i, type){
				if (type === 'videos'){
					//this.galleryOptions = this.youTubeOptions;
					this.openVideoModal(videos[i]);
					return;
				} else {
					this.galleryOptions = this.imageOptions;
				}
				this.index = i;
				this.galleryItems = videos;
			},
			getYoutubeIdFromLink(url){
				const regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;
				const match = url.match(regExp);
				return (match && match[7].length === 11)? match[7] : false;
			},
			openVideoModal(videoData) {
				console.log(videoData);
				this.showVideoModal = true;
				this.activeYoutube = videoData.youtube;
			},
		},
		mounted() {

		}
	}
</script>

<style>
	.vueperslides__arrow svg {
		 width: 40px;
		height: 75px;
		text-decoration: none;
		text-align: center;
		background: rgba(0, 0, 0, 0.43);
		box-sizing: content-box;
		/*border: 2px solid #fff;*/
		border-radius: 6px;
		opacity: .5;
		cursor: pointer;
		padding: 10px;
	}
	.video-modal__overlay {
		display: flex;
		justify-content: center;
		align-items: center;
		position: fixed;
		z-index: 9998;
		top:0;
		left: 0;
		right: 0;
		bottom: 0;
		width: 100%;
		height: 100%;
		background-color: rgba(0,0,0,0.8);
	}
	.video-modal__inner {
		width: 100%;
		max-width: 700px;
		margin: auto;
	}
	#PhotoGallery .vueperslides__parallax-wrapper {
		padding-bottom: 0 !important;
		height: 230px;
	}
	#VideoGallery .vueperslides__parallax-wrapper {
		padding-bottom: 0 !important;
		height: 300px;
	}
	@media (max-width: 768px) {
		#PhotoGallery .vueperslides__parallax-wrapper {
			height: 270px;
		}
		#VideoGallery .vueperslides__parallax-wrapper {
			height: 350px;
		}
	}
	.vueperslides__bullet {
		background-color: #ffffff;
		border: 1px solid #5B8EA7;
		cursor: pointer;
	}
	.vueperslides__bullet.vueperslides__bullet--active {
		background: #5B8EA7;
	}
</style>
