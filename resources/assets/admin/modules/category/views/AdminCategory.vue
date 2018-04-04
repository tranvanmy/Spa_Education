.<template>
    <b-row>
        <b-col sm="12">
            <b-row>
                <b-col lg="12">
                    <b-button-group class="pull-right">
                        <b-button variant="success" @click="clickAddNewItem">
                            <i class="icon-plus"></i>
                            {{ $t('textAddCategory') }}
                        </b-button>
                    </b-button-group>
                </b-col>
            </b-row>
        </b-col>
        <b-col lg="12">
            <b-tabs pills card>
                <b-tab
                    :title="typeOption.text"
                    v-for="typeOption in getTypeOptions()"
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
    import Helper from 'Admin/library/Helper'
    import { typeOptions } from '../store/formData'

    export default {
        name: 'AdminCategory',

        beforeCreate() {
            Helper.changeTitleAdminPage(this.$i18n.t('textManageCategory'))
            this.$store.dispatch('actionFetchCategory', { vue: this })
        },

        data() {
            return {
                fields: [
                    {key: 'title', label: this.$i18n.t('textTitle'), tdClass: 'text-left'},
                    {key: 'action', label: this.$i18n.t('textAction')},
                ],
            }
        },

        methods: {
            getTypeOptions(){
                return typeOptions
            },

            getFilterItem(type){
                return this.items.filter(item => item.type == type)
            },

            clickAddNewItem() {
                return this.$router.push({ path: '/categories/add' })
            },

            clickEditItem(data) {
                return this.$router.push({ path: `/categories/edit/${data.id}` })
            },

            async clickDeleteItem(id) {
                return id
                    && await this.$swal({
                        title: this.$i18n.t('textConfirmDelete'),
                        icon: 'warning',
                        buttons: true,
                        dangerMode: true,
                    })
                    && this.$store.dispatch('actionCategoryDelete', { vue: this, id })
            },
        },

        computed: {
            items() {
                return this.$store.state.storeAdminCategory.listFetch
            },
        },
    }
</script>
