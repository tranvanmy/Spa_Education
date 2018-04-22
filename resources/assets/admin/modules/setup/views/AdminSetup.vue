<template>
    <b-card>
        <b-row>
            <b-col sm="12">
                <b-form validated>
                   <b-row>
                       <b-col sm="12">
                            <b-form-fieldset :label="$t('textLogo')"
                            >
                                <UploadImage
                                    folder="logos"
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
                            <b-form-fieldset label="Phone">
                                <b-form-input
                                   type="text"
                                   placeholder="Phone"
                                   v-model="formData.sameData.phone"
                                />
                            </b-form-fieldset>
                       </b-col>
                   </b-row>
                   <b-row>
                       <b-col sm="4">
                            <b-form-fieldset label="Facebook">
                                <b-form-input
                                   type="text"
                                   placeholder="Facebook"
                                   v-model="formData.sameData.facebook"
                                />
                            </b-form-fieldset>
                       </b-col>
                       <b-col sm="4">
                            <b-form-fieldset label="Google">
                                <b-form-input
                                   type="text"
                                   placeholder="Google"
                                   v-model="formData.sameData.google"
                                />
                            </b-form-fieldset>
                       </b-col>
                       <b-col sm="4">
                            <b-form-fieldset label="Youtube">
                                <b-form-input
                                   type="text"
                                   placeholder="Youtube"
                                   v-model="formData.sameData.youtube"
                                />
                            </b-form-fieldset>
                       </b-col>
                   </b-row>
                   <b-row>
                       <b-col sm="4">
                            <b-form-fieldset label="Vimeo">
                                <b-form-input
                                   type="text"
                                   placeholder="Vimeo"
                                   v-model="formData.sameData.vimeo"
                                />
                            </b-form-fieldset>
                       </b-col>
                       <b-col sm="4">
                            <b-form-fieldset label="Twitter">
                                <b-form-input
                                   type="text"
                                   placeholder="Twitter"
                                   v-model="formData.sameData.twitter"
                                />
                            </b-form-fieldset>
                       </b-col>
                       <b-col sm="4">
                            <b-form-fieldset label="Linked In">
                                <b-form-input
                                   type="text"
                                   placeholder="Linked In"
                                   v-model="formData.sameData.linked_in"
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
                                       <b-form-input
                                           type="text"
                                           v-model="formData[language.key].title"
                                           :placeholder="$t('textTitle')"
                                       />
                                   </b-form-fieldset>
                               </b-col>
                           </b-row>
                           <b-row>
                               <b-col sm="12">
                                   <b-form-fieldset label="About us Descrition">
                                        <textarea
                                            class="form-control"
                                            placeholder="About us Descrition"
                                            v-model="formData[language.key].about_us"
                                            rows="4"
                                        />
                                   </b-form-fieldset>
                               </b-col>
                           </b-row>
                            <b-row>
                               <b-col sm="12">
                                   <b-form-fieldset label="Id youtube About us">
                                        <b-form-input
                                           type="text"
                                           placeholder="Id youtube About us"
                                           v-model="formData[language.key].about_us_youtube"
                                        />
                                        <span>Ex:
                                            <strong>https://www.youtube.com/watch?v=sP5Z1zA4guY</strong>,
                                            Youtube ID: <strong>sP5Z1zA4guY</strong>
                                        </span>
                                   </b-form-fieldset>
                               </b-col>
                            </b-row>
                            <b-row>
                                <b-col sm="12">
                                    <b-form-fieldset label="Instructor Descrition">
                                         <textarea
                                             class="form-control"
                                             placeholder="Instructor Descrition"
                                             v-model="formData[language.key].instructor_description"
                                             rows="4"
                                         />
                                    </b-form-fieldset>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col sm="12">
                                    <b-form-fieldset label="R&D Descrition">
                                         <textarea
                                             class="form-control"
                                             placeholder="R&D Descrition"
                                             v-model="formData[language.key].rd_description"
                                             rows="4"
                                         />
                                    </b-form-fieldset>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col sm="12">
                                    <b-form-fieldset label="Partner Description">
                                         <textarea
                                             class="form-control"
                                             placeholder="Partner Description"
                                             v-model="formData[language.key].partner"
                                             rows="4"
                                         />
                                    </b-form-fieldset>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col sm="12">
                                    <b-form-fieldset label="Event Description">
                                         <textarea
                                             class="form-control"
                                             placeholder="Event Description"
                                             v-model="formData[language.key].event"
                                             rows="4"
                                         />
                                    </b-form-fieldset>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col sm="12">
                                    <b-form-fieldset label="Data Scientists Description">
                                         <textarea
                                             class="form-control"
                                             placeholder="Data Scientists Description"
                                             v-model="formData[language.key].data_scientist"
                                             rows="4"
                                         />
                                    </b-form-fieldset>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col sm="12">
                                    <b-form-fieldset label="Join us Description">
                                         <textarea
                                             class="form-control"
                                             placeholder="Join us Description"
                                             v-model="formData[language.key].join_us"
                                             rows="4"
                                         />
                                    </b-form-fieldset>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col sm="12">
                                    <b-form-fieldset label="Content Footer">
                                         <textarea
                                             class="form-control"
                                             placeholder="Content Footer"
                                             v-model="formData[language.key].footer"
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
                </b-col>
            </b-row>
        </div>
        <div slot="footer" class="w-100 text-center">
            <b-button type="submit" size="xs" variant="primary" @click="clickSubmitEdit">
                <i class="fa fa-dot-circle-o"></i>
                {{ $t('textSave') }}
            </b-button>
        </div>
    </b-card>
</template>

<script>
import cSwitch from 'Assets/components/Switch.vue'
import UploadImage from 'Assets/components/UploadImage.vue'
import Helper from 'Admin/library/Helper'

import { STORAGE_AUTH } from 'Admin/modules/auth/store'
import { sameForm, sameData } from '../store/formData'

export default {
    name: 'AdminSetup',

    components: { cSwitch, UploadImage },

    async beforeCreate() {
        Helper.changeTitleAdminPage(this.$i18n.t('textSetups'))
        await this.$store.dispatch('actionSetupShow', { vue: this })
    },

    data() {
        return {
            images:[]
        }
    },

    computed: {
        formData() {
            let data = this.$store.state.storeAdminSetup.edit.data
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
            return [this.$store.state.storeAdminSetup.edit.data.logo]
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
                logo: this.images.length ? this.images[0] : this.formData.sameData.logo,
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

            return this.$store.dispatch('actionSetupEdit', { vue: this, params });
        },
    }
}
</script>
