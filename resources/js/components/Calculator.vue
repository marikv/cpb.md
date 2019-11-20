<template>
	<div id="calculator-section" class="calculator__wrapper">
		
		<div class="calculator__switch-background">
			<div :class="switchClass1" v-if="lang === 'ru'" @click="isFirstLoan=true">Первый кредит</div>
			<div :class="switchClass1" v-else @click="isFirstLoan=true">Primul împrumut</div>
			<div :class="switchClass2" v-if="lang === 'ru'" @click="isFirstLoan=false">Повторный кредит</div>
			<div :class="switchClass2" v-else @click="isFirstLoan=false">Împrumut repetat</div>
		</div>
		
		<div class="calculator__label">
			<div class="calculator__label-name">
				<span v-if="lang === 'ru'">Выберите сумму</span>
				<span v-else>Selectează suma</span>
			</div>
			<div class="calculator__label-sum">
				<input class="calculator__sum" type="number" v-model="sum" @keyup="keyUpSum" @blur="blurSum"/> Lei
			</div>
		</div>
		<vue-slider
				v-model="sum"
				:data="sums"
				:adsorb="true"
				tooltipPlacement="bottom"
		></vue-slider>
		
		
		<div class="calculator__label">
			<div class="calculator__label-name">
				<span v-if="lang === 'ru'">Период</span>
				<span v-else>Termen</span>
			</div>
			<div class="calculator__label-sum">
				<input class="calculator__sum" type="number" v-model="days" @keyup="keyUpDays" @blur="blurDays"/>
				<span v-if="lang === 'ru'">дней</span>
				<span v-else>zile</span>
			</div>
		</div>
		<vue-slider
				v-model="days"
				:data="daysN"
				:adsorb="true"
				tooltipPlacement="bottom"
		></vue-slider>
		
		<div class="calculator__label">
			<div  class="calculator__label-name">
				<span v-if="lang === 'ru'">Всего к оплате</span>
				<span v-else>TOTAL SPRE PLATĂ</span>
			</div>
			<div  class="calculator__label-sum">
				{{total}} Lei
			</div>
			<div  class="calculator__label-name2">
				<span v-if="lang !== 'ru'">Costul creditului:</span>
				
				<span v-else>Стоимость займа:</span>
			</div>
			<div  class="calculator__label-sum2">
				{{total - sum}} lei
			</div>
			<div  class="calculator__label-name2">
				<span v-if="lang === 'ru'">Процентная ставка в день:</span>
				<span v-else>Rata dobânzii pe zi:</span>
			</div>
			<div  class="calculator__label-sum2">
				1.5%
			</div>
			<div  class="calculator__label-name2">
				<span v-if="lang === 'ru'">Коммисия:</span>
				<span v-else>Comision:</span>
			</div>
			<div  class="calculator__label-sum2">
				0%
			</div>
		</div>
		
		<div class="calculator__label">
			<a href="#cerere-online" v-scroll-to="{el: '#cerere-online'}" class="calculator__btn">
				<span v-if="lang === 'ru'">Заполнить заявку</span>
				<span v-else>Solicită Împrumut</span>
			</a>
		</div>
	</div>
</template>

<script>
	import VueSlider from 'vue-slider-component';
	import 'vue-slider-component/theme/default.css';

	export default {
		components: {
			VueSlider,
		},
		data() {
			return {
				isFirstLoan: true,
				sum: 2000,
				max: 20000,
				min: 1000,
				days: 25,
				minDays: 1,
				maxDays: 25,
			};
		},
		computed: {
			lang() {
				return this.$store.getters.getLang;
			},
			total() {
				let daysWithPercent = parseInt(this.days, 10);
				if (this.isFirstLoan) {
					daysWithPercent = parseInt(this.days, 10) - 7;
				}
				const perDays = parseInt(this.sum, 10) * 1.5 / 100;
				let percent = (daysWithPercent * perDays);
				if (percent < 0) {
					percent = 0;
				}
				return parseInt(this.sum, 10) + parseFloat(percent);
			},
			sums() {
				const r = [];
				let s = this.min;
				while (s <= this.max) {
					r.push(s);
					s += 500;
				}
				return r;
			},
			daysN() {
				const r = [];
				let s = this.minDays;
				while (s <= this.maxDays) {
					r.push(s);
					s += 1;
				}
				return r;
			},
			switchClass1() {
				return `switch ${this.isFirstLoan ? 'active' : ''}`;
			},
			switchClass2() {
				return `switch ${this.isFirstLoan ? '' : 'active'}`;
			},
		},
		methods: {
			keyUpSum() {
				if (this.sum > this.max) {
					this.sum = this.max;
				}
			},
			blurSum() {
				if (this.sum < this.min) {
					this.sum = this.min;
				}
				if (this.sum > this.max) {
					this.sum = this.max;
				}
			},
			keyUpDays() {
				if (this.days > this.maxDays) {
					this.days = this.maxDays;
				}
			},
			blurDays() {
				if (this.days < this.minDays) {
					this.days = this.minDays;
				}
				if (this.days > this.maxDays) {
					this.days = this.maxDays;
				}
			},
		},
		mounted() {

		}
	}
