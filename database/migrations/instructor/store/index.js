import { callApiFetch, callApiAdd } from '../api'
import { callApiEdit, callApiDelete, callApiShow } from '../api'
import Helper from 'Admin/library/Helper'

export const STATUS_SHOW = true
export const STATUS_HIDDEN = false

const ADMIN_FETCH = 'admin_instructor/fetch'
const ADMIN_SET_PAGE = 'admin_instructor/set_page'
const ADMIN_SET_SHOW_DATA = 'admin_instructor/set_instructor'
const ADMIN_DELETE = 'admin_instructor/delete'
const ADMIN_SET_FILTER = 'admin_instructor/set_filter'

const state = {
    listFetch: [],
    edit: {
        data: {}
    },
    currentPage: 1,
    valueFilter: '',
}

const mutations = {
    [ADMIN_FETCH](state, { listFetch }) {
        return state.listFetch = listFetch;
    },

    [ADMIN_SET_PAGE](state, { page }) {
        return state.currentPage = page
    },

    [ADMIN_SET_SHOW_DATA](state, { data }) {
        return state.edit.data = data
    },

    [ADMIN_DELETE](state, { id }) {
        return state.listFetch = state.listFetch.filter((p) => p.id !== id)
    },

    [ADMIN_SET_FILTER](state, { value }) {
        return state.valueFilter = value
    },
}

const actions = {
    async actionFetchInstructors({ commit }, { vue, params }) {
        let mainLoading = vue.$store.state.storeLoading.mainLoading
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: true })
        let response = await callApiFetch(params);
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: false })

        if (response.status == 200) {
            return commit(ADMIN_FETCH, { listFetch: response.data });
        }

        return vue.$toaster.error(Helper.getFirstError(response, vue.$i18n.t('textDefaultErrorRequest')));
    },

    actionInstructorSetPage({ commit }, { page }) {
        return commit(ADMIN_SET_PAGE, { page })
    },

    async actionInstructorAdd({ commit }, { vue, params }) {
        let mainLoading = vue.$store.state.storeLoading.mainLoading
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: true })
        let response = await callApiAdd(params)
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: false })

        if (response.status == 200) {
            vue.$toaster.success(response.data.message);

            return vue.$router.push({ path: '/instructors' })
        }

        return vue.$toaster.error(Helper.getFirstError(response, vue.$i18n.t('textDefaultErrorRequest')));
    },

    async actionInstructorShow( { commit }, { vue, id }) {
        let mainLoading = vue.$store.state.storeLoading.mainLoading
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: true })
        let response = await callApiShow(id)
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: false })

        if (response.status == 200) {
            return commit(ADMIN_SET_SHOW_DATA, { data: response.data })
        }

        vue.$toaster.error(Helper.getFirstError(response, vue.$i18n.t('textDefaultErrorRequest')));

        return vue.$router.push({ path: '/instructors' })
    },

    async actionInstructorEdit({ commit }, { vue, id, params }) {
        let mainLoading = vue.$store.state.storeLoading.mainLoading
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: true })
        let response = await callApiEdit(id, params)
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: false })

        if (response.status == 200) {
            vue.$toaster.success(response.data.message)

            return vue.$router.push({ path: '/instructors' })
        }

        return vue.$toaster.error(Helper.getFirstError(response, vue.$i18n.t('textDefaultErrorRequest')));
    },

    async actionInstructorDelete({ commit }, { vue, id }) {
        let mainLoading = vue.$store.state.storeLoading.mainLoading
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: true })
        let response = await callApiDelete(id)
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: false })

        if (response.status == 200) {
            commit(ADMIN_DELETE, { id })

            return vue.$toaster.success(response.data.message);
        }

        return vue.$toaster.error(Helper.getFirstError(response, vue.$i18n.t('textDefaultErrorRequest')));
    },

    actionInstructorSetFilter({ commit }, { value }) {
        return commit(ADMIN_SET_FILTER, { value })
    },
}

const storeAdminInstructor = {
    state,
    actions,
    mutations
}

export default storeAdminInstructor;
