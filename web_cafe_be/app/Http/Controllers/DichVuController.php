<?php

namespace App\Http\Controllers;

use App\Models\DichVu;
use Illuminate\Http\Request;

class dichvuController extends Controller
{
    public function getData()
    {
        $data = DichVu::get();
        return response()->json([
            'data' => $data
        ]);
    }
    public function store(Request $request)
    {
        DichVu::create([
            'ten_dich_vu' => $request->ten_dich_vu,
            'gia' => $request->gia,
            'ngay_tao' => $request->ngay_tao,
            'tinh_trang' => $request->tinh_trang,
        ]);
        return response()->json([
            'status'  => 1,
            'message' => 'Thêm mới dịch vụ thành công  ' . $request->ten_dich_vu . '  Thành Công'
        ]);
    }
    public function update(Request $request)
    {
        DichVu::where('id', $request->id)->update([
            'ten_dich_vu'   => $request->ten_dich_vu,
            'gia'           => $request->gia,
            'ngay_tao'      => $request->ngay_tao,
            'tinh_trang'    => $request->tinh_trang,

        ]);
        return response()->json([
            'status' => true,
            'message' => 'Đã cập nhật thành công'
        ]);
    }
    public function delete(Request $request)
    {
        DichVu::where('id', $request->id)->delete();

        return response()->json([
            'status' => true,
            'message' => 'Đã xoá thành công'
        ]);
    }
    public function doitrangthai(Request $request)
    {
        $dichvu = DichVu::where('id', $request->id)->first();

        if ($request->tinh_trang == 0) {
            $dichvu->tinh_trang = 1;
            $dichvu->save();
        } else {
            $dichvu->tinh_trang = 0;
            $dichvu->save();
        }
        return response()->json([
            'status'    =>  true,
            'message'   =>  'Bạn đã thay đổi tình trạng ' . $request->ten_dich_vu . ' thành công'
        ]);
    }
}
