<template>
    <b-card>
        <b-row>
            <b-col sm="12">
                <b-form validated>
                    <b-row>
                        <b-col sm="12">
                            <UploadImage
                                folder="authors"
                                :doSuccessUploader="successUploader"
                                :token="getToken()"
                                :doRemoveFile="removeFile"
                            />
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
import UploadImage from 'Assets/components/UploadImage.vue'
import Helper from 'Admin/library/Helper'

import { STATUS_SHOW, STATUS_HIDDEN } from '../store'
import { STORAGE_AUTH } from 'Admin/modules/auth/store'
import { sameForm, sameData } from '../store/formData'

export default {
    name: 'AdminAuthorAdd',

    components: { cSwitch, UploadImage },

    beforeCreate() {
        Helper.changeTitleAdminPage(this.$i18n.t('textManageAuthor'))
    },

    data() {
        return {
            formData: this.resetFromData(),
            images: []
        }
    },

    methods: {
        getToken() {
            return JSON.parse(localStorage.getItem(STORAGE_AUTH)).token
        },

        getLanguages(){
            return this.$store.state.storeLanguage.languages
        },

        successUploader(path) {
            return this.images.push(path)
        },

        removeFile(index) {
            return this.images = this.images.filter((image, key) => key !== index)
        },

        ortherOptions() {
            return {
                ...configTinyMCE,
                height: 250,
            }
        },

        resetFromData() {
            let formData = {
                sameData: { ...sameData }
            }

            for (let language of this.getLanguages()) {
                formData[language.key] = { ...sameForm }
            }

            return { ...formData }
        },

        convertDataSubmit() {
            let params = {
                ...this.formData.sameData,
                image_url: this.images.length ? this.images[0] : '',
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

            return this.formData = this.resetFromData()
        },

        clickCancel() {
            return this.$router.push({ path: '/authors' })
        },
    },
}
</script>
