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
                           <b-form-fieldset :label="$t('textInstructor')">
                               <b-form-select
                                   :plain="true" required
                                   :options="instructorOption()"
                                   v-model="formData.sameData.instructor_id"
                               />
                           </b-form-fieldset>
                       </b-col>
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
                               <b-col sm="12">
                                   <b-form-fieldset :label="$t('textLevel')">
                                       <b-form-input
                                           type="text"
                                           v-model="formData[language.key].level"
                                           :placeholder="$t('textLevel')"
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
                                        <Editor
                                            v-model="formData[language.key].detail"
                                            :init="ortherOptions()"
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
import Editor from '@tinymce/tinymce-vue'
import cSwitch from 'Assets/components/Switch.vue'
import UploadImage from 'Assets/components/UploadImage.vue'
import Helper from 'Admin/library/Helper'

import { STORAGE_AUTH } from 'Admin/modules/auth/store'
import { sameForm, sameData } from '../store/formData'

export default {
    name: 'AdminInstructorEdit',

    components: { cSwitch, UploadImage, Editor },

    async beforeCreate() {
        Helper.changeTitleAdminPage(this.$i18n.t('textManageCourse'))
        await this.$store.dispatch('actionFetchInstructors', { vue: this })
        await this.$store.dispatch('actionCourseShow', { vue: this, id: this.$route.params.id })
    },

    data() {
        return {
            images:[]
        }
    },

    computed: {
        formData() {
            let data = this.$store.state.storeAdminCourse.edit.data
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
                formData[language.key].detail = data[`detail_${language.key}`] ? data[`detail_${language.key}`] : ''
            }

            return { ...formData }
        },
    },

    methods: {
        getLanguages() {
            return this.$store.state.storeLanguage.languages;
        },

        getCurrentImages() {
            return [this.$store.state.storeAdminCourse.edit.data.image_url]
        },

        getToken() {
            return JSON.parse(localStorage.getItem(STORAGE_AUTH)).token
        },

        instructorOption() {
            let instructors = this.$store.state.storeAdminInstructor.listFetch
            let options = []
            for (let i = 0; i < instructors.length; i++) {
                options.push({
                    value: instructors[i].id,
                    text: `${instructors[i].name_vi} / ${instructors[i].name_en}` ,
                })
            }
            return options
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

        ortherOptions() {
            return {
                ...configTinyMCE,
                height: 250,
            }
        },

        validateForm() {
            return  !!this.formData.sameData.instructor_id
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
            if (!this.validateForm()) {
                return this.$toaster.error(this.$i18n.t('textNotFillEnough'))
            }

            let params = this.convertDataSubmit();

            this.$store.dispatch('actionCourseEdit', { vue: this, params, id: this.$route.params.id });
        },

        clickCancel() {
            return this.$router.push({ path: '/courses' })
        },
    }
}
</script>
