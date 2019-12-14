<template>
	<div id="Contacts" >
		
		
		<div class="maps__wrapper">
			<div class="maps__map maps__map1"></div>
		</div>
		
		<div class="bg-contacts" >
			<div class="container">
				<div class="container__content contacts-container__content">
					<div v-html="text"></div>
					
					
					<div class="contact-form" >
						<h1 class="content_header" style="text-align: center;" v-if="lang === 'ru'">Напишите нам</h1>
						<h1 class="content_header" style="text-align: center;" v-if="lang === 'ro'">Scrieți-ne</h1>
						<h1 class="content_header" style="text-align: center;" v-if="lang === 'en'">Send us a message</h1>
						
						<div class="label" v-if="lang === 'ru'">Ваше имя</div>
						<div class="label" v-if="lang === 'ro'">Nume</div>
						<div class="label" v-if="lang === 'en'">Your name</div>
						<input v-model="numeContact" type="text">
						
						<div class="label" v-if="lang === 'ru'">Текст сообщения *</div>
						<div class="label" v-if="lang === 'ro'">Mesajul *</div>
						<div class="label" v-if="lang === 'en'">Message *</div>
						<textarea id="textContact" v-model="textContact"></textarea>
						
						<button class="button-send-contact" @click="sendMessage()" >
							<span style="text-align: center;" v-if="lang === 'ru'">Отправить</span>
							<span style="text-align: center;" v-if="lang === 'ro'">Trimite</span>
							<span style="text-align: center;" v-if="lang === 'en'">Send</span>
						</button>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>

	export default {
		components: {},
		data() {
			return {
				textContact: '',
				numeContact: '',
			};
		},
		computed: {
			lang() {
				return this.$store.getters.getLang;
			},
			text() {
				return window.magazine[`text_${this.lang}`];
			}
		},
		methods: {
			sendMessage() {
				if (!this.textContact) {
					document.getElementById('textContact').classList.add('has-error');
					return;
				}
				this.$http.post('/contacts/send', {
					nume: this.numeContact,
					text: this.textContact,
				}).then(() => {
					this.numeContact = '';
					this.textContact = '';
					
					let text = 'Mesajul a fost trimis cu succes!';
					if (this.lang === 'ru') {
						text = 'Сообщение удачно было отправлено!';
					}
					if (this.lang === 'en') {
						text = 'Message has been sent successfully!';
					}
					this.$swal({
						type: 'success',
						text
					});
				}).catch(() => { });
			},
		},
		watch: {
			textContact(v) {
				if (v) {
					document.getElementById('textContact').classList.remove('has-error');
				}
			},
		},
		mounted() {
		}
	}
</script>

<style lang="scss" >

	.bg-contacts {
		/*background-image: url('/img/bg.jpg');*/
		background-size: cover;
		background-repeat: no-repeat;
	}
	.bg-contacts a {
		color: #1F75CC;
	}
	.contact-form {
		font-weight: 200;
		color: #004189;
		width: 100%;
		max-width: 700px;
		margin: 40px auto;
		
		.label {
			width: 100%;
		}
		input[type="text"] {
			width: 100%;
			max-width: 400px;
		}
		textarea {
			width: 100%;
			height: 100px;
		}
		input[type="text"],
		textarea {
			border-radius: 4px;
			border: 1px solid #cccccc;
			margin-bottom: 20px;
			line-height: 27px;
			margin-top: 6px;
			padding: 5px 15px;
		}
		.has-error {
			border-color: red !important;
		}
	}
	
	
	.button-send-contact {
		border-radius: 4px;
		background: linear-gradient(90deg, rgba(2, 0, 36, 0.7) 0%, rgba(9, 9, 121, 0.7) 35%, rgba(0, 116, 140, 0.7) 100%) !important;
		border: none;
		color: #FFFFFF !important;
		text-align: center;
		/*text-transform: uppercase;*/
		font-size: 17px;
		padding: 7px 18px;
		transition: all 0.2s;
		cursor: pointer;
		margin: 5px;
	}
	.button-send-contact:hover,
	.button-send-contact:active {
		outline: none;
	}
	.button-send-contact span {
		cursor: pointer;
		display: inline-block;
		position: relative;
		transition: 0.2s;
		color: #FFFFFF !important;
	}
	.button-send-contact span:after {
		content: '\00bb';
		position: absolute;
		opacity: 0;
		top: 0;
		right: -20px;
		transition: 0.3s;
	}
	.button-send-contact:hover span {
		padding-right: 25px;
	}
	.button-send-contact:hover span:after {
		opacity: 1;
		right: 0;
	}
	.button-send-contact:hover {
		-webkit-box-shadow: 0 4px 20px -10px rgba(0,0,0,0.47);
		-moz-box-shadow: 0 4px 20px -10px rgba(0,0,0,0.47);
		transition: all 0.3s ease 0s;
		background: linear-gradient(90deg, rgba(2, 0, 36, 0.8) 0%, rgba(9, 9, 121, 0.8) 35%, rgba(0, 116, 140, 0.8) 100%) !important;
	}
</style>
