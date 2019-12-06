<template>
    <div id="faq-section" v-if="contents.length > 0" class="faq__wrapper paralax__wrapper">
        <div class="container">
            
            <h1  v-if="lang === 'ru'">Вопросы и ответы</h1>
            <h1  v-if="lang === 'ro'">Întrebări și răspunsuri</h1>
            <h1  v-if="lang === 'en'">FAQ</h1>
            
            <div class="accordion">
                <div
                        class="accordion-item"
                        v-for="(content, i) in contents"
                        v-bind:class="{ 'accordion-active': content.active }"
                >
                    <div class="accordion-header">
                        <a href="#" v-on:click="expand($event, i)">
                            <div class="accordion-header-div" v-html="content.title"></div>
                            <div class="accordion-header-div">
                                <div class="accordion-caret"></div>
                            </div>
                        </a>
                    </div>
                    <div class="accordion-body" v-bind:ref="'accordion-body-' + i">
                        <div class="accordion-content" v-html="content.description"></div>
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
	            contents: [],
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
            this.contents = window.faqs.map(faq => ({
		        title: faq[`query_${this.lang}`],
		        description: faq[`answer_${this.lang}`],
		        active: false,
	        }));
        }
    }
</script>


