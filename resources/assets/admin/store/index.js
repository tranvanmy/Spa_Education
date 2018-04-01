import Vue from 'vue'
import Vuex from 'vuex'

import storeAuth from 'Admin/modules/auth/store'
import storeLoading from 'Admin/modules/loading/store'
import storeAdminEvent from 'Admin/modules/event/store'

Vue.use(Vuex)

const storeLanguage = {
    state: {
        languages: [
            {
                key: 'vi',
                title: 'Vietnam',
            },
            {
                key: 'en',
                title: 'English',
            }
        ]
    }
}

export default new Vuex.Store({
    modules: {
        storeAuth,
        storeLanguage,
        storeLoading,
        storeAdminEvent,
    }
})
