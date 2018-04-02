import { callApiFetch, callApiAdd } from '../api'
import { callApiEdit, callApiDelete, callApiShow } from '../api'
import Helper from 'Admin/library/Helper'

const ADMIN_AUTHOR_FETCH = 'admin_author/fetch'
const ADMIN_AUTHOR_SET_PAGE = 'admin_author/set_page'
const ADMIN_AUTHOR_SET_AUTHOR = 'admin_author/set_author'
const ADMIN_AUTHOR_DELETE = 'admin_author/delete'
const ADMIN_AUTHOR_SET_FILTER = 'admin_author/set_filter'

const state = {
    listFetch: [],
    edit: {
        author: {}
    },
    currentPage: 1,
    valueFilter: '',
}

const mutations = {
    [ADMIN_AUTHOR_FETCH](state, { listFetch }) {
        return state.listFetch = listFetch;
    },

    [ADMIN_AUTHOR_SET_PAGE](state, { page }) {
        return state.currentPage = page
    },

    [ADMIN_AUTHOR_SET_AUTHOR](state, { author }) {
        return state.edit.author = author
    },

    [ADMIN_AUTHOR_DELETE](state, { id }) {
        return state.listFetch = state.listFetch.filter((p) => p.id !== id)
    },

    [ADMIN_AUTHOR_SET_FILTER](state, { value }) {
        return state.valueFilter = value
    },
}

const actions = {
    async actionFetchAuthors({ commit }, { vue, params }) {
        let mainLoading = vue.$store.state.storeLoading.mainLoading
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: true })
        let response = await callApiFetch(params);
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: false })

        if (response.status == 200) {
            return commit(ADMIN_AUTHOR_FETCH, { listFetch: response.data });
        }

        return vue.$toaster.error(Helper.getFirstError(response, vue.$i18n.t('textDefaultErrorRequest')));
    },

    actionAuthorSetPage({ commit }, { page }) {
        return commit(ADMIN_AUTHOR_SET_PAGE, { page })
    },

    async actionAuthorAdd({ commit }, { vue, params }) {
        let mainLoading = vue.$store.state.storeLoading.mainLoading
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: true })
        let response = await callApiAdd(params)
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: false })

        if (response.status == 200) {
            vue.$toaster.success(response.data.message);

            return vue.$router.push({ path: '/authors' })
        }

        return vue.$toaster.error(Helper.getFirstError(response, vue.$i18n.t('textDefaultErrorRequest')));
    },

    async actionAuthorShow( { commit }, { vue, id }) {
        let mainLoading = vue.$store.state.storeLoading.mainLoading
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: true })
        let response = await callApiShow(id)
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: false })

        if (response.status == 200) {
            return commit(ADMIN_AUTHOR_SET_AUTHOR, { product: response.data })
        }

        vue.$toaster.error(Helper.getFirstError(response, vue.$i18n.t('textDefaultErrorRequest')));

        return vue.$router.push({ path: '/authors' })
    },

    async actionAuthorEdit({ commit }, { vue, id, params }) {
        let mainLoading = vue.$store.state.storeLoading.mainLoading
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: true })
        let response = await callApiEdit(id, params)
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: false })

        if (response.status == 200) {
            vue.$toaster.success(response.data.message)

            return vue.$router.push({ path: '/authors' })
        }

        return vue.$toaster.error(Helper.getFirstError(response, vue.$i18n.t('textDefaultErrorRequest')));
    },

    async actionAuthorDelete({ commit }, { vue, id }) {
        let mainLoading = vue.$store.state.storeLoading.mainLoading
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: true })
        let response = await callApiDelete(id)
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: false })

        if (response.status == 200) {
            commit(ADMIN_AUTHOR_DELETE, { id })

            return vue.$toaster.success(response.data.message);
        }

        return vue.$toaster.error(Helper.getFirstError(response, vue.$i18n.t('textDefaultErrorRequest')));
    },

    actionAuthorSetFilter({ commit }, { value }) {
        return commit(ADMIN_AUTHOR_SET_FILTER, { value })
    },
}

const storeAdminAuthor = {
    state,
    actions,
    mutations
}

export default storeAdminAuthor;
