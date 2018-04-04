import Vue from 'vue'
import Vuex from 'vuex'

import storeAuth from 'Admin/modules/auth/store'
import storeLoading from 'Admin/modules/loading/store'
import storeAdminEvent from 'Admin/modules/event/store'
import storeAdminAuthor from 'Admin/modules/author/store'
import storeAdminAboutUs from 'Admin/modules/about-us/store'
import storeAdminJoinUs from 'Admin/modules/join-us/store'
import storeAdminInstructor from 'Admin/modules/instructor/store'
import storeAdminCourse from 'Admin/modules/course/store'
import storeAdminCategory from 'Admin/modules/category/store'
import storeAdminResearchDevelopment from 'Admin/modules/research-develop/store'
import storeAdminProduct from 'Admin/modules/product/store'
import storeAdminDataScientist from 'Admin/modules/data-scientist/store'

Vue.use(Vuex)

const storeLanguage = {
    state: {
        languages: [
            {
                key: 'vi',
                title: 'Version Vietnam',
            },
            {
                key: 'en',
                title: 'Version English',
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
        storeAdminAuthor,
        storeAdminAboutUs,
        storeAdminJoinUs,
        storeAdminInstructor,
        storeAdminCourse,
        storeAdminCategory,
        storeAdminResearchDevelopment,
        storeAdminProduct,
        storeAdminDataScientist,
    }
})
