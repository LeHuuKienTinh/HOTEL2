<?php

use App\Http\Controllers\BaoCaoController;
use App\Http\Controllers\DichVuController;
use App\Http\Controllers\HoaDonController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\LoaiPhongController;
use App\Http\Controllers\NhanVienController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/admin/nhan-vien/data', [NhanVienController::class, 'getData']);
Route::post('/admin/nhan-vien/create', [NhanVienController::class, 'store']);
Route::post('/admin/nhan-vien/update', [NhanVienController::class, 'update']);
Route::post('/admin/nhan-vien/delete', [NhanVienController::class, 'delete']);
Route::post('/admin/dang-nhap', [NhanVienController::class, 'login']);
Route::get('/admin/check-login', [NhanVienController::class, 'checklogin']);
Route::middleware('auth:sanctum')->post('/admin/logout', [NhanVienController::class, 'logout']);


Route::get('/admin/khach-hang/data', [KhachHangController::class, 'getData']);
Route::middleware('auth:sanctum')->get('/admin/khach-hang/data-user', [KhachHangController::class, 'dataUser']);
Route::post('/khach-hang/dang-ky', [KhachHangController::class, 'store']);
Route::post('/admin/khach-hang/update', [KhachHangController::class, 'update']);
Route::post('/admin/khach-hang/delete', [KhachHangController::class, 'destroy']);
Route::post('/khach-hang/dang-nhap', [KhachHangController::class, 'login']);
Route::get('/khach-hang/check-login', [KhachHangController::class, 'checklogin']);

//HÓA ĐƠN
Route::get('/admin/hoadon/data', [HoaDonController::class, 'getData']);
Route::post('/admin/hoadon/create', [HoaDonController::class, 'store']);
Route::post('/admin/hoadon/delete', [HoaDonController::class, 'xoa']);

//DỊCH VỤ
Route::get('/admin/dich-vu/data', [DichVuController::class, 'getData']);
Route::post('/admin/dich-vu/create', [DichVuController::class, 'store']);
Route::post('/admin/dich-vu/update', [DichVuController::class, 'update']);
Route::post('/admin/dich-vu/delete', [DichVuController::class, 'delete']);
Route::post('/admin/dich-vu/doi-trang-thai', [DichVuController::class, 'doitrangthai']);

//BÁO CÁO
Route::get('/admin/bao-cao/data', [BaoCaoController::class, 'getData']);
Route::post('/admin/bao-cao/create', [BaoCaoController::class, 'store']);
Route::post('/admin/bao-cao/update', [BaoCaoController::class, 'update']);
Route::post('/admin/bao-cao/delete', [BaoCaoController::class, 'delete']);
Route::post('/admin/bao-cao/doi-trang-thai', [BaoCaoController::class, 'doitrangthai']);


//PHÒNG

Route::get('/khach-hang/loai-phong', [LoaiPhongController::class, 'getData']);
Route::get('/khach-hang/dat-phong', [LoaiPhongController::class, 'datPhong']);






Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
