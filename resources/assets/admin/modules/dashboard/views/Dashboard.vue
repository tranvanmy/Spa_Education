<template>
    <div role="tablist">
        <b-card no-body class="mb-1">
            <b-card-body>
            </b-card-body>
        </b-card>
    </div>
</template>

<script>
import Helper from 'Admin/library/Helper'
import { callApiChangePassword } from 'Admin/modules/auth/api'

export default {
    name: 'Dashboard',

    beforeCreate() {
        Helper.changeTitleAdminPage(this.$i18n.t('textDashboard'))
    },

    data() {
        return {
            formData: this.resetFormData(),

            formErrors: {
                old_password: '',
                new_password: '',
            }
        }
    },

    computed: {
        errorConfirmPassword() {
            return (this.formData.confirm_password
                    && this.formData.new_password !== this.formData.confirm_password
                ) ? this.$i18n.t('textConfirmPasswordNotCorrect') : ''
        }
    },

    methods: {
        resetFormData() {
            return {
                old_password: '',
                new_password: '',
                confirm_password: '',
            }
        },

        async submitChangePassword() {
            let params = this.formData

            if (!params.old_password || !params.new_password) {
                return this.$toaster.error(this.$i18n.t('textNotFillEnough'))
            }

            if (params.new_password !== params.confirm_password) {
                return this.$toaster.error(this.$i18n.t('textConfirmPasswordNotCorrect'))
            }

            this.$store.dispatch('setAdminLoading', { ...this.loading, show: true })
            let response = await callApiChangePassword(params)
            this.$store.dispatch('setAdminLoading', { ...this.loading, show: false })

            if (response.status == 200) {
                this.formData = this.resetFormData()

                return this.$toaster.success(response.data.message)
            } else {
                let errors = response.response.data.errors || {}

                this.formErrors.old_password = errors.old_password || response.response.data.error
                this.formErrors.new_password = errors.new_password

                return this.$toaster.error(Helper.getFirstError(response, this.$i18n.t('textDefaultErrorRequest')));
            }
        }
    }
}
</script>
