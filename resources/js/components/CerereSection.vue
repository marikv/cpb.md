<template>
	<div id="cerere-online" class="solicita-credit__wrapper">
		<div class="container">
			
			<h1>
				<span v-if="lang === 'ru'">Заполнить заявку на кредит</span>
				<span v-if="lang === 'ro'">Solicită credit</span>
			</h1>
			
			<form name="formCerere" id="formCerere">
				<div class="question">
					<input type="text" v-model="fio" required/>
					<label v-if="lang === 'ru'">ФИО (пример Иванов Ива Иванович)</label>
					<label v-if="lang === 'ro'">Nume, Prenume (exemplu Ionescu Ion)</label>
				</div>
				<div class="question">
					<input type="text" v-model="phone" required/>
					<label v-if="lang === 'ru'">Телефон* (пример 069000000)</label>
					<label v-if="lang === 'ro'">Тelefon de contact* (exemplu 069000000)</label>
				</div>
				<div class="question">
					<input type="text" v-model="loanSum" required/>
					<label v-if="lang === 'ru'">Сумма запрашиваемого кредита</label>
					<label v-if="lang === 'ro'">Suma împrumutului solicitat</label>
				</div>
				<div class="question">
					<input type="text" v-model="dob" required/>
					<label v-if="lang === 'ru'">Дата рождения (пример 01.01.1990)</label>
					<label v-if="lang === 'ro'">Data nașterii (exmplu 01.01.1990)</label>
				</div>
				<div class="question">
					<input type="text" v-model="seriaPassport" required/>
					<label v-if="lang === 'ru'">Серия паспорта (пример A00000000)</label>
					<label v-if="lang === 'ro'">Seria buletinului (exemplu A00000000)</label>
				</div>
				<div class="question">
					<input type="text" v-model="dataPassport" required/>
					<label v-if="lang === 'ru'">Дата выдачи паспорта</label>
					<label v-if="lang === 'ro'">Data eliberării buletinului</label>
				</div>
				
				<div style="display: flex" @click="termErrorToFalse()">
					<div style="width:80px;margin-right: 20px;">
						<input v-model="accept" name="accept" type="checkbox" id="cbx" style="opacity: 0;position: absolute;z-index: -400;" required/>
						<label for="cbx" class="toggle"><span></span></label>
					</div>
					<div :class="{'term-error': termError}" v-if="lang === 'ro'">
						"Accept" confirm că eu: am citit și am acceptat
							<a style="color: green" @click="openTermeniModel = true" href="javascript:void(0)">Termeni și condiții</a>,
						am dat consimțămîntul pentru folosirea datelor personale, am evaluat oferta CreditBox
					</div>
					<div :class="{'term-error': termError}" v-if="lang === 'ru'">
						«Я принимаю» и подтверждаю, что я прочитал(а) и принял(а)
						<a style="color: green" @click="openTermeniModel = true" href="javascript:void(0)">Условия и положения</a>,
						я дал(а) согласие на использование персональных данных, я прочитал предложение CreditBox
					</div>
				</div>
				<div style="text-align: right;">
					<button @click="sendCerere($event)">
						<span v-if="lang === 'ro'">Trimite</span>
						<span v-if="lang === 'ru'">Отправить</span>
					</button>
				</div>
			</form>
		</div>
		
		<div class="popup-termeni-si-conditii__wrapper" v-show="openTermeniModel" @click="openTermeniModel = false"></div>
		<div  class="popup-termeni-si-conditii" v-show="openTermeniModel">
			<div style="width: 100%;height: 20px;margin-bottom: 10px;">
				<div @click="openTermeniModel = false" style="float: right; width: 20px; height: 20px;cursor: pointer;color: #636b6f;">X</div>
			</div>
			<div style="overflow: auto;height: 100%;">
			<article class="article" typeof="Article">
				<meta property="name" content="Termeni si conditii">
				<meta property="author" typeof="Person" content="Super User">
				<meta property="dateModified" content="2019-10-29T10:14:46+02:00">
				<meta property="datePublished" content="2019-10-29T09:15:36+02:00">
				<meta class="margin-remove-adjacent" property="articleSection" content="Blog">
				
				<div class="container container-small">
					
					<h1 class="margin-large-top margin-remove-bottom text-center article-title">
						Termeni si conditii
					</h1>
					
					<div class="margin-medium-top" property="text">
						
						<p style="margin: 15pt 0cm 7.5pt; line-height: normal; background: white;"><strong><span
								style="font-size: 12pt; color: #1b1d1c;">Regimul juridic al solicitării</span></strong>
						</p>
						<p style="margin-bottom: 15pt; line-height: normal; background: white;"><span
								style="font-size: 12pt; color: #1b1d1c;">Prezenta solicitare are un caracter estimativ, publicitar și nu este obligatorie pentru solicitant sau pentru O.C.N Credit Box S.R.L.</span>
						</p>
						<p style="margin-bottom: 15pt; line-height: normal; background: white;"><span
								style="font-size: 12pt; color: #1b1d1c;">O.C.N Credit Box S.R.L își menţine dreptul de a refuza parțial, sau integral solicitarea de credit, în cazul în care aceasta conține date eronate, false, sau solicitantul nu a comunicat O.C.N Credit Box S.R.L date corecte cu privire la situația sa financiară, prezența unor litigii, interdicții limitări în drepturi sau cu privire la grevări și/sau interdicții asupra unor bunuri ce-i aparțin cu drept de proprietate. Prezenta solicitare poate fi renegociată suplimentar, prin negociere directă la oficiul O.C.N Credit Box S.R.L ca urmare a prezentării suplimentare a unor garanții ce țin de executarea ulterioară a contractului de împrumut, drept exemplu:</span>
						</p>
						<ul>
							<li style="color: #1b1d1c; line-height: normal; background: white;"><span
									style="font-size: 12pt;">Prezentarea unei persoane terte in calitate de fidejusor,</span>
							</li>
							<li style="color: #1b1d1c; line-height: normal; background: white;"><span
									style="font-size: 12pt;">Prezentarea gajului asupra unui mobil ce aparține cu drept de proprietate solicitantului sau unui terț, cu acordul acestuia,</span>
							</li>
							<li style="color: #1b1d1c; line-height: normal; background: white;"><span
									style="font-size: 12pt;">Prezentarea ipotecii asupra unui bun imobil ce aparține cu drept de proprietate solicitantului sau unui terț, cu acordul acestuia,</span>
							</li>
							<li style="color: #1b1d1c; line-height: normal; background: white;"><span
									style="font-size: 12pt;">Prezentarea garanții reale privind executarea contractului de împrumut,</span>
							</li>
							<li style="color: #1b1d1c; line-height: normal; background: white;"><span
									style="font-size: 12pt;">Prezentarea unor dovezi clare privind venitul lunar al solicitantului (confirmat de catre angajator, precum si de catre autoritatile fiscale ale Republicii Moldova). </span>
							</li>
						</ul>
						<p style="margin: 15pt 0cm 7.5pt; line-height: normal; background: white;"><strong><span
								style="font-size: 12pt; color: #1b1d1c;">Confidențialitatea</span></strong></p>
						<p style="margin-bottom: 15pt; line-height: normal; background: white;"><span
								style="font-size: 12pt; color: #1b1d1c;">Prin bifarea căsuței Termeni și Condiții, solicitantul își exprimă acordul expres și neviciat, fiind pe deplin responsabil de acțiunile sale și consecințele survenite, la prelucrarea datelor cu caracter personal de către O.C.N Credit Box S.R.L, transmise personal, sau prin intermediul persoane terțe împuternicite de el, completînd cererea de solicitare a împrumutului (credit nonbancar) solicitantul împuternicește O.C.N Credit Box S.R.L cu dreptul de a prelucra datele cu caracter personal, inclusiv în scopuri statistice, de a verifica corectitudinea acestora, de a transmite aceste date terților în scopul verificării și/sau protejării intereselor legitime ale O.C.N Credit Box S.R.L.. Solicitantul fiind responsabil de acțiunele sale împuternicește ”O.C.N Credit Box” SRL la dezvăluirea datelor cu caracter personal necesare pentru luarea deciziilor înaintea încheierii contractului de împrumut (consultarea unor baze de date), ca urmare a transmiterii solicitării, precum și în scopul semnării și/sau executării contractului de împrumut.</span>
						</p>
						<p style="margin-bottom: 0.0001pt; line-height: normal;"><span
								style="font-size: 12pt; color: #1b1d1c;">Prin bifarea căsuței Termeni și Condiții, solicitantul își exprimă acordul expres și neviciat, consințămîntul, fiind pe deplin responsabil de acțiunile sale și consecințele survenite, la dezvăluirea datelor cu caracter personal către birourile de istorie creditară, Biroul Istoriilor de Credit ”Infodebit Credit Report”, Î.M “Biroul de Credit” S.R.L. în scopul formării istoriei de credit, conținutul căreia este stabilit de art.5 din Legea nr.122-XVI din 29 mai 2008 privind birourile istoriilor de credit. </span>
						</p>
						<p style="margin-bottom: 0.0001pt; line-height: normal;"><span
								style="font-size: 12pt; color: #1b1d1c;">Legea nr. 122-XVI din 29 mai 2008 “Privind birourile istoriilor de credit”</span>
						</p>
						<p style="margin-bottom: 15pt; line-height: normal; background: white;"><span
								style="font-size: 12pt; color: #1b1d1c;">O.C.N Credit Box S.R.L. își asumă responsabilitatea să nu transmită informația confidențială pe care o recepționează de la solicitant către persoane terțe, decît dacă aceasta transmitere are loc în condițiile enunțate mai sus și este necesară în scopul protejării intereselor legitime ale O.C.N Credit Box S.R.L., sau ca urmare a solicitării motivate ale autorităților de stat din Republica Moldova, fiind obligată prin lege să le transmită.</span>
						</p>
						<p style="margin-bottom: 15pt; line-height: normal; background: white;"><span
								style="font-size: 12pt; color: #1b1d1c;">O.C.N Credit Box S.R.L. este înregistrat în calitate de operator de date cu
							caracter personal în cadrul sistemului de evidenţă nr. 00000000,
							înregistrat în Registrul de evidenţă al operatorilor de date cu caracter personal&nbsp;</span><a
								href="http://www.registru.datepersonale.md/" target="_blank"><span
								style="font-size: 12pt; ">www.registru.datepersonale.md.</span></a><span
								style="font-size: 12pt; color: #1b1d1c;">&nbsp;Prelucrarea datelor cu caracter personal este efectuată numai în condițiile prevăzute de Legea nr. 133 din 08.07.2011 privind protecția datelor cu caracter personal.</span>
						</p>
						<p style="margin: 15pt 0cm 7.5pt; line-height: normal; background: white;"><strong><span
								style="font-size: 12pt; color: #1b1d1c;">Identitatea solicitantului</span></strong></p>
						<p style="margin-bottom: 15pt; line-height: normal; background: white;"><span
								style="font-size: 12pt; color: #1b1d1c;">Prin bifarea căsuței Termeni și Condiții, solicitantul confirmă, pe propria răspundere, că utilizează datele de identitate care îi aparțin personal, fiind incluse în actele de identitate emise de autoritățile competente ale Republicii Moldova, iar datele sunt veridice și actuale la momentul bifării căsiței. Solicitantul va purta răspundere penală în cazul în care va utiliza date unei persoanei terțe, fără acordul expres al ei,
							sau va introduce date eronate, false, sau care deja nu mai sunt valabile, cu scopul de a duce în eroare angajații O.C.N Credit Box S.R.L, pentru a obține beneficii cu caracter material.</span>
						</p>
						<p style="margin: 15pt 0cm 7.5pt; line-height: normal; background: white;"><strong><span
								style="font-size: 12pt; color: #1b1d1c;">Capacitatea juridică</span></strong></p>
						<p style="margin-bottom: 15pt; line-height: normal; background: white;"><span
								style="font-size: 12pt; color: #1b1d1c;">Prin bifarea căsuței Termeni și Condiții, solicitantul confirmă, pe propria răspundere, că dispune de capacitate juridică deplină, c</span><span
								style="font-size: 12pt; color: #1b1d1c;">ă</span><span
								style="font-size: 12pt; color: #1b1d1c;"> la momentul bifării a atins vîrsta de 18 ani. La fel, solicitantul confirmă, pe propria răspundere că nu se află în stare de ebrietate alcoolică, că nu se află sub influența unor substanțe narcotice sau psihotrope, inclusiv prescrise pentru tratament care ar putea influența capacitatea de a percepe natura juridică a actelor sau consecințele acestora.</span>
						</p></div>
				
				</div>
			</article>
			</div>
		</div>
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
