<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use Illuminate\Http\Request;

class HoaDonController extends Controller
{
    public function store(Request $request)
    {
        HoaDon::create([

            'id_khach_hang'         =>  $request->id_khach_hang,
            'id_phong'              =>  $request->id_phong,
            'id_nhan_vien'          =>  $request->id_nhan_vien,
            'ngay_nhan_phong'       =>  $request->ngay_nhan_phong,
            'ngay_tra_phong'        =>  $request->ngay_tra_phong,
            'tong_cong'             =>  $request->tong_cong,
            'giam_gia'              =>  $request->giam_gia,
            'giam_gia_ben_thu_ba'   =>  $request->giam_gia_ben_thu_ba,
            'thanh_tien'            =>  $request->thanh_tien,
            'ngay_tao'              =>  $request->ngay_tao,
            'tinh_trang'            =>  $request->tinh_trang,
        ]);
        return response()->json([
            'status'    =>  1,
            'message'   =>  'Tạo mới hóa đơn ' . $request->id_phong . ' thành công!'
        ]);
    }
    public function getdata()
    {
        $data = HoaDon::get();
        return response()->json([
            'data'    =>  $data,
        ]);
    }
    public function xoa(Request $request)
    {
        HoaDon::where('id',$request->id)->delete();
        return response()->json([
            'status'    =>  1,
            'message'   =>  'Bạn đã xóa hóa đơn' . $request->id_phòng . ' thành công!'
        ]);
    }
}
