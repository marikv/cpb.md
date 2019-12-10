<template>
	<div id="products">
		<main>
			<div class="container">
				<div class="container__content">
				
					<div class="category-icon__wrapper-small"
					     style="cursor: pointer;"
					     @click="goBack()"
					>
						
						<img src="/img/left.svg" class="category-back"/>
						
						<div class="category-icon category-icon_small"
						     :key="category.id"
						     :style="{ backgroundImage: `url(/uploads/${category.photo})` }">
							<div class="category-icon-inner">
							</div>
						</div>
						
						{{ category[`name_${lang}`] }}
					</div>
				
					<products-inner :category_id="id"></products-inner>
					
				</div>
			</div>
		</main>
	</div>
</template>

<script>
	
	import ProductsInner from './ProductsInner';
 
	export default {
		props: [
			'product',
			'id',
		],
		components: {
			ProductsInner,
		},
		data() {
			return {
				category: {},
			};
		},
		computed: {
			lang() {
				return this.$store.getters.getLang;
			},
		},
		methods: {
			goBack() {
				this.$router.push('/categories');
			},
			openProduct(id) {
				this.$router.push(`/product/${id}`);
			},
			loadCategory() {
				this.$store.commit('setShowSpinner', true);
				this.$http.post('/category/get', { id: this.id })
					.then((response) => {
						if (response.data.success) {
							this.category = response.data.data.categoryData;
						}
						this.$store.commit('setShowSpinner', false);
					})
					.catch(() => {
						this.$store.commit('setShowSpinner', false);
					});
			},
		},
		mounted() {
			this.loadCategory();
		}
	}
</script>