</script>

<style>
	/* For Firefox */
	input[type='number'] {
		-moz-appearance: textfield;
	}
	
	/* Webkit browsers like Safari and Chrome */
	input[type=number]::-webkit-inner-spin-button,
	input[type=number]::-webkit-outer-spin-button {
		-webkit-appearance: none;
		margin: 0;
	}
	
	.calculator__wrapper {
		background: white;
		position: absolute;
		z-index: 2;
		width: 100%;
		margin: 10px 0px 20px 0px;
		max-width: calc(100% - 50px);
		padding: 20px 25px;
	}
	
	.calculator__switch-background {
		background: white;
		box-shadow: inset 0px 0px 5px 0px rgba(120, 120, 120, 0.32);
		padding: 9px 12px;
		border-radius: 20px;
		width: 310px;
		display: flex;
		align-items: baseline;
		justify-content: space-around;
		margin: auto;
	}
	
	.calculator__btn {
		width: 100%;
		max-width: 200px;
		margin: 5px auto;
		text-align: center;
		color: white;
		text-decoration: none;
		background: #4cbc09;
		border-radius: 30px;
		padding: 10px 20px;
		box-shadow: 0px 0px 1px #cccccc;
	}
	
	.calculator__switch-background .switch {
		background: white;
		box-shadow: none;
		padding: 2px 8px;
		border-radius: 13px;
		cursor: pointer;
		color: #4cbc09;
		width: 140px;
		text-align: center;
		transition-property: background;
		transition-duration: .2s;
		transition-timing-function: linear;
	}
	
	.calculator__switch-background .active {
		background: #4cbc09;
		color: white;
		box-shadow: 0px 0px 1px #cccccc;
		transition-property: background;
		transition-duration: .2s;
		transition-timing-function: linear;
	}
	
	.calculator__label {
		display: flex;
		flex-wrap: wrap;
		align-items: baseline;
		justify-content: space-between;
		margin-top: 30px;
	}
	.calculator__label-name {
		width: 60%;
	}
	.calculator__label-sum {
		width: 40%;
		text-align: right;
	}
	.calculator__label-name2 {
		width: 60%;
		font-size: 13px;
		color: #949494;
	}
	.calculator__label-sum2 {
		width: 40%;
		text-align: right;
		font-size: 13px;
		color: #949494;
	}
	
	.vue-slider-dot-handle-focus {
		box-shadow: 0px 0px 1px 2px #4cbc09;
	}
	
	.vue-slider-process {
		background-color: #4cbc09;
	}
	
	.vue-slider-dot-tooltip-inner {
		font-size: 14px;
		white-space: nowrap;
		padding: 2px 5px;
		min-width: 20px;
		text-align: center;
		color: #fff;
		border-radius: 5px;
		border-color: #4cbc09;
		background-color: #4cbc09;
		box-sizing: content-box;
	}
	
	.calculator__sum {
		width: 60px;
		text-align: right;
		font-size: 20px;
		font-weight: bold;
		border-radius: 10px;
		padding: 4px 7px 2px 5px;
		line-height: 20px;
		border: none;
		box-shadow: inset 0px 0px 5px 0px rgba(120, 120, 120, 0.32);
	}
	
	.calculator__sum:focus {
		outline: none;
		box-shadow: inset 0px 0px 5px 0px rgba(71, 176, 13, 0.53);
	}
	
	@media (min-width: 768px) {
		.calculator__wrapper {
			padding: 20px 25px;
			margin: 10px 20px 20px 20px;
			width: calc(100% - 10px);
			max-width: 350px;
			border-radius: 10px;
		}
		
		.calculator__switch-background {
			flex-wrap: wrap;
			width: auto;
		}
	}
</style>
