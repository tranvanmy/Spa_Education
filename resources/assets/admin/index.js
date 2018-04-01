import Vue from 'vue'
import VueI18n from 'vue-i18n'

import App from './App.vue'
import router from './router/router'
import messages from '../i18n/admin/index'
import store from './store'

// All config
require('./library/config')

// Plugins use
require('./library/usePlugin')

// Check Auth user
require('./library/checkAuth')

const i18n = new VueI18n({
    locale: 'en', // set locale: en, vi ...
    messages // set locale messages
})

new Vue({
    router,
    store,
    i18n,
    template: '<App/>',
    components: { App }
}).$mount('#admin');
