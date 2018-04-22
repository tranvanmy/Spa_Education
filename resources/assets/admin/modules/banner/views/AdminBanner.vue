<template>
    <b-row>
        <b-col sm="12">
            <b-row>
                <b-col lg="3"></b-col>
                <b-col lg="6" class="text-center" style="padding-bottom: 20px">
                    <b-form-input
                        type="text" :value="valueFilter"
                        :placeholder="$t('textInputFilter')"
                        @input="handleChangeValueFilter"
                    />
                </b-col>
                <b-col lg="3">
                    <b-button-group class="pull-right">
                        <b-button variant="success" @click="clickAddNewItem">
                            <i class="icon-plus"></i>
                            {{ $t('textAddNew') }}
                        </b-button>
                    </b-button-group>
                </b-col>
            </b-row>
        </b-col>
        <b-col lg="12">
            <b-tabs pills card>
                <b-tab
                    :title="typeOption.text"
                    v-for="typeOption in getPositionOptions()"
                    :key="typeOption.value"
                >
                    <b-card>
                        <b-table
                            class="mb-0 table-outline text-center"
                            head-variant="light"
                            :hover="true" :striped="false"
                            :bordered="true" :fixed="true"
                            :items="getFilterItem(typeOption.value)"
                            :fields="fields"
                        >
                            <template slot="title" slot-scope="data">
                                {{ data.item.title_vi }} <br/>
                                {{ data.item.title_en }}
                            </template>
                            <template slot="link" slot-scope="data">
                                {{ data.item.link_vi }} <br/>
                                {{ data.item.link_en }}
                            </template>
                            <template slot="image" slot-scope="data">
                                <b-img thumbnail
                                    :src="data.item.image"
                                    style="width: 150px"
                                    v-if="data.item.image"
                                />
                            </template>
                            <template slot="action" slot-scope="data">
                                <b-button
                                    type="submit" size="sm"
                                    variant="primary"
                                    @click="clickEditItem(data.item)"
                                >
                                    <i class="icon-pencil"></i>
                                    {{ $t('textEdit') }}
                                </b-button>
                                <b-button
                                    type="reset" size="sm"
                                    variant="danger"
                                    @click="clickDeleteItem(data.item.id)"
                                >
                                    <i class="icon-trash"></i>
                                    {{ $t('textDelete') }}
                                </b-button>
                            </template>
                        </b-table>
                    </b-card>
                </b-tab>
            </b-tabs>
        </b-col>
    </b-row>
</template>

<script>
    import { positionOptions } from '../store/formData'
    import Helper from 'Admin/library/Helper'

    export default {
        name: 'AdminBanner',

        beforeCreate() {
            Helper.changeTitleAdminPage(this.$i18n.t('textManageBanner'))
            this.$store.dispatch('actionFetchBanners', { vue: this })
        },

        data() {
            return {
                fields: [
                    {key: 'id', sortable: true},
                    {key: 'title', label: this.$i18n.t('textTitle'), tdClass: 'text-left'},
                    {key: 'image', label: this.$i18n.t('textImage')},
                    {key: 'link', label: this.$i18n.t('textLink'), tdClass: 'text-left'},
                    {key: 'action', label: this.$i18n.t('textAction')},
                ],
            }
        },

        methods: {
            getPositionOptions(){
                return positionOptions
            },

            getFilterItem(position){
                return this.items.filter(item => item.position == position)
            },

            clickAddNewItem() {
                return this.$router.push({ path: '/banners/add' })
            },

            clickEditItem(data) {
                return this.$router.push({ path: `/banners/edit/${data.id}` })
            },

            async clickDeleteItem(id) {
                return id
                    && await this.$swal({
                        title: this.$i18n.t('textConfirmDelete'),
                        icon: 'warning',
                        buttons: true,
                        dangerMode: true,
                    })
                    && this.$store.dispatch('actionBannerDelete', { vue: this, id })
            },

            handleChangeValueFilter(value) {
                return this.$store.dispatch('actionBannerSetFilter', { value: value.trim() })
            },
        },

        computed: {
            currentPage: {
                get() {
                    return this.$store.state.storeAdminBanner.currentPage
                },
                set(value) {}
            },

            valueFilter() {
                return this.$store.state.storeAdminBanner.valueFilter
            },

            filterItems() {
                let valueFilter = this.valueFilter.trim().toLowerCase();

                if (!valueFilter) {
                    return this.items
                }

                return this.items.filter(item => {
                    for (let i in item) {
                        if (String(item[i]).toLowerCase().indexOf(valueFilter) !== -1) return true
                    }

                    return false
                })
            },

            items() {
                return this.$store.state.storeAdminBanner.listFetch
            },
        },
    }
</script>
