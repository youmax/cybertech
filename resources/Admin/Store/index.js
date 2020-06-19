import Vue from "vue";
import Vuex from "vuex";

import header from '@/Store/Modules/header'
import product from '@/Store/Modules/product'

Vue.use(Vuex);
export default new Vuex.Store({
    modules: {
        product,
        header
    },
    state: {
        $page : null,
        $inertia : null
    },
    actions: {
        initInertia({commit}, page, inertia){
            commit('setPage', page);
            commit('setInertia', inertia);
        }
    },
    mutations: {
        setPage(state, page){
            state.$page = page;
        },
        setInertia(state, inertia){
            state.$inertia = inertia;
        }
    },
    getters: {
        $page : (state) => {return state.$page; },
        $inertia : (state) => {return state.$inertia; }
    }
})