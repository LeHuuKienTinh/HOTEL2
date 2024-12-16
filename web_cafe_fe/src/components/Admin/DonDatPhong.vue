<template>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Danh Sách Đơn Đặt Phòng </h5>
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
                                    <th>Mã Đặt Phòng</th>
                                    <th>Tên Khách Hàng</th>
                                    <th>Ngày Nhận Phòng</th>
                                    <th>Ngày Trả Phòng</th>
                                    <th>Loại Phòng</th>
                                    <th>Số Lượng</th>
                                    <th>Thành Tiền</th>
                                    <th>Tiền Cọc</th>
                                    <th>Giảm Giá </th>
                                    <th>Dịch Vụ</th>
                                    <th>Tình Trạng</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr class="align-middle">
                                        <th class="text-center"></th>
                                        <td class="align-middle text-center"></td>
                                        <td class="align-middle text-center"></td>
                                        <td class="align-middle text-center"></td>
                                        <td class="align-middle text-center"></td>
                                        <td class="align-middle text-center"></td>
                                        <td class="align-middle text-center"></td>
                                        <td class="align-middle text-center"></td>
                                        <td class="align-middle text-center"></td>
                                        <td class="align-middle text-center"></td>
                                        <td class="align-middle text-center"></td>
                                        <td class="text-center">
                                            <button class="btn btn-success">Đã Xác Nhận</button>
                                            <button class="btn btn-danger">Chưa Xác Nhận</button>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-primary me-2" >Cập Nhật</button>
                                            <button class="btn btn-danger" >Xóa</button>
                                        </td>
                                    </tr>
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
                        <label class="form-lable">Mã Đặt Phòng</label>
                        <select class="form-control">
                            <option value="0">1</option>
                            <option value="1">2</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label class="form-lable">Tên Khách Hàng</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="form-lable">Ngày Nhận Phòng</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="form-lable">Ngày Trả Phòng</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="form-lable">Loại Phòng</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="form-lable">Số Lượng </label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="form-lable">Thành Tiền</label>
                        <input  type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="form-lable">Tiền Cọc</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="form-lable">Giảm Giá</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="form-lable">Dịch Vụ</label>
                        <select class="form-control">
                            <option value="0">Giặt Ủi</option>
                            <option value="1">Dọn Vệ Sinh</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label class="form-lable">Tình Trạng</label>
                        <select class="form-control">
                            <option value="0">Đã Xác Nhận</option>
                            <option value="1">Chưa xác Nhận</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-dismiss="modal">Thêm Mới</button>
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
                            Bạn có chắc muốn xóa Hóa Đơn <b class="text-danger">...</b>
                            này
                            không?
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                            >Xác
                            nhận</button>
                    </div>
                </div>
            </div>
        </div>
</template>
<script>

export default {
   
   
}
</script>
<style></style>