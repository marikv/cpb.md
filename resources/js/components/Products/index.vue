<template>
	<div id="products">
		<main>
			<div class="container">
				<div class="container__content">
				
					<div class="category-icon__wrapper">
						<div class="category-icon"
						     v-for="category in categories"
						     :key="category.id"
						     @click="openCategory(category.id)"
						     :style="{ backgroundImage: `url(/uploads/${category.photo})` }"
						>
							<div class="category-icon-inner">
							{{ category[`name_${lang}`] }}
							</div>
						</div>
					</div>
					
					<Pdfs></Pdfs>
				
				</div>
			</div>
		</main>
	</div>
</template>

<script>

	import Pdfs from '../LandingPage/Pdfs';
	export default {
		components: {
			Pdfs,
		},
		data() {
			return {
				categories: [],
			};
		},
		computed: {
			lang() {
				return this.$store.getters.getLang;
			},
		},
		methods: {
			openCategory(id) {
				this.$router.push(`/category/${id}`);
			},
			loadCategories() {
				this.$store.commit('setShowSpinner', true);
				this.$http.post('/categories/get')
					.then((response) => {
						if (response.data.success) {
							this.categories = response.data.data;
						}
						this.$store.commit('setShowSpinner', false);
					})
					.catch(() => {
						this.$store.commit('setShowSpinner', false);
					});
			},
		},
		mounted() {
			this.loadCategories();
		}
	}
</script>

