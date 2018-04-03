<template>
    <vue-transmit
        tag="section"
        v-bind="getOptions()"
        @success="successUploader"
        @error="errorUploader"
        upload-area-classes="bg-faded"
        ref="uploader"
        style="border: 1px solid #E5E5E5"
    >
        <b-row>
            <b-col sm="2"
                style="border-radius: 1px; boder: 1px solid #DCDCDC; padding-top:5px"
                class="text-left"
                v-for="image in currentImages"
                :key="image"
            >
                <b-img thumbnail
                    :src="`/${image}`"
                    style="max-width: 150px; margin-left: 10px; margin-bottom: 15px"
                    v-if="image"
                />
            </b-col>
        </b-row>
        <b-row>
            <b-col sm="12"
                style="border-radius: 1px; boder: 1px solid #DCDCDC; padding-top:5px;margin-bottom: 5px"
                class="text-center"
            >
                <button class="btn btn-primary"
                    @click="triggerBrowse"
                    style="margin-left: 20px"
                >{{ $t('textUploadNewFile') }}</button>
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
</template>

<script>
import Helper from 'Admin/library/Helper'

import { STORAGE_AUTH } from 'Admin/modules/auth/store'

export default {
    props: {
        uploadOptions: {
            type: Object,
            default() {
                return {}
            }
        },
        doSuccessUploader: {
            type: Function,
            required: true
        },
        doRemoveFile: {
            type: Function,
            required: true
        },
        token: {
            type: Object,
            required: true
        },
        currentImages: {
            type: Array,
            default() {
                return []
            }
        },
    },

    data() {
        let token = this.token
        let today = new Date()
        let folder = this.folder || 'default'

        return {
            optionDefault: {
                acceptedFileTypes: ['image/*'],
                url: '/api/v0/upload-image',
                clickable: false,
                params: {
                    folder: `${folder}-${today.getFullYear()}
                        -${today.getMonth() + 1}
                        -${today.getDate()}
                    `,
                },
                maxFiles: 1,
                paramName: 'image',
                headers: {
                    Authorization: `${token.token_type} ${token.access_token}`
                }
            },
            currentImage: '',
        }
    },

    methods: {
        getOptions(){
                return {
                    ...this.optionDefault,
                    ...this.uploadOptions,
                }
        },
        triggerBrowse(event) {
            event.preventDefault()

            if (this.$refs.uploader.files.length >= this.getOptions().maxFiles) {
                return this.$toaster.error(this.$i18n.t('textNotAddFile'));
            }

            return this.$refs.uploader.triggerBrowseFiles()
        },

        async removeUploadFile(index, event) {
            event.preventDefault();
            let files = this.$refs.uploader.files

            let confirm = await this.$swal({
                title: this.$i18n.t('textConfirmDelete'),
                icon: 'warning',
                buttons: true,
                dangerMode: true,
            })

            if(confirm) {
                this.$refs.uploader.files = files.filter((f, i) => i !== index)
                this.doRemoveFile(index)
            }
        },

        successUploader(response) {
            let serveRespone = JSON.parse(response.xhr.response)
            this.currentImage = serveRespone.path

            return this.doSuccessUploader(serveRespone.path);
        },

        errorUploader(error) {
            let files = this.$refs.uploader.files
            let xhr = { response: JSON.parse(error.xhr.response) }

            this.$toaster.error(Helper.getFirstError(xhr, this.$i18n.t('textDefaultErrorRequest')))

            return this.$refs.uploader.files.length = files.length - 1;
        },
    }
}
</script>
