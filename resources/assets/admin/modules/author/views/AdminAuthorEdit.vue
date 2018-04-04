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
                                    folder="authors"
                                    :doSuccessUploader="successUploader"
                                    :token="getToken()"
                                    :doRemoveFile="removeFile"
                                    :currentImages="getCurrentImages()"
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
import { sameForm, sameData } from '../store/formData'

export default {
    name: 'AdminEventEdit',

    components: { cSwitch, UploadImage },

    async beforeCreate() {
        Helper.changeTitleAdminPage(this.$i18n.t('textManageProduct'))
        await this.$store.dispatch('actionAuthorShow', { vue: this, id: this.$route.params.id })
    },

    data() {
        return {
            images:[]
        }
    },

    computed: {
        formData() {
            let data = this.$store.state.storeAdminAuthor.edit.data
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
        getLanguages() {
            return this.$store.state.storeLanguage.languages;
        },

        getCurrentImages() {
            return [this.$store.state.storeAdminAuthor.edit.data.image_url]
        },

        getToken() {
            return JSON.parse(localStorage.getItem(STORAGE_AUTH)).token
        },

        handleChangeTitle(value, languageKey) {
            this.formData[languageKey].has = true;
            this.formData[languageKey].slug = slug(value || '')
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
                image_url: this.images.length ? this.images[0] : this.formData.sameData.image_url,
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

            this.$store.dispatch('actionAuthorEdit', { vue: this, params, id: this.$route.params.id });
        },

        clickCancel() {
            return this.$router.push({ path: '/authors' })
        },
    }
}
</script>
