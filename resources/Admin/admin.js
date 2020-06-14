import Vue from 'vue'
import Vuex from 'vuex'
import VueMeta from 'vue-meta'
import { InertiaApp } from '@inertiajs/inertia-vue'
import Vuetify from 'vuetify'
import store from '@/Store'

Vue.use(Vuetify);

Vue.config.productionTip = false
Vue.mixin({ methods: { route: window.route } })
Vue.use(InertiaApp)
Vue.use(VueMeta)
Vue.use(Vuex)

let app = document.getElementById('app')
new Vue({
  vuetify: new Vuetify(),
  store,
  render: h => h(InertiaApp, {
    props: {
      initialPage: JSON.parse(app.dataset.page),
      resolveComponent: name => import(`@/${name}`).then(module => module.default),
    },
  }),
}).$mount(app)
