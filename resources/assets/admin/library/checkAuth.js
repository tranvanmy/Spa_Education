import router from '../router/router'
import store from '../store'

import { STORAGE_AUTH } from '../modules/auth/store/'

let defaultAuth = JSON.stringify({ user: {}, token: {} })
let authStorage = localStorage.getItem(STORAGE_AUTH) || defaultAuth
let auth = JSON.parse(authStorage)
let token = (auth && auth.token) ? auth.token : {}

axios.defaults.headers.common['Authorization'] = `${token.token_type} ${token.access_token}`;

let loading = store.state.storeLoading.loading
store.dispatch('setAdminLoading', { ...loading, show: true })

axios.get('/user')
    .then(response => {
        store.dispatch('setAdminLoading', { ...loading, show: false })
        let user = response.data;

        if (!user || !user.is_active) {
            localStorage.setItem(STORAGE_AUTH, defaultAuth)

            return router.push({ path: '/login' })
        }
    })
    .catch(errors => {
        localStorage.setItem(STORAGE_AUTH, defaultAuth)
        store.dispatch('setAdminLoading', { ...loading, show: false })

        return router.push({ path: '/login' })
    })
