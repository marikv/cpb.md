<template>
	<div style="position: relative;">
		<div class="home-calc__wrapper">
			<div class="container">
				<div style="width: 100%">
					<img src="/img/7_zile.png" class="img-7-zile">
				</div>
				<div style="width: 100%">
					<Calculator></Calculator>
				</div>
				
				<div class="credit-fara-gaj img-simplu">
					<div>Credit fără gaj</div>
					<div>Doar cu buletinul</div>
					<div style="font-size: 18px;margin-top: 20px;">Până la</div>
					<div style="margin-top: -18px;"><span style="font-size: 80px;color:white;text-shadow: 0px 3px 0px #4CBC09, 0px -3px 0px #4CBC09, 3px 0px 0px #4CBC09, -3px 0px 0px #4CBC09, -3px -3px 0px #4CBC09, 3px 3px 0px #4CBC09, -3px 3px 0px #4CBC09, 3px -3px 0px #4CBC09, 3px -3px 0px #4CBC09;">20000</span> lei</div>
					<div style="font-size: 30px;margin-top:-21px;">Simplu, rapid, comod.</div>
				</div>
				
				
				<img src="/img/portofel.png" class="img-portofel">
			</div>
		</div>
	</div>
</template>

<script>
	import Calculator from './Calculator';
	export default {
		components: {
			Calculator,
		},
		mounted() {

		}
	}
</script>

<style>
	.img-portofel {
		position: absolute;
		left: 0;
		bottom: 0;
		height: 60%;
	}
	.credit-fara-gaj {
		font-family: 'Russo One', sans-serif;
		font-size: 40px;
	}
	.home-calc__wrapper {
		height: 100%;
		background: #4CBC09;
		min-height: calc(100vh - 68px);
	}
	.img-7-zile {
		height:110px;
		margin-left: 20px;
		margin-top:20px;
	}
	.img-simplu {
		position: absolute;
		top: calc(50% - 145px);
		right: 20px;
	}
	@media (min-width: 768px) {
		.home-calc__wrapper {
			background: rgba(210, 221, 239, 0.38);
		}
		.home-calc__wrapper:before {
			content: "";
			position: absolute;
			right: 0;
			top: 0;
			bottom: 0;
			width: 40%;
			background-image: url(/img/background.svg);
			background-position: -70px 50%;
			background-repeat: no-repeat;
		}
		.home-calc__wrapper:after {
			content: "";
			position: absolute;
			left: 25%;
			bottom: 0;
			width: 1077px;
			height: 100%;
			background-position: calc(100% - 10px) bottom;
			background-repeat: no-repeat;
		}
	}
</style>
