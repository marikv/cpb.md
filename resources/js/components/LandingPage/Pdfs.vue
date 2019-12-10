<template>
	<div>
		<div id="PdfGallery" >
			
			<h1 class="theme">
				<span v-if="lang === 'ru'">PDF Каталог</span>
				<span v-if="lang === 'ro'">PDF catalog</span>
				<span v-if="lang === 'en'">PDF catalogue</span>
			</h1>
			
			
			<div class="thumbs">
				<div
						class="image-pdfs"
						v-for="(pdf, imageIndex) in pdfs"
						:key="imageIndex"
						@click="index = imageIndex"
						:style="{ backgroundImage: 'url(/uploads/' + pdf.photo + ')', width: '300px', height: '200px' }"
				>
					<a class="image-pdfs-link" :href="`/uploads/${pdf.pdf}`" target="_blank">
						{{ pdf[`name_${lang}`] }}
					</a>
				</div>
				
				<div style="clear: both"></div>
			
			</div>
			
			<div style="clear: both; height: 70px;"></div>
		
		
		</div>
	</div>
</template>

<script>
 


	export default {
		components: {
		
		},
		data() {
			return {
			
			};
		},
		computed: {
			lang() {
				return this.$store.getters.getLang;
			},
			pdfs() {
				return window.pdfs;
			}
		},
		methods: {
		
		},
		mounted() {

		}
	}
</script>

<style>
	#PdfGallery {
		text-align: center;
	}
	.image-pdfs {
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center center;
		border: 1px solid #ebebeb;
		margin: 0 10px 10px 10px;
		border-radius: 4px;
		cursor: pointer;
		transition: transform 0.3s;
		-webkit-transition: -webkit-transform 0.3s;
		box-shadow: 0px 0px 7px 0px rgba(0, 0, 0, 0.18);
	}
	.image-pdfs-link:link,
	.image-pdfs-link:visited,
	.image-pdfs-link:active,
	.image-pdfs-link:focus,
	.image-pdfs-link:hover,
	.image-pdfs-link {
		height: 100%;
		width: 100%;
		display: flex;
		justify-content: center;
		align-items: center;
		font-size: 28px;
		text-align: center;
		color: #FFFFFF;
		cursor: pointer;
		transition: all .3s;
		text-decoration: none;
		text-shadow: 1px 1px 0 rgb(91, 142, 167), 1px -1px 0 rgb(91, 142, 167), -1px 1px 0 rgb(91, 142, 167), -1px -1px 0 rgb(91, 142, 167), 1px 0px 0 rgb(91, 142, 167), 0px 1px 0 rgb(91, 142, 167), -1px 0px 0 rgb(91, 142, 167), 0px -1px 0 rgb(91, 142, 167), 1px 0px 6px #000000;
	}
	h1 {
		color: rgb(91, 142, 167);
	}
	.image-pdfs:hover {
		transform: scale(1.1);
		-webkit-transform: scale(1.1);
		
	}
	.theme {
		padding: 40px 0 25px 0;
	}
	.thumbs {
		display: flex;
		align-items: center;
		justify-content: center;
		flex-wrap: wrap;
	}
</style>