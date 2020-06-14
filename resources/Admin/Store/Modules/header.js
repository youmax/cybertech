export default {
  namespaced: true,

  state: {
    drawer : false
  },

  getters: {
    drawer: state => {
      return () => {return state.drawer};
    }
  },

  mutations: {
    setDrawer(state, value){
      state.drawer = value
    },
  },

  actions: {
    toggle({commit, state}){
      commit('setDrawer', !state.drawer);
    },
    setDrawer({commit}, value){
      commit('setDrawer', value);
    }
  }
}