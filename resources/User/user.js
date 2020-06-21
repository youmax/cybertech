import Vue from 'vue'
import VueMeta from 'vue-meta'
import { InertiaApp } from '@inertiajs/inertia-vue'
import Vuetify from 'vuetify'
import modules from '@/Core/modules';
import { plekan } from './plekan';

Vue.use(Vuetify);

Vue.config.productionTip = false
Vue.mixin({ methods: { route: window.route } })
Vue.use(InertiaApp)
Vue.use(VueMeta)
Vue.use(plekan, {
  defaultLanguage: 'tr',
  languages: ['tr', 'en'],
  modules,
  thumbnailPath: '/static/thumbnails/',
  plekan_buttons: {
    // Special buttons
    save: {
      text: 'Show Result',
      class: 'plekan-footer-button save',
      callback(rows) {
        console.log(rows);
      },
    },
    cancel: {
      text: 'Cancel',
      class: 'plekan-footer-button cancel',
      callback(rows) {
        console.table(JSON.parse(JSON.stringify(rows[0].contents)));
      },
    },
  },
});

let app = document.getElementById('app')

new Vue({
  metaInfo: {
    titleTemplate: (title) => title ? `Dashboard - ${title}` : 'Dashboard'
  },
  vuetify: new Vuetify(),
  render: h => h(InertiaApp, {
    props: {
      initialPage: JSON.parse(app.dataset.page),
      resolveComponent: name => import(`@/${name}`).then(module => module.default),
    },
  }),
}).$mount(app)
