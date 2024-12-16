<template>
    <div class="row">
        <div class="col-4">
            <div class="card mt-2">
                <div class="card-header">
                    <h3>Báo cáo </h3>
                </div>
                <div class="card-body">
                    <label>Mã Nhân Viên</label>
                    <select v-model="create.ma_nhan_vien" class="form-control mb-2">
                        <option value="1">nhân viên 1</option>
                        <option value="0">nhân viên 2</option>
                    </select>
                    <label>Ngày Báo Cáo</label>
                    <input v-model="create.ngay_bao_cao" class="form-control mb-2" type="date">
                    <label>Nội Dung Báo Cáo</label>
                    <input v-model="create.noidung_bao_cao" class="form-control mb-2" type="text">
                    <label>Tổng Số Tiền</label>
                    <input v-model="create.tong_so_tien" class="form-control mb-2" type="text">
                    <label>Ngày Tạo</label>
                    <input v-model="create.ngay_tao" class="form-control mb-2" type="date">
                    <label>Tình Trạng</label>
                    <select v-model="create.tinh_trang" class="form-control mb-2">
                        <option value="1">hiển thị</option>
                        <option value="0">tạm tắt</option>
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
                    <h3>Danh Sách Báo Cáo</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="text-center align-middle">
                                <tr>
                                    <th class="text-center align-middle">#</th>
                                    <th class="text-center align-middle">Tên Nhân Viên</th>
                                    <th class="text-center align-middle">Ngày Báo Cáo</th>
                                    <th class="text-center align-middle">Nội Dung Báo Cáo</th>
                                    <th class="text-center align-middle">Tổng Số Tiền</th>
                                    <th class="text-center align-middle">Ngày Tạo</th>
                                    <th class="text-center align-middle">Tình Trạng</th>
                                    <th class="text-center align-middle">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <template v-for="(v, k) in list" :key="k">
                                    <tr>
                                        <td class="text-center align-middle">{{ k + 1 }}</td>
                                        <td class="text-center align-middle">{{ v.ma_nhan_vien }}</td>
                                        <td class="text-center align-middle">{{ v.ngay_bao_cao }}</td>
                                        <td class="text-center align-middle">{{ v.noidung_bao_cao }}</td>
                                        <td class="text-center align-middle">{{ v.tong_so_tien }}</td>
                                        <td class="text-center align-middle">{{ v.ngay_tao }}</td>
                                        <td class="text-center align-middle">
                                            <button v-on:click="doiTrangThai(v)" v-if="v.tinh_trang == 1"
                                                class="btn btn-success me-2">Đã Thuê</button>
                                            <button v-on:click="doiTrangThai(v)" v-else class="btn btn-warning">Còn
                                                Trống</button>
                                        </td>
                                        <td class="text-center align-middle">
                                            <button class="btn btn-primary me-2" data-bs-toggle="modal"
                                                data-bs-target="#capnhatbc" v-on:click="Object.assign(update, v)">Cập
                                                Nhật</button>
                                            <button class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#xoabc" v-on:click="Object.assign(del, v)">Xóa</button>
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
    <div class="modal fade" id="capnhatbc" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">báo cáo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-2">
                        <label>Mã Nhân Viên</label>
                        <select v-model="update.ma_nhan_vien" class="form-control mb-2">
                            <option value="1">nhân viên 1</option>
                            <option value="0">nhân viên 2</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label>Ngày Báo Cáo</label>
                        <input v-model="update.ngay_bao_cao" class="form-control mb-2" type="date">
                    </div>
                    <div class="mb-2">
                        <label>Nội Dung Báo Cáo</label>
                        <input v-model="update.noidung_bao_cao" class="form-control mb-2" type="text">
                    </div>
                    <div class="mb-2">
                        <label>Tổng Số Tiền</label>
                        <input v-model="update.tong_so_tien" class="form-control mb-2" type="text">
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
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" v-on:click="updated()">Xác
                        Nhận</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal Xóa -->
    <div class="modal fade" id="xoabc" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Xóa Báo Cáo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" role="alert">
                        Bạn có chắc muốn xóa Báo Cáo <b class="text-danger">{{ del.ma_nhan_vien }}</b>
                        này
                        không?
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Xóa</button>
                    <button v-on:click="xoa()" type="button" class="btn btn-danger" data-bs-dismiss="modal">Xác
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

                'ma_nhan_vien': '',
                'ngay_bao_cao': '',
                'noidung_bao_cao': '',
                'tong_so_tien': '',
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
                .get('http://127.0.0.1:8000/api/admin/bao-cao/data')
                .then((res) => {
                    this.list = res.data.data;
                })
        },
        themmoi() {
            axios
                .post('http://127.0.0.1:8000/api/admin/bao-cao/create', this.create)
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
                .post('http://127.0.0.1:8000/api/admin/bao-cao/update', this.update)
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
                .post('http://127.0.0.1:8000/api/admin/bao-cao/delete', this.del)
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
                .post("http://127.0.0.1:8000/api/admin/bao-cao/doi-trang-thai", v)
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
