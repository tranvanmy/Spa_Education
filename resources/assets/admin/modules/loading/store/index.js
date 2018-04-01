const ADMIN_LOADING = 'admin_loading'
const ADMIN_MAIN_LOADING = 'admin_main_loading'

const state = {
    loading: {
        show: false
    },
    mainLoading: {
        show: false
    },
}

const mutations = {
    [ADMIN_LOADING](state, { loading }) {
        state.loading = loading
    },

    [ADMIN_MAIN_LOADING](state, { mainLoading }) {
        state.mainLoading = mainLoading
    },
}

const actions = {
    setAdminLoading({ commit }, loading) {
        commit(ADMIN_LOADING, { loading });
    },
    setAdminMainLoading({ commit }, mainLoading) {
        commit(ADMIN_MAIN_LOADING, { mainLoading });
    },
}

const storeLoading = {
    state,
    actions,
    mutations
}

export default storeLoading;
