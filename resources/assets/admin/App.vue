<template>
    <div>
        <div class="splash-screen" v-show="loading.show">
            <div class="splash-overlay" v-show="loading.show"></div>
            <div class="splash-spinner"></div>
        </div>
        
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    name: 'app',

    computed: {
        loading() {
            return this.$store.state.storeLoading.loading
        }
    }
}
</script>

<style lang="scss">
    // Fonts
    @import url("https://fonts.googleapis.com/css?family=Raleway:300,400,600");

    /* Import Font Awesome Icons Set */
    /* $fa-font-path: '~font-awesome/fonts/'; */
    @import '~font-awesome/css/font-awesome.min.css';

    /* Import Simple Line Icons Set */
    /* $simple-line-font-path: '~simple-line-icons/fonts/'; */
    @import '~simple-line-icons/css/simple-line-icons.css';

    /* Import Bootstrap Vue Styles */
    @import '~bootstrap-vue/dist/bootstrap-vue.css';

    // Import Main styles for this application
    @import './library/scss/style';
</style>
