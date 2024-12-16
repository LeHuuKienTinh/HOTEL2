<template>
    <div class="row">
        <div class="col-4">
            <div class="card mt-2">
                <div class="card-header">
                    <h3>Giảm Giá</h3>
                </div>
                <div class="card-body">
                    <label>Mã Hóa Đơn</label>
                    <input class="form-control mb-2" type="text">
                    <label>Loại Giảm Giá</label>
                    <select class="form-control mb-2">
                        <option value="1">Loại 1</option>
                        <option value="0">Loại 2</option>
                    </select>
                    <label>Số Tiền Giảm Giá</label>
                    <input class="form-control mb-2" type="text">
                    <label>Ngày Tạo</label>
                    <input class="form-control mb-2" type="date">
                    <label>Tình Trạng</label>
                    <select class="form-control mb-2">
                        <option value="1">Còn Mã</option>
                        <option value="0">Hết Mã</option>
                    </select>
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-primary">Thêm Mới</button>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card mt-2">
                <div class="card-header">
                    <h3>Danh Sách Giảm Giá</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="text-center align-middle">
                                <tr>
                                    <th class="text-center align-middle">#</th>
                                    <th class="text-center align-middle">Mã Hóa Đơn</th>
                                    <th class="text-center align-middle">Loại Giảm Giá</th>
                                    <th class="text-center align-middle">Số Tiền Giảm Giá</th>
                                    <th class="text-center align-middle">Ngày Tạo</th>
                                    <th class="text-center align-middle">Tình Trạng</th>
                                    <th class="text-center align-middle">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center align-middle">1</td>
                                    <td class="text-center align-middle">MHD 1</td>
                                    <td class="text-center align-middle">
                                        <button class="btn btn-info me-2">Loại
                                            1</button>
                                        <button class="btn btn-success">Loại 2</button>
                                    </td>
                                    <td class="text-center align-middle">50.000</td>
                                    <td class="text-center align-middle">30/12/20124</td>
                                    <td class="text-center align-middle">
                                        <button class="btn btn-success me-2">Còn
                                            Mã</button>
                                        <button class="btn btn-warning">Hết Mã</button>
                                    </td>
                                    <td class="text-center align-middle">
                                        <button class="btn btn-primary me-2">Cập Nhật</button>
                                        <button class="btn btn-danger">Xóa</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style></style>