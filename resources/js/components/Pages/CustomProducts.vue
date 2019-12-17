<template>
	<div id="CustomProducts">
		<main>
			<div class="container">
				<div class="container__content">
					
					<transition name="fadeIn">
						<article v-if="loaded">
							<h1 class="article__title text-center" v-html="pageData[`name_${lang}`]"></h1>
							
							<div class="article__text" v-html="pageData[`text_${lang}`]"></div>

							<div class="category-icon__wrapper"
							     style="display: flex; flex-wrap: wrap; align-items: center; justify-content: center;">
								
								<router-link to="/category/7">
									<div  class="category-icon bg-contain" :style="{ backgroundImage: `url(/uploads/${pageData.photo1})` }">
										<div class="category-icon-inner">
										</div>
									</div>
								</router-link>
								
								<router-link to="/category/1">
									<div  class="category-icon bg-contain" :style="{ backgroundImage: `url(/uploads/${pageData.photo2})` }">
										<div class="category-icon-inner">
										</div>
									</div>
								</router-link>
							</div>
						</article>
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
				loading: false,
				isOpen: false,
				pageData: {
					photo1: '',
					photo2: '',
				},
			};
		},
		computed: {
			lang() {
				return this.$store.getters.getLang;
			},
			loaded() {
				return this.pageData.name_ro && this.pageData.name_ro.length > 0;
			},
		},
		methods: {
			load() {
				this.$store.commit('setShowSpinner', true);
				this.$http.get('/pages/get/2')
					.then((response) => {
						if (response.data.success) {
							this.pageData = response.data.data.pageData;
						}
						this.$store.commit('setShowSpinner', false);
					})
					.catch(() => {
						this.$store.commit('setShowSpinner', false);
					});
			},
			updateParalaxHeight() {
				const el2 = document.getElementById('paralax__wrapper');
				if (el2) {
					el2.style.height = '100vh';
					document.getElementById('paralax-home').style.height = '100vh';
				}
			},
		},
		mounted() {
			this.load();
			this.updateParalaxHeight();
		}
	}
</script>
