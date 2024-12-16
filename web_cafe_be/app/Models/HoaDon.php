<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    protected $table = 'hoa_dons';
    protected $fillable = [

            'id_khach_hang',
            'id_phong',
            'id_nhan_vien',
            'ngay_nhan_phong',
            'ngay_tra_phong',
            'tong_cong',
            'giam_gia',
            'giam_gia_ben_thu_ba',
            'thanh_tien',
            'ngay_tao',
            'tinh_trang',
    ];
}
