<template>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Danh Sách Hóa Đơn </h5>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Thêm Mới </button>
                </div>
                <div class="card-body">
                    <div class="input-group mt-3 w-100">
                        <input type="text" class="form-control search-control border border-1 border-secondary"
                            placeholder="Search...">
                        <span class="position-absolute top-50 search-show translate-middle-y" style="left: 15px;"><i
                                class="bx bx-search"></i></span>
                        <button class="btn btn-outline-secondary" type="button">Tìm
                            Kiếm</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Mã Khách Hàng</th>
                                    <th>Mã Phòng</th>
                                    <th>Mã Nhân Viên</th>
                                    <th>Ngày Nhận Phòng</th>
                                    <th>Ngày Trả Phòng</th>
                                    <th>Tổng Cộng</th>
                                    <th>Giảm Giá </th>
                                    <th>Giảm Giá Bên Thứ Ba</th>
                                    <th>Thành Tiền</th>
                                    <th>Ngày Tạo</th>
                                    <th>Tình Trạng</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <template v-for="(v, k) in list" :key="k">
                                    <tr class="align-middle">
                                        <th class="text-center">{{ k+1 }}</th>
                                        <td class="align-middle text-center">{{ v.id_khach_hang }}</td>
                                        <td class="align-middle text-center">{{ v.id_phong }}</td>
                                        <td class="align-middle text-center">{{ v.id_nhan_vien }}</td>
                                        <td class="align-middle text-center">{{ v.ngay_nhan_phong }}</td>
                                        <td class="align-middle text-center">{{ v.ngay_tra_phong }}</td>
                                        <td class="align-middle text-center">{{ v.tong_cong }}</td>
                                        <td class="align-middle text-center">{{ v.giam_gia }}</td>
                                        <td class="align-middle text-center">{{ v.giam_gia_ben_thu_ba }}</td>
                                        <td class="align-middle text-center">{{ v.thanh_tien }}</td>
                                        <td class="align-middle text-center"> {{ v.ngay_tao }}</td>
                                        <td class="text-center">
                                            <button v-if="v.tinh_trang==0" class="btn btn-success">Hoạt Động</button>
                                            <button v-else class="btn btn-danger">Tạm Dừng</button>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#delModal" v-on:click="Object.assign(del, v)">Xóa</button>
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
    <!-- modal thêm mới hóa đơn -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm Mới Hóa Đơn</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-2">
                        <label class="form-lable">Mã Khách Hàng</label>
                        <select v-model="create.id_khach_hang" class="form-control">
                            <option value="0">1</option>
                            <option value="1">2</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label class="form-lable">Mã Phòng</label>
                        <select v-model="create.id_phong" class="form-control">
                            <option value="0">2</option>
                            <option value="1">3</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label class="form-lable">Mã Nhân Viên</label>
                        <select v-model="create.id_nhan_vien" class="form-control">
                            <option value="0">12</option>
                            <option value="1">34</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label class="form-lable">Ngày Nhận Phòng</label>
                        <input v-model="create.ngay_nhan_phong" type="date" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="form-lable">Ngày Trả Phòng</label>
                        <input v-model="create.ngay_tra_phong" type="date" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="form-lable">Tổng Cộng</label>
                        <input v-model="create.tong_cong" type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="form-lable">Giảm Giá </label>
                        <input v-model="create.giam_gia" type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="form-lable">Giảm Giá Bên Thứ Ba</label>
                        <input v-model="create.giam_gia_ben_thu_ba" type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="form-lable">Thành Tiền</label>
                        <input v-model="create.thanh_tien" type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="form-lable">Ngày Tạo</label>
                        <input v-model="create.ngay_tao" type="date" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="form-lable">Tình Trạng</label>
                        <select v-model="create.tinh_trang" class="form-control">
                            <option value="0">Hoạt Động</option>
                            <option value="1">Tạm Dừng</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button v-on:click="themMoi()" class="btn btn-primary" data-bs-dismiss="modal">Thêm Mới</button>
                </div>
            </div>
        </div>
    </div>
     <!-- Modal xoá-->
     <div class="modal fade" id="delModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Xóa Hóa Đơn</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger" role="alert">
                            Bạn có chắc muốn xóa Hóa Đơn <b class="text-danger">{{ del.id_phong }}</b>
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
</template>
<script>
import axios from 'axios';

export default {
    data() {
        return {
            create: {
                'id_khach_hang'         :"",
                'id_phong'             :"",
                'id_nhan_vien'          :"",
                'ngay_nhan_phong'       :"",
                'ngay_tra_phong'        :"",
                'tong_cong'            :"",
                'giam_gia'             :"",
                'giam_gia_ben_thu_ba'   :"",
                'thanh_tien'            :"",
                'ngay_tao'            :"",
                'tinh_trang'            :"",
            },
            list: [],
            del:{
                'id_phong'             :"",
            },
        }
    },
    mounted() {
        this.loadData();
    },
    methods: {
        loadData() {
            axios
                .get('http://127.0.0.1:8000/api/admin/hoadon/data', {
                })
                .then((res) => {
                    this.list = res.data.data;
                })
        },
        themMoi() {
            axios
                .post('http://127.0.0.1:8000/api/admin/hoadon/create', this.create, {
                })
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
        xoa() {
            axios
                .post('http://127.0.0.1:8000/api/admin/hoadon/delete', this.del,)
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