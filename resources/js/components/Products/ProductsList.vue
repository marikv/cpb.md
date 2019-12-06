<template>
	<div id="products">
		<main>
			<div class="container">
				<div class="container__content">
				
					<article>
						cat
					</article>
				
				</div>
			</div>
		</main>
	</div>
</template>

<script>
 
	export default {
		props: [
			'product',
			'id',
		],
		components: {
		
		},
		data() {
			return {
				products: [],
			};
		},
		computed: {
			lang() {
				return this.$store.getters.getLang;
			},
		},
		methods: {
			openProduct(id) {
				this.$router.push(`/product/${id}`);
			},
			loadCategory() {
				this.$store.commit('setShowSpinner', true);
				this.$http.post('/category/get', { id: this.id })
					.then((response) => {
						if (response.data.success) {
							this.products = response.data.data;
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

