<template>
	<div id="products">
		<main>
			<div class="container">
				<div class="container__content">
				
					<article>
					
					</article>
				
				</div>
			</div>
		</main>
	</div>
</template>

<script>
 
	export default {
		props: [
			'product'
		],
		components: {
		
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
		
		},
		mounted() {
		
		}
	}
</script>

