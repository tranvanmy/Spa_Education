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
                                    folder="event"
                                    :doSuccessUploader="successUploader"
                                    :token="getToken()"
                                    :doRemoveFile="removeFile"
                                    :currentImages="getCurrentImages()"
                                />
                           </b-form-fieldset>
                       </b-col>
                   </b-row>
                   <b-row>
                       <b-col sm="6">
                           <b-form-fieldset :label="$t('textAuthor')">
                               <b-form-select
                                   :plain="true" required
                                   :options="authorOption()"
                                   v-model.number="formData.sameData.author_id"
                               />
                           </b-form-fieldset>
                       </b-col>
                       <b-col sm="3">
                           <b-form-fieldset :label="$t('textStartAt')">
                                <vue-datepicker-local
                                   v-model="formData.sameData.start_at"
                                   format="YYYY-MM-DD HH:mm:ss"
                                   :local="getConfigDateTimeLocal()"
                                   input-class="form-control"
                                   show-buttons
                                   style="width: 100%"
                                />
                           </b-form-fieldset>
                       </b-col>
                       <b-col sm="3">
                           <b-form-fieldset :label="$t('textEndAt')">
                                <vue-datepicker-local
                                   v-model="formData.sameData.end_at"
                                   format="YYYY-MM-DD HH:mm:ss"
                                   :local="getConfigDateTimeLocal()"
                                   input-class="form-control"
                                   show-buttons
                                   style="width: 100%"
                                />
                           </b-form-fieldset>
                       </b-col>
                   </b-row>
                   <b-row>
                       <b-col sm="2">
                            <b-form-fieldset :label="$t('textPointReviewManual')">
                                <b-form-input
                                   type="text" required
                                   :placeholder="$t('textPointReviewManual')"
                                   v-model="formData.sameData.point_review_manual"
                                />
                            </b-form-fieldset>
                       </b-col>
                       <b-col sm="2">
                            <b-form-fieldset :label="$t('textTotalReviewManual')">
                                <b-form-input
                                   type="text" required
                                   :placeholder="$t('textTotalReviewManual')"
                                   v-model="formData.sameData.total_review_manual"
                                />
                            </b-form-fieldset>
                       </b-col>
                       <b-col sm="2">
                           <b-form-fieldset :label="$t('textIsShowManual')" class="text-center">
                               <c-switch
                                   type="text" variant="primary-outline-alt"
                                   on="On" off="Off"
                                   :pill="true" :checked="true"
                                   v-model="formData.sameData.is_review_manual"
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
                               <b-col sm="10">
                                   <b-form-fieldset :label="$t('textTitle')">
                                       <b-form-input
                                           type="text"
                                           v-model="formData[language.key].title"
                                           :placeholder="$t('textTitle')"
                                           @input="handleChangeTitle($event, language.key)"
                                       />
                                   </b-form-fieldset>
                               </b-col>
                               <b-col sm="2">
                                   <b-form-fieldset :label="$t('textHasIsset')" class="text-center">
                                       <c-switch
                                               type="text" variant="primary-outline-alt"
                                               on="On" off="Off"
                                               :pill="true" :checked="true"
                                               v-model="formData[language.key].has"
                                       />
                                   </b-form-fieldset>
                               </b-col>
                           </b-row>
                           <b-row>
                               <b-col sm="12">
                                   <b-form-fieldset :label="$t('textSlug')">
                                        <b-form-input
                                            type="text"
                                            v-model="formData[language.key].slug"
                                            :value="formData[language.key].slug"
                                            :placeholder="$t('textSlug')"
                                        />
                                   </b-form-fieldset>
                               </b-col>
                           </b-row>
                           <b-row>
                               <b-col sm="6">
                                   <b-form-fieldset :label="$t('textTopic')">
                                       <b-form-input
                                           type="text"
                                           v-model="formData[language.key].topic"
                                           :placeholder="$t('textTopic')"
                                       />
                                   </b-form-fieldset>
                               </b-col>
                               <b-col sm="6">
                                   <b-form-fieldset :label="$t('textLocation')">
                                       <b-form-input
                                           type="text"
                                           v-model="formData[language.key].location"
                                           :placeholder="$t('textLocation')"
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

                           <b-row>
                               <b-col sm="6">
                                   <b-form-fieldset :label="$t('textSeoKeyword')">
                                       <b-form-input
                                               type="text"
                                               :placeholder="$t('textSeoKeyword')"
                                               v-model="formData[language.key].seo_keyword"
                                       />
                                   </b-form-fieldset>
                               </b-col>
                               <b-col sm="6">
                                   <b-form-fieldset :label="$t('textSeoDescription')">
                                       <b-form-input
                                               type="text"
                                               :placeholder="$t('textSeoDescription')"
                                               v-model="formData[language.key].seo_description"
                                       />
                                   </b-form-fieldset>
                               </b-col>
                           </b-row>
                           <b-row>
                               <b-col sm="12">
                                   <b-form-fieldset :label="$t('textDetail')">
                                       <tinymce
                                               :id="`event_add_detail_${language.key}`"
                                               v-model="formData[language.key].detail || ''"
                                               :other_options="ortherOptions()"
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
                <b-col sm="4">{{ $t('textEditProduct') }}</b-col>
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
import VueDatepickerLocal from 'vue-datepicker-local'
import Helper from 'Admin/library/Helper'

