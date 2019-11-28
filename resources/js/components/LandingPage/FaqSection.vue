<template>
    <div id="faq-section" class="faq__wrapper">
        <div class="container">
            
            <h1  v-if="lang === 'ru'">Вопросы и ответы</h1>
            <h1  v-if="lang === 'ro'">Întrebări și răspunsuri</h1>
            
            <div class="accordion">
                <div
                        class="accordion-item"
                        v-for="(content, i) in contents"
                        v-bind:class="{ 'accordion-active': content.active }"
                >
                    <div class="accordion-header">
                        <a href="#" v-on:click="expand($event, i)">
                            <div class="accordion-header-div">{{ content.title }}</div>
                            <div class="accordion-header-div">
                                <div class="accordion-caret"></div>
                            </div>
                        </a>
                    </div>
                    <div class="accordion-body" v-bind:ref="'accordion-body-' + i">
                        <div class="accordion-content">{{ content.description }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                contents: [{
                    title: 'Cine poate deveni clientul nostru?',
                    description: 'Dacă ați împlinit 18 ani, atunci aveți posibilitatea să deveniți clientul nostru.',
                    active: false
                }, {
                    title: 'Un pensioner poate beneficia de un împrumut?',
                    description: 'Desigur, noi acordăm împrumuturi pensionarilor. Sunt personae care au atins vîrsta de pensionare dar' +
                            ' continuă să activeze și în cazul dat pensia reprezintă un venit suplimentar.',
                    active: false
                }, {
                    title: 'Existența altor credite prezintă un obstacol pentru primirea unui împrumut ?',
                    description: 'Existența altor credite active nu se evaluează negativ de Compania noastră.',
                    active: false
                }, {
                    title: 'Achitarea anticipată a împrumutului este posibilă?',
                    description: 'Da, clientul are dreptul de a rambursa împrumutul primit anticipat. Noi nu v-om cere explicații privind cauzele care au favorizat să faceți acest lucru.',
                    active: false
                }, {
                    title: 'Ce urmează de făcut în cazul apariției greutăților la rambursarea împrumutului?',
                    description: 'În cazul apariției problemelor de ordin financiar, urgent faceți legătura cu expertul care Vă deservește.' +
                            ' Rețineți problema este mai ușor de soluționat la început\n',
                    active: false
                }]
            };
        },
        computed: {
            lang() {
                return this.$store.getters.getLang;
            },
        },
        methods: {
            expand(e, i) {
                e.preventDefault();
        
                let el = this.$refs['accordion-body-' + i][0];
                if (this.contents[i].active === false) {
                    this.contents[i].active = true;
            
                    TweenLite.to(el, 1, {
                        height: el.scrollHeight,
                        ease: Elastic.easeOut.config(1, 0.3)
                    });
                } else {
                    this.contents[i].active = false;
            
                    TweenLite.to(el, 0.5, {
                        height: 0,
                        ease: Bounce.easeOut
                    });
                }
            }
        },
        mounted() {
        
        }
    }
</script>


