<template>
    <div class="row">
        <div class="col-4">
            <div class="card mt-2">
                <div class="card-header">
                    <h3>Dịch Vụ </h3>
                </div>
                <div class="card-body">
                    <label>Tên Dịch Vụ</label>
                    <input v-model="create.ten_dich_vu" class="form-control mb-2" type="text">
                    <label>Gía</label>
                    <input v-model="create.gia" class="form-control mb-2" type="text">
                    <label>Ngày Tạo</label>
                    <input v-model="create.ngay_tao" class="form-control mb-2" type="date">
                    <label>Tình Trạng</label>
                    <select v-model="create.tinh_trang" class="form-control mb-2">
                        <option value="1">Đã Đặt</option>
                        <option value="0">Còn Trống</option>
                    </select>
                </div>
                <div class="card-footer text-end">
                    <button v-on:click="themmoi()" class="btn btn-primary">Thêm Mới</button>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card mt-2">
                <div class="card-header">
                    <h3>Danh Sách Dịch vụ</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="text-center align-middle">
                                <tr>
                                    <th class="text-center align-middle">#</th>
                                    <th class="text-center align-middle">Tên Dịch Vụ</th>
                                    <th class="text-center align-middle">Gía</th>
                                    <th class="text-center align-middle">Ngày Tạo</th>
                                    <th class="text-center align-middle">Tình Trạng</th>
                                    <th class="text-center align-middle">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <template v-for="(v, k) in list" :key="k">
                                    <tr>
                                        <td class="text-center align-middle">{{ k + 1 }}</td>
                                        <td class="text-center align-middle">{{ v.ten_dich_vu }}</td>
                                        <td class="text-center align-middle">{{ v.gia }}</td>
                                        <td class="text-center align-middle">{{ v.ngay_tao }}</td>
                                        <td class="text-center align-middle">
                                            <button v-on:click="doiTrangThai(v)" v-if="v.tinh_trang == 1"
                                                class="btn btn-success me-2">Đã Thuê</button>
                                            <button v-on:click="doiTrangThai(v)" v-else class="btn btn-warning">Còn
                                                Trống</button>
                                        </td>
                                        <td class="text-center align-middle">
                                            <button class="btn btn-primary me-2 " data-bs-toggle="modal"
                                                data-bs-target="#capnhatdv" v-on:click="Object.assign(update, v)">Cập
                                                Nhật</button>
                                            <button class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#xoadv" v-on:click="Object.assign(del, v)">Xóa</button>
                                        </td>
                                    </tr>
                                </template>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal cập nhật -->
    <div class="modal fade" id="capnhatdv" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Dịch Vụ</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-2">
                        <label>Tên Dịch Vụ</label>
                        <input v-model="update.ten_dich_vu" class="form-control mb-2" type="text">
                    </div>
                    <div class="mb-2">
                        <label>Gía</label>
                        <input v-model="update.gia" class="form-control mb-2" type="text">
                    </div>
                    <div class="mb-2">
                        <label>Ngày Tạo</label>
                        <input v-model="update.ngay_tao" class="form-control mb-2" type="date">
                    </div>
                    <div class="mb-2">
                        <label class="form-lable">Tình Trạng</label>
                        <select v-model="update.tinh_trang" class="form-control">
                            <option value="0">Tạm Dừng</option>
                            <option value="1">Hoạt Động</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button v-on:click="updated()" type="button" class="btn btn-primary" data-bs-dismiss="modal">Xác
                        Nhận</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal Xóa -->
    <div class="modal fade" id="xoadv" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Xóa Dịch Vụ</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" role="alert">
                        Bạn có chắc muốn Xóa Dịch Vụ <b class="text-danger">{{ del.ten_dich_vu }}</b>này không?
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Xóa</button>
                    <button type="button" class="btn btn-danger" v-on:click="xoa()" data-bs-dismiss="modal">Xác
                        Nhận</button>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';

export default {
    data() {
        return {
            list: [],
            create: {
                'ten_dich_vu': '',
                'gia': '',
                'ngay_tao': '',
                'tinh_trang': '',
            },
            update: {},
            del: {},
        }
    },
    mounted() {
        this.loadData();
    },
    methods: {
        loadData() {
            axios
                .get('http://127.0.0.1:8000/api/admin/dich-vu/data')
                .then((res) => {
                    this.list = res.data.data;
                })
        },
        themmoi() {
            axios
                .post('http://127.0.0.1:8000/api/admin/dich-vu/create', this.create)
                .then((res) => {
                    if (res.data.status) {
                        this.$toast.success(res.data.message);
                        this.loadData();
                    }
                })
                .catch((res) => {
                    const list = Object.values(res.response.data.errors);
                    list.forEach((v, i) => {
                        this.$toast.error(v[0]);
                    });
                })

        },
        updated() {
            axios
                .post('http://127.0.0.1:8000/api/admin/dich-vu/update', this.update)
                .then((res) => {
                    if (res.data.status) {
                        this.$toast.success(res.data.message);
                        this.loadData();
                    }
                })
                .catch((res) => {
                    const list = Object.values(res.response.data.error);
                    list.forEach((v, i) => {
                        this.$toast.error(v[0]);
                    });
                })
        },
        xoa() {
            axios
                .post('http://127.0.0.1:8000/api/admin/dich-vu/delete', this.del)
                .then((res) => {
                    if (res.data.status) {
                        this.$toast.success(res.data.message);
                        this.loadData();
                    };
                })
                .catch((res) => {
                    const list = Object.values(res.response.data.errors);
                    list.forEach((v, i) => {
                        this.$toast.error(v[0]);
                    });
                })

        },
        doiTrangThai(v) {
            axios
                .post("http://127.0.0.1:8000/api/admin/dich-vu/doi-trang-thai", v)
                .then((res) => {
                    if (res.data.status) {
                        this.loadData();
                        this.$toast.success(res.data.message);
                    }
                })
                .catch((res) => {
                    const list = Object.values(res.response.data.errors);
                    list.forEach((v, i) => {
                        this.$toast.error(v[0]);
                    });
                })
        },
    },
}
</script>
<style></style>

