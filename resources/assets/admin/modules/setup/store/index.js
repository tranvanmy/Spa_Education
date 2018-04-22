import { callApiEdit, callApiShow } from '../api'
import Helper from 'Admin/library/Helper'

const ADMIN_SETUP_SET_SETUP = 'admin_setup/set_setup'

const state = {
    edit: {
        data: {}
    }
}

const mutations = {
    [ADMIN_SETUP_SET_SETUP](state, { data }) {
        return state.edit.data = { ...data }
    },
}

const actions = {
    async actionSetupShow( { commit }, { vue }) {
        let mainLoading = vue.$store.state.storeLoading.mainLoading
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: true })
        let response = await callApiShow()
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: false })

        if (response.status == 200) {
            return commit(ADMIN_SETUP_SET_SETUP, { data: response.data })
        }

        return vue.$toaster.error(Helper.getFirstError(response, vue.$i18n.t('textDefaultErrorRequest')));
    },

    async actionSetupEdit({ commit }, { vue, params }) {
        let mainLoading = vue.$store.state.storeLoading.mainLoading
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: true })
        let response = await callApiEdit(params)
        vue.$store.dispatch('setAdminMainLoading', { ...mainLoading, show: false })

        if (response.status == 200) {
            vue.$toaster.success(response.data.message)

            return commit(ADMIN_SETUP_SET_SETUP, { data: response.data.data })
        }

        return vue.$toaster.error(Helper.getFirstError(response, vue.$i18n.t('textDefaultErrorRequest')));
    },
}

const storeAdminSetup = {
    state,
    actions,
    mutations
}

export default storeAdminSetup;
