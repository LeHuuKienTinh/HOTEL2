<template>
    <div class="header-wrapper">
        <Top></Top>
        <Menu></Menu>
    </div>
    <div class="page-wrapper" style="margin: 0; padding: 0; padding-bottom: 40px; background-color: black;">
        <div class="">
            <router-view></router-view>
        </div>
    </div>
    <hr style="margin: 0; ">
    <div class="overlay toggle-icon"></div>
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <Footer></Footer>
</template>

<script>
import Footer from '../components/FooterCAFE.vue';
import Menu from '../components/MenuCAFE.vue';
import Top from '../components/TopClientt.vue'
import '../../assets/assets_rocker/js/bootstrap.bundle.min.js';
import '../../assets/assets_rocker/js/jquery.min.js';
import '../../assets/assets_rocker/plugins/simplebar/js/simplebar.min.js';
import '../../assets/assets_rocker/plugins/metismenu/js/metisMenu.min.js';
import '../../assets/assets_rocker/plugins/perfect-scrollbar/js/perfect-scrollbar.js';
import '../../assets/assets_rocker/js/index.js';
import '../../assets/assets_rocker/js/app.js';
export default {
    name: 'app',
    components: {
        Footer,
        Menu,
        Top,
    }
}
</script>
<style>
@import '../../assets/assets_rocker/plugins/simplebar/css/simplebar.css';
@import '../../assets/assets_rocker/plugins/perfect-scrollbar/css/perfect-scrollbar.css';
@import '../../assets/assets_rocker/css/bootstrap.min.css';
@import '../../assets/assets_rocker/css/bootstrap-extended.css';
@import '../../assets/assets_rocker/css/app.css';
@import '../../assets/assets_rocker/css/icons.css';
@import '../../assets/assets_rocker/css/dark-theme.css';
@import '../../assets/assets_rocker/css/semi-dark.css';
@import '../../assets/assets_rocker/css/header-colors.css';
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap');
@import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css");
</style>
