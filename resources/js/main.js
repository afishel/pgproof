import Vue from 'vue'
import App from './App'
import store from './store'
import router from './router'
import { sync } from 'vuex-router-sync'
import Paginate from 'vuejs-paginate'
import VueMoment from 'vue-moment'
import { mapActions } from 'vuex';

sync(store, router)

Vue.use(VueMoment)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

Vue.component('icon', require('./components/UI/Icon/Icon.vue'))
Vue.component('paginate', Paginate)

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

new Vue({
    el: '#app',
    router,
    store,
    template: '<App/>',
    components: {
      App,
    },
    methods: {
      ...mapActions([
        'checkNetworkStatus'
      ])
    },
    mounted() {
      this.checkNetworkStatus()
      window.addEventListener('online', this.checkNetworkStatus)
      window.addEventListener('offline', this.checkNetworkStatus)
    },
});
