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
                                    folder="products"
                                    :doSuccessUploader="successUploader"
                                    :token="getToken()"
                                    :doRemoveFile="removeFile"
                                />
                            </b-form-fieldset>
                        </b-col>
                    </b-row>
                    <b-row>
                        <b-col sm="6">
                            <b-form-fieldset :label="$t('textCategory')">
                                <b-form-select
                                    :plain="true" required
                                    :options="categoryOptions()"
                                    v-model="formData.sameData.category_id"
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
                                            :placeholder="$t('textSlug')"
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
import Editor from '@tinymce/tinymce-vue'
import cSwitch from 'Assets/components/Switch.vue'
import UploadImage from 'Assets/components/UploadImage.vue'

import Helper from 'Admin/library/Helper'

import { STATUS_SHOW, STATUS_HIDDEN } from '../store'
import { STORAGE_AUTH } from 'Admin/modules/auth/store'
import { sameForm, sameData, CATEGORY_TYPE } from '../store/formData'

export default {
    name: 'AdminProductAdd',

    components: { cSwitch, UploadImage, Editor },

    beforeCreate() {
        Helper.changeTitleAdminPage(this.$i18n.t('textManageProduct'))
        this.$store.dispatch('actionFetchCategory', { vue: this })
    },

    data() {
        return {
            formData: { ...this.resetFromData() },
            images: [],
        }
    },

    methods: {
        getLanguages(){
            return this.$store.state.storeLanguage.languages
        },

        getToken() {
            return JSON.parse(localStorage.getItem(STORAGE_AUTH)).token
        },

        categoryOptions() {
            let categories = this.$store.state.storeAdminCategory.listFetch.filter(category => category.type === CATEGORY_TYPE)
            let options = []
            for (let i = 0; i < categories.length; i++) {
                options.push({
                    value: categories[i].id,
                    text: `${categories[i].title_vi} / ${categories[i].title_en}` ,
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

        handleChangeTitle(value, languageKey) {
            this.formData[languageKey].has = true;
            this.formData[languageKey].slug = slug(value || '')
        },

        ortherOptions() {
            return {
                ...configTinyMCE,
                height: 250,
            }
        },

        validateForm() {
            return  !!this.formData.sameData.category_id
        },

        resetFromData() {
            let formData = { sameData: { ...sameData } }

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
            if (!this.validateForm()) {
                return this.$toaster.error(this.$i18n.t('textNotFillEnough'))
            }

            let params = this.convertDataSubmit();
            this.$store.dispatch('actionProductAdd', { vue: this, params });

            return this.formData = this.resetFromData()
        },

        clickCancel() {
            return this.$router.push({ path: '/products' })
        },
    },
}
</script>
