<template>
	<div id="news">
		<main>
			<div class="container">
				<div class="container__content">
					
					
					<div class="articles__wrapper">
						<article class="article"
						     v-for="article in articles"
						     :key="article.id"
						     @click="openArticle(article)"
						>
							<div    class="article__image-div"
									:style="{ backgroundImage: `url(/uploads/${article.photo})` }">
								
							</div>
							<a class="article__title" v-html="article[`name_${lang}`]"></a>
							
							<div class="article__text" v-html="miniText(article)"></div>
							
							
							<a class="read-more-link" href="javascript:void(0)" @click.stop="openArticle(article)">
								<span  v-if="lang === 'ru'">Читать дальше ...</span>
								<span  v-if="lang === 'ro'">Citește mai mult ...</span>
								<span  v-if="lang === 'en'">Read more ...</span>
							</a>
							
							<div style="clear: both"></div>
						
						</article>
					</div>
					
					
					<transition name="fadeIn">
						<div v-if="isOpen">
							<div class="overlay" @click.self="isOpen = false;">
								<div class="modal">
									<img src="/img/cancel.svg" class="modal-close" @click.self="isOpen = false;"/>
									
									<h1 class="article__title">{{ activeItem[`name_${lang}`] }}</h1>
									<div class="article__text" v-html="activeItem[`text_${lang}`]"></div>
								
								</div>
							</div>
						</div>
					</transition>
				
				
				</div>
			</div>
		</main>
	</div>
</template>

<script>

	export default {
		components: {
		
		},
		data() {
			return {
				activeItem: {},
				loading: false,
				isOpen: false,
				
				articles: [],
			};
		},
		computed: {
			lang() {
				return this.$store.getters.getLang;
			},
		},
		methods: {
			openArticle(article) {
				this.isOpen = !this.isOpen;
				this.activeItem = article;
				//this.$router.push(`/article/${article.id}`);
			},
			miniText(article) {
				return article[`text_${this.lang}`].replace(/<\/?[^>]+(>|$)/g, "").substr(0, 250);
			},
			loadArticles() {
				this.$store.commit('setShowSpinner', true);
				this.$http.post('/articles/get')
					.then((response) => {
						if (response.data.success) {
							this.articles = response.data.data;
						}
						this.$store.commit('setShowSpinner', false);
					})
					.catch(() => {
						this.$store.commit('setShowSpinner', false);
					});
			},
		},
		mounted() {
			this.loadArticles();
		}
	}
</script>

<style>
	.article {
		clear: both;
		margin: 0 0 80px 0;
	}
	.article__image-div {
		max-width: 430px;
		width: 100%;
		height: 280px;
		background-size: cover;
		border-radius: 10px;
		margin: 0 30px 10px 0;
		float: left;
	}
</style>