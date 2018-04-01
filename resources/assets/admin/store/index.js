import Vue from 'vue'
import Vuex from 'vuex'

import storeAuth from 'Admin/modules/auth/store'
// import storeAdminMenu from 'Admin/modules/menu/store'
import storeLoading from 'Admin/modules/loading/store'
// import storeAdminCategory from 'Admin/modules/category/store'
// import storeAdminProduct from 'Admin/modules/product/store'
// import storeAdminPost from 'Admin/modules/post/store'
// import storeAdminBanner from 'Admin/modules/banner/store'

Vue.use(Vuex)

export default new Vuex.Store({
    modules: {
        storeAuth,
        // storeAdminMenu,
        storeLoading,
        // storeAdminCategory,
        // storeAdminProduct,
        // storeAdminPost,
        // storeAdminBanner,
    }
})
