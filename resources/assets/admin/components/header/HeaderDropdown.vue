<template>
    <b-nav-item-dropdown right no-caret>
        <template slot="button-content">
            <img src="/static/img/avatars/6.jpg" class="img-avatar" :alt="$t('textAccount')">
        </template>
        <b-dropdown-header tag="div" class="text-center"><strong>{{ $t('textAccount') }}</strong></b-dropdown-header>
        <b-dropdown-item @click="logout">
            <i class="fa fa-lock"></i>
            {{ $t('textLogout') }}
        </b-dropdown-item>
    </b-nav-item-dropdown>
</template>
<script>
import { STORAGE_AUTH } from 'Admin/modules/auth/store'
import { callApiLogout } from 'Admin/modules/auth/api'

export default {
    name: 'header-dropdown',

    methods: {
        async logout() {
            let willDelete = await this.$swal({
                title: this.$i18n.t('confirmLogout'),
                icon: 'warning',
                buttons: true,
                dangerMode: true,
            })

            if (willDelete) {
                this.$store.dispatch('setAdminLoading', { ...this.loading, show: true })
                await callApiLogout()
                this.$store.dispatch('setAdminLoading', { ...this.loading, show: false })

                let defaultAuth = JSON.stringify({ user: {}, token: {} })
                localStorage.setItem(STORAGE_AUTH, defaultAuth)

                return this.$router.push({ path: '/login' })
            }
        }
    }
}
</script>
