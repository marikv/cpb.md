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
						<img :src="`/uploads/${activeItem.photo}`" class="products__product-image"/>
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
		components: {
		
		},
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


<style>
	.products__product-image {
		/*min-width: 240px;*/
		width: 100%;
		/*float: left;*/
		margin: 20px 0;
		border-radius: 10px;
	}
	.modal-close {
		width: 18px;
		position: absolute;
		right: 18px;
		top: 18px;
		cursor: pointer;
	}
	
	
	.fadeIn-enter .overlay,
	.fadeIn-leave-active .overlay {
		opacity: 0;
		transition: all 0.2s step-end;
	}
	.fadeIn-enter .modal,
	.fadeIn-leave-active .modal {
		transform: scale(0.3);
	}
	.overlay {
		position: fixed;
		top: 0;
		left: 0;
		bottom: 0;
		right: 0;
		display: flex;
		justify-content: center;
		align-items: center;
		width: 100%;
		height: 100%;
		background: rgba(0, 0, 0, 0.3);
		z-index: 999;
		transition: all 0.2s ease;
	}
	.modal {
		position: relative;
		max-width: 800px;
		max-height: calc(100vh - 80px);
		overflow: auto;
		width: 100%;
		margin: 0 auto;
		padding: 30px;
		background-color: #fff;
		border-radius: 10px;
		box-shadow: 0 2px 8px 3px rgba(164, 164, 164, 0.41);
		transition: all 0.2s ease-in;
	}
</style>