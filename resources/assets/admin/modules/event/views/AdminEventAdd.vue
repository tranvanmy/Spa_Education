<template>
    <b-card>
        <b-row>
            <b-col sm="12">
                <b-form validated>
                    <b-row>
                        <b-col sm="12">
                            <b-form-fieldset :label="$t('textImage')"
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
                    <b-row>
                        <b-col sm="4">
                            <b-form-fieldset :label="$t('textAuthor')">
                                <b-form-select
                                    :plain="true"
                                    :options="authorOption()"
                                    v-model.number="formData.sameData.author_id"
                                />
                            </b-form-fieldset>
                        </b-col>
                        <b-col sm="3">
                            <b-form-fieldset :label="$t('textPointReviewManual')">
                                <b-form-input
                                    type="text" required
                                    :placeholder="$t('textPointReviewManual')"
                                    v-model="formData.sameData.point_review_manual"
                                />
                            </b-form-fieldset>
                        </b-col>
                        <b-col sm="3">
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
                    <b-row>
                        <b-col sm="6">
                            <b-form-fieldset :label="$t('textStartAt')">
                                <datetime
                                    type="datetime"
                                    v-model="formData.sameData.start_at"
                                    :format="{ year: 'numeric', month: 'numeric', day: 'numeric', hour: 'numeric', minute: '2-digit', second: 'numeric'}"
                                >
                                </datetime>
                            </b-form-fieldset>
                        </b-col>
                        <b-col sm="6">
                            <b-form-fieldset :label="$t('textStartAt')">
                                <datetime type="datetime" v-model="formData.sameData.end_at"></datetime>
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
                                            v-model="formData[language.key].detail"
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
                <b-col sm="4">{{ $t('textAddProduct') }}</b-col>
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
import moment from 'moment'

import cSwitch from 'Assets/components/Switch.vue'
import Helper from 'Admin/library/Helper'

import { STATUS_SHOW, STATUS_HIDDEN } from '../store'
import { STORAGE_AUTH } from 'Admin/modules/auth/store'

export default {
    name: 'AdminProductAdd',

    components: { cSwitch },

    beforeCreate() {
        Helper.changeTitleAdminPage(this.$i18n.t('textManageEvent'))
        this.$store.dispatch('actionFetchAuthors', { vue: this })
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

        handleChangeTitle(value, languageKey) {
            this.formData[languageKey].has = true;
            this.formData[languageKey].slug = slug(value)
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
                title: '',
                slug: '',
                description: '',
                detail: '',
                has: false,
                seo_keyword: '',
                seo_description: '',
                topic: '',
                location: '',
            }

            let formData = {
                sameData: {
                    'image_url': '',
                    'author_id': null,
                    'start_at': null,
                    'end_at': null,
                    'point_review_manual': 5,
                    'total_review_manual': 0,
                    'is_review_manual': true,
                }
            }

            for (let language of this.getLanguages()) {
                formData[language.key] = { ...sameForm }
            }

            return formData;
        },

        validateForm() {
            let params = this.formData.sameData
            return params.start_at && params.end_at
        },

        convertDataSubmit() {
            let params = {
                ...this.formData.sameData,
                start_at: moment(this.formData.sameData.start_at).format('YYYY-MM-DD HH:mm:ss'),
                end_at: moment(this.formData.sameData.end_at).format('YYYY-MM-DD HH:mm:ss'),
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
            this.$store.dispatch('actionEventAdd', { vue: this, params });

            return this.resetFromData()
        },

        clickCancel() {
            return this.$router.push({ path: '/events' })
        },
    },
}
</script>
