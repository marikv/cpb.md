export default {
  state: {
    showSpinner: false,
  },

  actions: {
  },

  mutations: {
    setShowSpinner(state, val) {
      state.showSpinner = val;
    },
  },

  getters: {
    getShowSpinner(state) {
      return state.showSpinner;
    }
  },
};
