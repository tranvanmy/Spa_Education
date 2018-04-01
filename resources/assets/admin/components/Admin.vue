<template>
    <div class="app">
        <AppHeader/>
        <div class="app-body" style="position: relative">
            <div class="splash-screen" v-show="mainLoading.show">
                <div class="splash-overlay" v-show="mainLoading.show"></div>
                <div class="splash-spinner"></div>
            </div>
            <Sidebar :navItems="nav"/>
            <main class="main">
                <breadcrumb :list="list"/>
                <div class="container-fluid">
                    <router-view></router-view>
                </div>
            </main>
            <AppAside/>
        </div>
        <AppFooter/>
    </div>
</template>

<script>
import nav from '../_nav'
import AppHeader from './header/AppHeader.vue'
import Sidebar from './sidebar/Sidebar.vue'
import AppAside from './aside/AppAside.vue'
import Breadcrumb from './breadcrumb/Breadcrumb.vue'
import AppFooter from './footer/AppFooter.vue'

export default {
    name: 'admin',
    components: {
        AppHeader,
        Sidebar,
        AppAside,
        AppFooter,
        Breadcrumb
    },
    data() {
        return {
            nav: nav.items
        }
    },
    computed: {
        mainLoading() {
            return this.$store.state.storeLoading.mainLoading
        },

        name() {
            return this.$route.name
        },

        list() {
            return this.$route.matched
        }
    }
}
</script>
