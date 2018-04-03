import { callApiFetch, callApiAdd } from '../api'
import { callApiEdit, callApiDelete, callApiShow } from '../api'
import Helper from 'Admin/library/Helper'

export const STATUS_SHOW = true
export const STATUS_HIDDEN = false

const ADMIN_EVENT_FETCH = 'admin_event/fetch'
const ADMIN_EVENT_SET_PAGE = 'admin_event/set_page'
const ADMIN_EVENT_SET_EVENT = 'admin_event/set_event'
const ADMIN_EVENT_DELETE = 'admin_event/delete'
const ADMIN_EVENT_SET_FILTER = 'admin_event/set_filter'

const state = {
    listFetch: [],
    edit: {
        data: {}
    },
    currentPage: 1,
    valueFilter: '',
}

const mutations = {
    [ADMIN_EVENT_FETCH](state, { listFetch }) {
        return state.listFetch = listFetch;
    },

    [ADMIN_EVENT_SET_PAGE](state, { page }) {
        return state.currentPage = page
    },

    [ADMIN_EVENT_SET_EVENT](state, { data }) {
        return state.edit.data = data
    },

    [ADMIN_EVENT_DELETE](state, { id }) {
        return state.listFetch = state.listFetch.filter((p) => p.id !== id)
    },

    [ADMIN_EVENT_SET_FILTER](state, { value }) {
        return state.valueFilter = value
    },
}

const actions = {
    async actionFetchEvents({ commit }, { vue, params }) {
        let mainLoading = vue.$store.state.storeLoading.mainLoading
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: true })
        let response = await callApiFetch(params);
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: false })

        if (response.status == 200) {
            return commit(ADMIN_EVENT_FETCH, { listFetch: response.data });
        }

        return vue.$toaster.error(Helper.getFirstError(response, vue.$i18n.t('textDefaultErrorRequest')));
    },

    actionEventSetPage({ commit }, { page }) {
        return commit(ADMIN_EVENT_SET_PAGE, { page })
    },

    async actionEventAdd({ commit }, { vue, params }) {
        let mainLoading = vue.$store.state.storeLoading.mainLoading
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: true })
        let response = await callApiAdd(params)
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: false })

        if (response.status == 200) {
            vue.$toaster.success(response.data.message);

            return vue.$router.push({ path: '/events' })
        }

        return vue.$toaster.error(Helper.getFirstError(response, vue.$i18n.t('textDefaultErrorRequest')));
    },

    async actionEventShow( { commit }, { vue, id }) {
        let mainLoading = vue.$store.state.storeLoading.mainLoading
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: true })
        let response = await callApiShow(id)
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: false })

        if (response.status == 200) {
            return commit(ADMIN_EVENT_SET_EVENT, { data: response.data })
        }

        vue.$toaster.error(Helper.getFirstError(response, vue.$i18n.t('textDefaultErrorRequest')));

        return vue.$router.push({ path: '/events' })
    },

    async actionEventEdit({ commit }, { vue, id, params }) {
        let mainLoading = vue.$store.state.storeLoading.mainLoading
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: true })
        let response = await callApiEdit(id, params)
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: false })

        if (response.status == 200) {
            vue.$toaster.success(response.data.message)

            return vue.$router.push({ path: '/events' })
        }

        return vue.$toaster.error(Helper.getFirstError(response, vue.$i18n.t('textDefaultErrorRequest')));
    },

    async actionEventDelete({ commit }, { vue, id }) {
        let mainLoading = vue.$store.state.storeLoading.mainLoading
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: true })
        let response = await callApiDelete(id)
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: false })

        if (response.status == 200) {
            commit(ADMIN_EVENT_DELETE, { id })

            return vue.$toaster.success(response.data.message);
        }

        return vue.$toaster.error(Helper.getFirstError(response, vue.$i18n.t('textDefaultErrorRequest')));
    },

    actionEventSetFilter({ commit }, { value }) {
        return commit(ADMIN_EVENT_SET_FILTER, { value })
    },
}

const storeAdminEvent = {
    state,
    actions,
    mutations
}

export default storeAdminEvent;
