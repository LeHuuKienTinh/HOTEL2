import { createRouter, createWebHistory } from "vue-router"; // cài vue-router: npm install vue-router@next --save
import checkadminlogin from "./checkloginadmin";

const routes = [
    {
        path: '/',
        component: () => import('../components/KhachHang/Trangchu.vue'),
    },

    ///ADMIN
    {
        path: '/admin/bao-cao',
        component: () => import('../components/Admin/BaoCao.vue'),
        meta: { layout: "admin" },
        beforeEnter: checkadminlogin
    },
    {
        path: '/admin/don-dat-phong',
        component: () => import('../components/Admin/DonDatPhong.vue'),
        meta: { layout: "admin" },
        beforeEnter: checkadminlogin
    },
    {
        path: '/admin/khuyen-mai',
        component: () => import('../components/Admin/KhuyenMai.vue'),
        meta: { layout: "admin" },
        beforeEnter: checkadminlogin
    },
    {
        path: '/admin/phong',
        component: () => import('../components/Admin/Phong.vue'),
        meta: { layout: "admin" },
        beforeEnter: checkadminlogin
    },
    {
        path: '/admin/dich-vu',
        component: () => import('../components/Admin/DichVu.vue'),
        meta: { layout: "admin" },
        beforeEnter: checkadminlogin
    },
    {
        path: '/admin/hoa-don',
        component: () => import('../components/Admin/HoaDon.vue'),
        meta: { layout: "admin" },
        beforeEnter: checkadminlogin
    },
    {
        path: '/admin/nhan-vien',
        component: () => import('../components/Admin/NhanVien.vue'),
        meta: { layout: "admin" },
        beforeEnter: checkadminlogin
    },
    {
        path: '/admin/khach-hang',
        component: () => import('../components/Admin/KhachHang.vue'),
        beforeEnter: checkadminlogin
    },
    {
        path: '/admin/dang-nhap',
        component: () => import('../components/Admin/dangnhap.vue'),
        meta: { layout: "auth" },
    },

    ///KHACH HANG
    {
        path: '/khach-hang/home-page',
        component: () => import('../components/KhachHang/homepage.vue'),
        meta: { layout: "client" },
    },
    {
        path: '/khach-hang/dang-nhap',
        component: () => import('../components/KhachHang/dangnhap.vue'),
        meta: { layout: "auth" },
    },
    {
        path: '/khach-hang/dang-ky',
        component: () => import('../components/KhachHang/dangki.vue'),
        meta: { layout: "auth" },
    },
    {
        path: '/khach-hang/cac-loai-phong',
        component: () => import('../components/KhachHang/cacloaiphong.vue'),
        meta: { layout: "client" },
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes: routes
})

export default router
