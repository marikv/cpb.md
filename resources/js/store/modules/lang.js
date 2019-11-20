export default {
  state: {
    lang: localStorage.getItem('lang') ? localStorage.getItem('lang') : 'ro',
  },

  actions: {
  },

  mutations: {
    setLang(state, lang) {
      state.lang = lang;
      localStorage.setItem('lang', lang);
    },
  },

  getters: {
    getLang(state) {
      return state.lang;
    }
  },
};
