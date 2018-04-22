<template>
   <b-card>
       <b-row>
           <b-col sm="12">
               <b-form validated>
                   <b-row>
                        <b-col sm="12">
                            <b-form-fieldset :label="$t('textImage')"
                            >
                                <UploadImage
                                    folder="banners"
                                    :doSuccessUploader="successUploader"
                                    :token="getToken()"
                                    :doRemoveFile="removeFile"
                                    :currentImages="getCurrentImages()"
                                />
                           </b-form-fieldset>
                        </b-col>
                   </b-row>
                   <b-row>
                       <b-col sm="12">
                           <b-form-fieldset :label="$t('textPosition')">
                               <b-form-select
                                   :plain="true" required
                                   :options="getPositionOptions()"
                                   v-model="formData.sameData.position"
                               />
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
                                   <b-form-fieldset :label="$t('textTitle')">
                                       <textarea
                                           class="form-control"
                                           :placeholder="$t('textTitle')"
                                           v-model="formData[language.key].title"
                                           rows="3"
                                       />
                                   </b-form-fieldset>
                               </b-col>
                           </b-row>
                           <b-row>
                               <b-col sm="12">
                                   <b-form-fieldset :label="$t('textLink')">
                                       <b-form-input
                                           type="text"
                                           v-model="formData[language.key].link"
                                           :placeholder="$t('textLink')"
                                       />
                                   </b-form-fieldset>
                               </b-col>
                           </b-row>
                           <b-row>
                               <b-col sm="12">
                                   <b-form-fieldset :label="$t('textDecription')">
                                       <textarea
                                           class="form-control"
                                           :placeholder="$t('textDecription')"
                                           v-model="formData[language.key].description"
                                           rows="4"
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
                <b-col sm="4">{{ $t('textEdit') }}</b-col>
                <b-col sm="8" class="text-right">
                    <b-button type="submit" size="xs" variant="primary" @click="clickSubmitEdit">
                        <i class="fa fa-dot-circle-o"></i>
                        {{ $t('textSave') }}
                    </b-button>
                    <b-button type="reset" size="xs" variant="danger" @click="clickCancel">
                        <i class="fa fa-ban"></i>
                        {{ $t('textCancel') }}
                    </b-button>
                </b-col>
            </b-row>
        </div>
        <div slot="footer" class="w-100 text-center">
            <b-button type="submit" size="xs" variant="primary" @click="clickSubmitEdit">
                <i class="fa fa-dot-circle-o"></i>
                {{ $t('textSave') }}
            </b-button>
            <b-button type="reset" size="xs" variant="danger" @click="clickCancel">
                <i class="fa fa-ban"></i>
                {{ $t('textCancel') }}
            </b-button>
        </div>
    </b-card>
</template>

<script>
import moment from 'moment'
import cSwitch from 'Assets/components/Switch.vue'
import UploadImage from 'Assets/components/UploadImage.vue'
import Helper from 'Admin/library/Helper'

import { STORAGE_AUTH } from 'Admin/modules/auth/store'
import { sameForm, sameData, positionOptions } from '../store/formData'

export default {
    name: 'AdminBannerEdit',

    components: { cSwitch, UploadImage },

    async beforeCreate() {
        Helper.changeTitleAdminPage(this.$i18n.t('textManageBanner'))
        await this.$store.dispatch('actionBannerShow', { vue: this, id: this.$route.params.id })
    },

    data() {
        return {
            images:[]
        }
    },

    computed: {
        formData() {
            let data = this.$store.state.storeAdminBanner.edit.data
            let formData = { sameData: {} }

            for (let key in sameData) {
                formData.sameData[key] = data[key]
            }
            for (let language of this.getLanguages()) {
                formData[language.key] = {}
                for(let key in sameForm) {
                    formData[language.key][key] = data[`${key}_${language.key}`]
                }
            }

            return { ...formData }
        },
    },

    methods: {
        getPositionOptions() {
            return positionOptions
        },

        getLanguages() {
            return this.$store.state.storeLanguage.languages;
        },

        getCurrentImages() {
            return [this.$store.state.storeAdminBanner.edit.data.image]
        },

        getToken() {
            return JSON.parse(localStorage.getItem(STORAGE_AUTH)).token
        },

        successUploader(path) {
            return this.images.push(path)
        },

        removeFile(index) {
            return this.images = this.images.filter((image, key) => key !== index)
        },

        convertDataSubmit() {
            let params = {
                ...this.formData.sameData,
                image: this.images.length ? this.images[0] : this.formData.sameData.image,
            }

            for (let language of this.getLanguages()) {
                let form = this.formData[language.key];
                for(let key in form) {
                    params[`${key}_${language.key}`] = form[key]
                }
            }
            return params;
        },

        clickSubmitEdit() {
            let params = this.convertDataSubmit();

            this.$store.dispatch('actionBannerEdit', { vue: this, params, id: this.$route.params.id });
        },

        clickCancel() {
            return this.$router.push({ path: '/banners' })
        },
    }
}
</script>
