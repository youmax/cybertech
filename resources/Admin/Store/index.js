import Vue from "vue";
import Vuex from "vuex";

import actions from '@/Store/actions'
import header from '@/Store/Modules/header'
import product from '@/Store/Modules/product'

Vue.use(Vuex);
export default new Vuex.Store({
    modules: {
        product,
        header
    },
    state: {},
    actions,
    mutations: {},
    getters: {}
})