<template>
    <div class="container">
        <div class="row" style="min-height: 100vh;">
            <div class="col-lg-12" style="padding: 0px !important; width: 100%;">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center mt-3">
                        <h6><b>DANH SÁCH NHÂN VIÊN</b></h6>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Thêm Mới
                        </button>
                    </div>
                    <div class="card-body table-responsive">

                        <table class="table table-bordered table-hover ">
                            <thead>

                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Họ Và Tên</th>
                                    <th class="text-center">Chức vụ</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Số Điện Thoại</th>
                                    <th class="text-center">Địa Chỉ</th>
                                    <th class="text-center">Tình Trạng</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <template v-for="(v, k) in list" :key="k">
                                    <tr>
                                        <th class="align-middle text-center">{{ k + 1 }}</th>
                                        <td class="align-middle">{{ v.ho_va_ten }}</td>
                                        <td class="align-middle">{{ v.chuc_vu }}</td>
                                        <td class="align-middle">{{ v.email }}</td>
                                        <td class="align-middle">{{ v.so_dien_thoai }}</td>
                                        <td class="align-middle text-center">{{ v.dia_chi }}</td>
                                        <td class="align-middle text-center">
                                            <template v-if="v.tinh_trang == 1">
                                                <button class="btn btn-success w-100">Hoạt
                                                    Động</button>
                                            </template>
                                            <template v-else>
                                                <button class="btn btn-warning w-100">Nghỉ phép</button>
                                            </template>
                                        </td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-primary me-2" data-bs-toggle="modal"
                                                data-bs-target="#capnhatDM" v-on:click="Object.assign(edit, v)">Cập
                                                nhật</button>
                                            <button class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#delModal"
                                                v-on:click="Object.assign(del, v)">Xóa</button>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- modal thêm -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm Mới Nhân Viên</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-2">
                                <label class="form-lable">Họ Và Tên</label>
                                <input v-model="create.ho_va_ten" type="text" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label class="form-lable">Chức vụ</label>
                                <select class="form-control" v-model="create.chuc_vu">
                                    <option value="1">Lễ Tân</option>
                                    <option value="2">Bếp</option>
                                    <option value="3">Vệ Sinh</option>
                                </select>
                            </div>

                            <div class="mb-2">
                                <label class="form-lable">Email</label>
                                <input v-model="create.email" type="email" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label class="form-lable">Số Điện Thoại</label>
                                <input v-model="create.so_dien_thoai" type="text" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label class="form-lable">Password</label>
                                <input v-model="create.password" type="password" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label class="form-lable">Địa Chỉ</label>
                                <input v-model="create.dia_chi" type="text" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label class="form-lable">Tình Trạng</label>
                                <select v-model="create.tinh_trang" class="form-control">
                                    <option value="0">Tạm Dừng</option>
                                    <option value="1">Hoạt Động</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button v-on:click="themMoi()" class="btn btn-primary" data-bs-dismiss="modal">Thêm
                                Mới</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal xóa -->
            <div class="modal fade" id="delModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Xóa Nhân Viên</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-danger" role="alert">
                                Bạn có chắc muốn xóa Nhân Viên <b class="text-danger">{{ del.ho_va_ten
                                    }}</b>
                                này
                                không?
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                                v-on:click="xoa()">Xác
                                nhận</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal cập nhật -->
            <div class="modal fade" id="capnhatDM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Cập nhật Nhân Viên</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-2">
                                <label class="form-lable">Họ Và Tên</label>
                                <input v-model="edit.ho_va_ten" type="text" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label class="form-lable">Chức vụ</label>
                                <select class="form-control" v-model="edit.chuc_vu">
                                    <option value="1">Lễ Tân</option>
                                    <option value="2">Bếp</option>
                                    <option value="3">Vệ Sinh</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label class="form-lable">Email</label>
                                <input v-model="edit.email" type="email" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label class="form-lable">Số Điện Thoại</label>
                                <input v-model="edit.so_dien_thoai" type="text" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label class="form-lable">Địa Chỉ</label>
                                <input v-model="edit.dia_chi" type="text" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label class="form-lable">Tình Trạng</label>
                                <select v-model="edit.tinh_trang" class="form-control">
                                    <option value="0">Nghỉ phép</option>
                                    <option value="1">Đang làm việc</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                                v-on:click="capNhat()">Cập
                                nhật</button>
                        </div>
                    </div>
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
            list_BE: [],
            list: [],
            create: {
                'ho_va_ten': '',
                'chuc_vu': '',
                'email': '',
                'so_dien_thoai': '',
                'password': '',
                'dia_chi': '',
                'tinh_trang': '',
            },
            edit: {},
            del: {},

        }
    },
    mounted() {
        this.loadData();
    },
    methods: {
        loadData() {
            axios
                .get('http://127.0.0.1:8000/api/admin/nhan-vien/data')
                .then((res) => {
                    this.list_BE = res.data.data;

                    // Sử dụng map để thay đổi giá trị chuc_vu từ số thành tên chức vụ
                    this.list_BE = this.list_BE.map(item => {
                        // Kiểm tra kiểu dữ liệu của `chuc_vu` là string hay number
                        if (item.chuc_vu === '1') {
                            item.chuc_vu = 'Lễ Tân';
                        } else if (item.chuc_vu === '2') {
                            item.chuc_vu = 'Bếp';
                        } else if (item.chuc_vu === '3') {
                            item.chuc_vu = 'Vệ Sinh';
                        }
                        return item;
                    });

                    // Cập nhật lại danh sách hiển thị
                    this.list = [...this.list_BE]; // Tạo một bản sao mới
                })
        },
        themMoi() {
            axios
                .post('http://127.0.0.1:8000/api/admin/nhan-vien/create', this.create)
                .then((res) => {
                    if (res.data.status) {
                        this.$toast.success(res.data.message);
                        console.log(res.data)
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
        capNhat() {
            axios
                .post('http://127.0.0.1:8000/api/admin/nhan-vien/update', this.edit)
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
        xoa() {
            axios
                .post('http://127.0.0.1:8000/api/admin/nhan-vien/delete', this.del)
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
    },

}
</script>
<style></style>