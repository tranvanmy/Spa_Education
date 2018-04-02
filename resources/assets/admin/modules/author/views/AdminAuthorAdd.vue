<template>
    <b-card>
        <b-row>
            <b-col sm="12">
                <b-form validated>
                    <b-row>
                        <b-col sm="12">
                            <b-form-fieldset :label="$t('textAvatar')"
                            >
                                <vue-transmit
                                    tag="section"
                                    v-bind="uploadOptions"
                                    @success="successUploader"
                                    @error="errorUploader"
                                    upload-area-classes="bg-faded"
                                    ref="uploader"
                                    style="border: 1px solid #E5E5E5"
                                >
                                    <b-row>
                                        <b-col sm="12"
                                            style="border-radius: 1px; boder: 1px solid #DCDCDC; padding-top:5px;margin-bottom: 5px"
                                            class="text-center"
                                        >
                                            <button class="btn btn-primary"
                                                @click="triggerBrowse"
                                                style="margin-left: 20px"
                                            >{{ $t('textUploadFile') }}</button>
                                        </b-col>
                                    </b-row>
                                    <!-- Scoped slot -->
                                    <template slot="files" slot-scope="props">
                                        <div v-for="(file, i) in props.files"
                                            :key="file.id" :class="{'mt-5': i === 0}"
                                            style="margin-bottom: 20px"
                                        >
                                            <b-row>
                                                <b-col sm="2">
                                                    <b-img thumbnail
                                                        :src="file.dataUrl"
                                                        class="img-fluid d-flex mr-3"
                                                    />
                                                </b-col>
                                                <b-col sm="9">
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success"
                                                            :style="{width: file.upload.progress + '%'}"
                                                        >
                                                            {{ file.upload.progress + '%' }}
                                                        </div>
                                                    </div>
                                                </b-col>
                                                <b-col sm="1">
                                                    <b-button type="reset" size="sm" variant="danger"
                                                        @click="removeUploadFile(i, $event)"
                                                    >
                                                        <i class="fa fa-remove"></i>
                                                    </b-button>
                                                </b-col>
                                            </b-row>
                                        </div>
                                    </template>
                                </vue-transmit>
                            </b-form-fieldset>
                        </b-col>
                    </b-row>
                    <b-tabs pills card>
                        <b-tab
                            :title="language.title"
                            v-for="language in getLanguages()"
                            :key="language.key"
                        >
                            <b-row>
                                <b-col sm="12">
                                    <b-form-fieldset :label="$t('textName')">
                                        <b-form-input
                                            type="text"
                                            v-model="formData[language.key].name"
                                            :placeholder="$t('textName')"
                                            @input="handleChangeTitle($event, language.key)"
                                        />
                                    </b-form-fieldset>
                                </b-col>
                            </b-row>
                        </b-tab>
                    </b-tabs>

                </b-form>
            </b-col><!--/.col-->
        </b-row>
        <div slot="header" class="w-100">
            <b-row>
                <b-col sm="4">{{ $t('textAddNew') }}</b-col>
                <b-col sm="8" class="text-right">
                    <b-button type="submit" size="xs" variant="primary" @click="clickAddItem">
                        <i class="fa fa-dot-circle-o"></i>
                        {{ $t('textAddNew') }}
                    </b-button>
                    <b-button type="reset" size="xs" variant="danger" @click="clickCancel">
                        <i class="fa fa-ban"></i>
                        {{ $t('textCancel') }}
                    </b-button>
                </b-col>
            </b-row>
        </div>
        <div slot="footer" class="w-100 text-center">
            <b-button type="submit" size="xs" variant="primary" @click="clickAddItem">
                <i class="fa fa-dot-circle-o"></i>
                {{ $t('textAddNew') }}
            </b-button>
            <b-button type="reset" size="xs" variant="danger" @click="clickCancel">
                <i class="fa fa-ban"></i>
                {{ $t('textCancel') }}
            </b-button>
        </div>
    </b-card>
</template>

<script>
import cSwitch from 'Assets/components/Switch.vue'
import Helper from 'Admin/library/Helper'

import { STATUS_SHOW, STATUS_HIDDEN } from '../store'
import { STORAGE_AUTH } from 'Admin/modules/auth/store'

export default {
    name: 'AdminAuthorAdd',

    components: { cSwitch },

    beforeCreate() {
        Helper.changeTitleAdminPage(this.$i18n.t('textManageAuthor'))
    },

    data() {
        let token = JSON.parse(localStorage.getItem(STORAGE_AUTH)).token
        let today = new Date()

        return {
            formData: this.resetFromData(),
            uploadOptions: {
                acceptedFileTypes: ['image/*'],
                url: '/api/v0/upload-image',
                clickable: false,
                params: {
                    folder: `product-${today.getFullYear()}
                        -${today.getMonth() + 1}
                        -${today.getDate()}
                    `,
                },
                maxFiles: 1,
                paramName: 'image',
                headers: {
                    Authorization: `${token.token_type} ${token.access_token}`
                }
            }
        }
    },

    methods: {
        getLanguages(){
            return this.$store.state.storeLanguage.languages
        },

        triggerBrowse(event) {
            event.preventDefault()

            if (this.$refs.uploader.files.length >= this.uploadOptions.maxFiles) {
                return this.$toaster.error(this.$i18n.t('textNotAddFile'));
            }

            return this.$refs.uploader.triggerBrowseFiles()
        },

        async removeUploadFile(index, event) {
            event.preventDefault();

            let files = this.$refs.uploader.files

            await this.$swal({
                title: this.$i18n.t('textConfirmDelete'),
                icon: 'warning',
                buttons: true,
                dangerMode: true,
            }) && (this.$refs.uploader.files = files.filter((f, i) => i !== index))

            return this.formData.sameData.image_url = ''
        },

        successUploader(response) {
            let serveRespone = JSON.parse(response.xhr.response)

            return this.formData.sameData.image_url = serveRespone.path
        },

        errorUploader(error) {
            let files = this.$refs.uploader.files
            let xhr = { response: JSON.parse(error.xhr.response) }

            this.$toaster.error(Helper.getFirstError(xhr, this.$i18n.t('textDefaultErrorRequest')))

            return this.$refs.uploader.files.length = files.length - 1;
        },

        ortherOptions() {
            return {
                ...configTinyMCE,
                height: 250,
            }
        },

        resetFromData() {
            let sameForm = {
                name: '',
            }

            let formData = {
                sameData: {
                    'image_url': '',
                }
            }

            for (let language of this.getLanguages()) {
                formData[language.key] = { ...sameForm }
            }

            return formData;
        },

        convertDataSubmit() {
            let params = {
                ...this.formData.sameData
            }

            for (let language of this.getLanguages()) {
                let form = this.formData[language.key];
                for(let key in form) {
                    params[`${key}_${language.key}`] = form[key]
                }
            }

            return params;
        },

        clickAddItem() {
            let params = this.convertDataSubmit();
            this.$store.dispatch('actionAuthorAdd', { vue: this, params });

            return this.resetFromData()
        },

        clickCancel() {
            return this.$router.push({ path: '/authors' })
        },
    },
}
</script>
