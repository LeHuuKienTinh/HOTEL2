<template>
    <div class="row">
        <div class="col-4">
            <div class="card mt-2">
                <div class="card-header">
                    <h3>Phòng</h3>
                </div>
                <div class="card-body">
                    <label>Loại Phòng</label>
                    <select class="form-control mb-2">
                        <option value="1">Phòng Đơn</option>
                        <option value="0">Phòng Đôi</option>
                    </select>
                    <label>Số Phòng</label>
                    <input class="form-control mb-2" type="text">
                    <label>Giá Phòng</label>
                    <input class="form-control mb-2" type="text">
                    <label>Tình Trạng</label>
                    <select class="form-control mb-2">
                        <option value="1">Đã Đặt</option>
                        <option value="0">Còn Trống</option>
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
                    <h3>Danh Sách Phòng</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="text-center align-middle">
                                <tr>
                                    <th class="text-center align-middle">#</th>
                                    <th class="text-center align-middle">Loại Phòng</th>
                                    <th class="text-center align-middle">Số Phòng</th>
                                    <th class="text-center align-middle">Giá Phòng</th>
                                    <th class="text-center align-middle">Tình Trạng</th>
                                    <th class="text-center align-middle">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center align-middle">1</td>
                                    <td class="text-center align-middle">
                                        <button class="btn btn-info me-2">Phòng Đơn</button>
                                        <button class="btn btn-warning">Phòng Đôi</button>
                                    </td>
                                    <td class="text-center align-middle">Phòng số 1</td>
                                    <td class="text-center align-middle">50.000</td>
                                    <td class="text-center align-middle">
                                        <button class="btn btn-success me-2">Đã Thuê</button>
                                        <button class="btn btn-warning">Còn Trống</button>
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