<template>
    <div class="app flex-row align-items-center">
        <div class="container">
            <b-row class="justify-content-center">
                <b-col md="6">
                    <b-card-group>
                        <b-card no-body class="p-4">
                            <b-card-body>
                                <b-form validated novalidate>
                                    <b-form-group>
                                        <h1>{{ $t('textLogin') }}</h1>
                                        <p class="text-muted">{{ $t('textSignToAccount') }}</p>
                                        <div class="text-right text-danger">{{ errors.email }}</div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-addon">@</span>
                                            <b-form-input
                                                required type="email"
                                                placeholder="Email"
                                                v-model="loginForm.email"
                                            />
                                        </div>
                                        <div class="text-right text-danger">{{ errors.password }}</div>
                                        <div class="input-group mb-4">
                                            <span class="input-group-addon"><i class="icon-lock"></i></span>
                                            <b-form-input
                                                required type="password"
                                                placeholder="Password"
                                                v-model="loginForm.password"
                                            />
                                        </div>
                                        <b-row>
                                            <b-col cols="6">
                                                <b-button variant="primary" class="px-4" @click="submitLogin">
                                                    {{ $t('textLogin') }}
                                                </b-button>
                                            </b-col>
                                            <b-col cols="6" class="text-right">
                                                <b-button variant="link" class="px-0">{{ $t('textForgotPassword') }}</b-button>
                                            </b-col>
                                        </b-row>
                                    </b-form-group>
                                </b-form>
                            </b-card-body>
                        </b-card>
                    </b-card-group>
                </b-col>
            </b-row>
        </div>
    </div>
</template>

<script>
import { STORAGE_AUTH, PERMISSION_ADMIN } from '../store'
import { callApiLogin } from '../api'
import Helper from 'Admin/library/Helper'

export default {
    name: 'Login',

    beforeCreate() {
        Helper.changeTitleAdminPage(this.$i18n.t('textLogin'))
    },

    beforeMount() {
        let checkAuthAdmin = auth => {
            return auth
                && auth.user && auth.user.is_active
                && auth.token && auth.token.access_token
        }

        let defaultAuth = JSON.stringify({ user: {}, token: {} })
        let auth = JSON.parse(localStorage.getItem(STORAGE_AUTH) || defaultAuth)

        if (checkAuthAdmin(auth)) {
            return this.$router.push({ path: '/dashboard' })
        }
    },

    data() {
        return {
            loginForm: {
                email: '',
                password: ''
            },
            errors: {
                email: '',
                password: ''
            }
        }
    },

    computed: {
        loading() {
            return this.$store.state.storeLoading.loading
        }
    },

    methods: {
        async submitLogin() {
            this.$store.dispatch('setAdminLoading', { ...this.loading, show: true })
            let response = await callApiLogin(this.loginForm);
            this.$store.dispatch('setAdminLoading', { ...this.loading, show: false })

            if (response.status == 200) {
                if (!response.data.user.is_active) {
                    return this.$toaster.error(this.$i18n.t('textAccountNotActive'));
                }

                localStorage.setItem(STORAGE_AUTH, JSON.stringify(response.data))

                let token = response.data.token;
                axios.defaults.headers.common['Authorization'] = `${token.token_type} ${token.access_token}`;

                this.$toaster.success(this.$i18n.t('textLoginAdminSuccess'))
                return this.$router.push({ path: '/dashboard' })
            } else {
                let errors = response.response.data.errors
                this.errors.email = errors.email;
                this.errors.password = errors.password;

                if (errors.message) {
                    return this.$toaster.error(errors.message)
                }
            }
        }
    }
}
</script>
