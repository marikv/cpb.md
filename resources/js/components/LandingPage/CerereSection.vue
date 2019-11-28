<template>
	<div id="cerere-online" class="solicita-credit__wrapper">
	</div>
</template>

<script>

	export default {
		components: {},
		data() {
			return {
				openTermeniModel: false,
				accept: false,
				termError: false,
				dataPassport: '',
				seriaPassport: '',
				loanSum: '',
				phone: '',
				fio: '',
				dob: '',
			};
		},
		computed: {
			lang() {
				return this.$store.getters.getLang;
			},
		},
		methods: {
			termErrorToFalse() {
				this.termError = false;
			},
			sendCerere(e) {
				if (!this.accept) {
					this.termError = true;
				}
				if (document.getElementById('formCerere').checkValidity()) {
					e.preventDefault();
					const doneThis = () => {
						this.dataPassport = '';
						this.seriaPassport = '';
						this.loanSum = '';
						this.phone = '';
						this.fio = '';
						this.dob = '';
						alert(this.lang === 'ro' ? 'Cererea a fost trimisă!' : 'Заявка отправлена!');
					};
					this.$http.post('/cerere/send', {
						dataPassport: this.dataPassport,
						seriaPassport: this.seriaPassport,
						loanSum: this.loanSum,
						phone: this.phone,
						fio: this.fio,
						dob: this.dob,
					}).then(() => {
						doneThis();
					}).catch((e) => {
						doneThis();
					});
				}
			}
		},
		mounted() {

		}
	}
</script>

<style scoped>
	.solicita-credit__wrapper {
		background: #ffffff;
	}
	.term-error {
		color: red;
	}
	h1 {
		text-align: center;
		color: #4cbc09;
		
	}
	
	.popup-termeni-si-conditii__wrapper {
		position: fixed;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		background: #9f9f9f;
		opacity: 0.3;
		z-index: 99998;
		width: 100%;
		height: 100%;
	}
	.popup-termeni-si-conditii {
		position: fixed;
		top: 50px;
		width: calc(100% - 60px);
		left: 0;
		background: white;
		padding: 30px;
		border-radius: 10px;
		box-shadow: 0px 1px 40px 22px rgba(0, 0, 0, 0.2);
		/*overflow: auto;*/
		z-index: 99999;
		height: calc(100vh - 150px);
	}
	
	.transition, form button, form .question label, form .question input[type="text"] {
		-moz-transition: all 0.25s cubic-bezier(0.53, 0.01, 0.35, 1.5);
		-o-transition: all 0.25s cubic-bezier(0.53, 0.01, 0.35, 1.5);
		-webkit-transition: all 0.25s cubic-bezier(0.53, 0.01, 0.35, 1.5);
		transition: all 0.25s cubic-bezier(0.53, 0.01, 0.35, 1.5);
	}
	
	.solicita-credit__wrapper {
		/*font-family: Helvetica, sans-serif;*/
		/*font-weight: light;*/
		-webkit-font-smoothing: antialiased;
	}
	
	.solicita-credit__wrapper {
		background-color: white;
	}
	
	form {
		position: relative;
		display: inline-block;
		max-width: 700px;
		min-width: 350px;
		box-sizing: border-box;
		padding: 30px 25px;
		border-radius: 40px;
		margin: 10px 0 40px 0;
		left: 50%;
		-moz-transform: translate(-50%, 0);
		-ms-transform: translate(-50%, 0);
		-webkit-transform: translate(-50%, 0);
		transform: translate(-50%, 0);
		background-color: #efffc7;
	}
	
	form h1 {
		color: #4cbc09;
		font-weight: 100;
		letter-spacing: 0.01em;
		margin-left: 15px;
		margin-bottom: 35px;
		text-transform: uppercase;
	}
	
	form button {
		margin-top: 5px;
		background-color: white;
		border: 1px solid #4cbc09;
		line-height: 0;
		font-size: 17px;
		display: inline-block;
		box-sizing: border-box;
		padding: 20px 15px;
		border-radius: 60px;
		color: #4cbc09;
		font-weight: 100;
		letter-spacing: 0.01em;
		position: relative;
		z-index: 1;
	}
	
	form button:hover, form button:focus {
		color: white;
		background-color: #4cbc09;
	}
	
	form .question {
		position: relative;
		padding: 10px 0;
	}
	
	form .question:first-of-type {
		padding-top: 0;
	}
	
	form .question:last-of-type {
		padding-bottom: 0;
	}
	
	form .question label {
		transform-origin: left center;
		color: #4cbc09;
		font-weight: 100;
		letter-spacing: 0.01em;
		font-size: 17px;
		box-sizing: border-box;
		padding: 10px 15px;
		display: block;
		position: absolute;
		margin-top: -40px;
		z-index: 2;
		pointer-events: none;
	}
	
	form .question input[type="text"] {
		appearance: none;
		background-color: none;
		border: 1px solid #4cbc09;
		line-height: 0;
		font-size: 17px;
		width: 100%;
		display: block;
		box-sizing: border-box;
		padding: 10px 15px;
		border-radius: 60px;
		color: #4cbc09;
		font-weight: 100;
		letter-spacing: 0.01em;
		position: relative;
		z-index: 1;
	}
	
	form .question input[type="text"]:focus {
		outline: none;
		background: #4cbc09;
		color: white;
		margin-top: 30px;
	}
	
	form .question input[type="text"]:valid {
		/*margin-top: 30px;*/
	}
	
	form .question input[type="text"]:focus ~ label {
		-moz-transform: translate(0, -35px);
		-ms-transform: translate(0, -35px);
		-webkit-transform: translate(0, -35px);
		transform: translate(0, -35px);
	}
	
	form .question input[type="text"]:valid ~ label {
		text-transform: uppercase;
		font-style: italic;
		-moz-transform: translate(5px, -35px) scale(0.6);
		-ms-transform: translate(5px, -35px) scale(0.6);
		-webkit-transform: translate(5px, -35px) scale(0.6);
		transform: translate(5px, -35px) scale(0.6);
	}
	
	@media (min-width: 1100px) {
		.popup-termeni-si-conditii {
			width: 1100px;
			left: calc(50% - 550px);
		}
	}
	
	@media (min-width: 768px) {
		.solicita-credit__wrapper {
		
		}
	}
</style>
