<template>
	<div >
		
		<div class="product-icon__wrapper">
			
			<div class="product-card"
			     v-for="product in products"
			     :key="product.id"
			     @click="openProduct(product)"
			     
			>
				<div class="product-card__photo" :style="{ backgroundImage: `url(/uploads/${product.photo})` }"></div>
				<div class="product-card__text">
					{{ product[`name_${lang}`] }}
				</div>
			</div>
			
		</div>
		
		
		<transition name="fadeIn">
			<div v-if="isOpen">
				<div class="overlay" @click.self="isOpen = false;">
					<div class="modal">
						<img src="/img/cancel.svg" class="modal-close" @click.self="isOpen = false;"/>
						
						<h1>{{ activeItem[`name_${lang}`] }}</h1>
						<div class="products__product-image-wrapper">
							<img :src="`/uploads/${activeItem.photo}`" class="products__product-image"/>
						</div>
						<div v-html="activeItem[`text_${lang}`]"></div>
						
					</div>
				</div>
			</div>
		</transition>
	
	</div>
</template>

<script>
	export default {
		props: [
			'category_id',
		],
		components: {},
		data() {
			return {
				activeItem: {
					photo: '',
				},
				products: [],
				loading: false,
				isOpen: false,
			};
		},
		computed: {
			lang() {
				return this.$store.getters.getLang;
			},
		},
		methods: {
			openProduct(product) {
				this.isOpen = !this.isOpen;
				this.activeItem = product;
				// this.$router.push(`/product/${id}`);
			},
			loadProducts() {
				this.loading = true;
				this.$http.post('/products/get', { category_id: this.category_id })
					.then((response) => {
						if (response.data.success) {
							this.products = response.data.data.productsData;
						}
						this.loading = false;
					})
					.catch(() => {
						this.loading = false;
					});
			},
		},
		mounted() {
			this.loadProducts();
		}
	}
</script>