import { STORAGE_AUTH } from 'Admin/modules/auth/store'
import { sameForm, sameData } from '../store/formData'

export default {
    name: 'AdminEventEdit',

    components: { cSwitch, UploadImage, VueDatepickerLocal },

    async beforeCreate() {
        Helper.changeTitleAdminPage(this.$i18n.t('textManageProduct'))
        await this.$store.dispatch('actionFetchAuthors', { vue: this })
        await this.$store.dispatch('actionEventShow', { vue: this, id: this.$route.params.id })
    },

    data() {
        return {
            images:[]
        }
    },

    computed: {
        formData() {
            let data = this.$store.state.storeAdminEvent.edit.data
            let formData = { sameData: {} }

            for (let key in sameData) {
                formData.sameData[key] = data[key]
            }
            formData.sameData['is_review_manual'] = formData.sameData['is_review_manual'] ? true : false

            for (let language of this.getLanguages()) {
                formData[language.key] = {}
                for(let key in sameForm) {
                    formData[language.key][key] = data[`${key}_${language.key}`]
                }
                formData[language.key].has = data[`has_${language.key}`] ? true : false
            }

            return { ...formData }
        },
    },

    methods: {
        getLanguages() {
            return this.$store.state.storeLanguage.languages;
        },

        getCurrentImages() {
            return [this.$store.state.storeAdminEvent.edit.data.image_url]
        },

        getToken() {
            return JSON.parse(localStorage.getItem(STORAGE_AUTH)).token
        },

        getConfigDateTimeLocal()
        {
            return configDateTimeLocal
        },

        handleChangeTitle(value, languageKey) {
            this.formData[languageKey].has = true;
            this.formData[languageKey].slug = slug(value || '')
        },

        authorOption() {
            let authors = this.$store.state.storeAdminAuthor.listFetch
            let options = []
            for (let i = 0; i < authors.length; i++) {
                options.push({
                    value: authors[i].id,
                    text: `${authors[i].name_vi} / ${authors[i].name_en}` ,
                })
            }

            return options
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

        validateForm() {
            let params = this.formData.sameData

            return  params.author_id
                && params.start_at && params.end_at
        },

        convertDataSubmit() {
            let params = {
                ...this.formData.sameData,
                start_at: moment(this.formData.sameData.start_at).format('YYYY-MM-DD HH:mm:ss'),
                end_at: moment(this.formData.sameData.end_at).format('YYYY-MM-DD HH:mm:ss'),
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
            if (!this.validateForm()) {
                return this.$toaster.error(this.$i18n.t('textNotFillEnough'))
            }

            let params = this.convertDataSubmit();

            this.$store.dispatch('actionEventEdit', { vue: this, params, id: this.$route.params.id });
        },

        clickCancel() {
            return this.$router.push({ path: '/events' })
        },
    }
}
</script>
