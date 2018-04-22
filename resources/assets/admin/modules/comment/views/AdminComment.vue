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
            </b-row>
        </b-col>
        <b-col lg="12">
            <b-card>
                <b-table
                    class="mb-0 table-outline text-center"
                    head-variant="light"
                    :hover="true" :striped="false"
                    :bordered="true" :fixed="true"
                    :items="filterItems"
                    :fields="fields"
                    :current-page="currentPage"
                    :per-page="perPage"
                >
                    <template slot="course" slot-scope="data">
                        {{ data.item.commentable.title_vi }} <br/>
                        {{ data.item.commentable.title_en }}
                    </template>
                    <template slot="action" slot-scope="data">
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
                <nav>
                    <b-pagination
                        :total-rows="filterItems.length"
                        :per-page="perPage"
                        v-model="currentPage"
                        prev-text="< Pre"
                        next-text="Next >"
                        hide-goto-end-buttons
                        @input="changePage"
                    />
                </nav>
            </b-card>
        </b-col>
    </b-row>
</template>

<script>
    import Helper from 'Admin/library/Helper'

    export default {
        name: 'AdminComment',

        async beforeCreate() {
            Helper.changeTitleAdminPage(this.$i18n.t('textManageComment'))
            await this.$store.dispatch('actionFetchComment', { vue: this })
        },

        data() {
            return {
                fields: [
                    {key: 'id', sortable: true},
                    {key: 'name', label: this.$i18n.t('textName'), tdClass: 'text-left'},
                    {key: 'email', label: this.$i18n.t('textEmail'), tdClass: 'text-left'},
                    {key: 'content', label: this.$i18n.t('textContent'), tdClass: 'text-left'},
                    {key: 'course', label: this.$i18n.t('textCourse'), tdClass: 'text-left'},
                    {key: 'created_at', label: this.$i18n.t('textCreatedAt'), tdClass: 'text-left'},
                    {key: 'action', label: this.$i18n.t('textAction')},
                ],
                perPage: 10,
            }
        },

        methods: {
            async clickDeleteItem(id) {
                return id
                    && await this.$swal({
                        title: this.$i18n.t('textConfirmDelete'),
                        icon: 'warning',
                        buttons: true,
                        dangerMode: true,
                    })
                    && this.$store.dispatch('actionCommentDelete', { vue: this, id })
            },

            changePage(page) {
                this.$store.dispatch('actionCommentSetPage', { page })
            },

            handleChangeValueFilter(value) {
                return this.$store.dispatch('actionCommentSetFilter', { value: value.trim() })
            },
        },

        computed: {
            currentPage: {
                get() {
                    return this.$store.state.storeAdminComment.currentPage
                },
                set(value) {}
            },

            valueFilter() {
                return this.$store.state.storeAdminComment.valueFilter
            },

            filterItems() {
                let valueFilter = this.valueFilter.trim().toLowerCase();

                if (!valueFilter) {
                    return this.items
                }

                return this.items.filter(item => {
                    if (String(item.commentable.title_en).toLowerCase().indexOf(valueFilter) !== -1) return true
                    if (String(item.commentable.title_vi).toLowerCase().indexOf(valueFilter) !== -1) return true

                    for (let i in item) {
                        if (i === 'commentable') continue;
                        if (String(item[i]).toLowerCase().indexOf(valueFilter) !== -1) return true
                    }

                    return false
                })
            },

            items() {
                return this.$store.state.storeAdminComment.listFetch
            },
        },
    }
</script>
