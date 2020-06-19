export default {
  namespaced: true,

  state: {
    headers: [
      { text: "Title", value: "name" },
      { text: "Detail", value: "detail" },
      { text: "Actions", value: "actions", sortable: false }
    ],
    items: []
  },

  getters: {
    columnDef : state =>{
      return state.headers.map((obj)=>{return obj.value}).filter(v=>v!='actions');
    }
  },

  mutations: {
    setItems (state, items) {
      state.items = items
    },

  },

  actions: {
    fetchProducts({commit , rootGetters}) {
      commit('setItems', rootGetters.$page.items);
    }
  }
}