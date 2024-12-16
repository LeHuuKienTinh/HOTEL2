<?php

namespace App\Http\Controllers;

use App\Models\BaoCao;
use Illuminate\Http\Request;

class BaoCaoController extends Controller
{
    public function getData()
    {
        $data = BaoCao::get();
        return response()->json([
            'data' => $data
        ]);
    }
    public function store(Request $request)
    {
        BaoCao::create([
            'ma_nhan_vien'   =>$request->ma_nhan_vien,
            'ngay_bao_cao'   =>$request->ngay_bao_cao,
            'noidung_bao_cao'   =>$request->noidung_bao_cao,
            'tong_so_tien'   =>$request->tong_so_tien,
            'ngay_tao'   =>$request->ngay_tao,
            'tinh_trang'   =>$request->tinh_trang,

        ]);
        return response()->json([
            'status'  => 1,
            'message' => 'Thêm mới  Thành Công'
        ]);
    }
    public function update(Request $request)
    {
        BaoCao::where('id', $request->id)->update([
            'ma_nhan_vien'   =>$request->ma_nhan_vien,
            'ngay_bao_cao'   =>$request->ngay_bao_cao,
            'noidung_bao_cao'   =>$request->noidung_bao_cao,
            'tong_so_tien'   =>$request->tong_so_tien,
            'ngay_tao'   =>$request->ngay_tao,
            'tinh_trang'   =>$request->tinh_trang,

        ]);
        return response()->json([
            'status' => true,
            'message' => 'Đã cập nhật thành công'
        ]);
    }
    public function delete(Request $request)
    {
        BaoCao::where('id', $request->id)->delete();

        return response()->json([
            'status' => true,
            'message' => 'Đã xoá thành công'
        ]);
    }
    public function doitrangthai(Request $request)
    {
        $baocao = BaoCao::where('id', $request->id)->first();

        if ($request->tinh_trang == 0) {
            $baocao->tinh_trang = 1;
            $baocao->save();
        } else {
            $baocao->tinh_trang = 0;
            $baocao->save();
        }
        return response()->json([
            'status'    =>  true,
            'message'   =>  'Bạn đã thay đổi tình trạng thành công'
        ]);
    }


}
