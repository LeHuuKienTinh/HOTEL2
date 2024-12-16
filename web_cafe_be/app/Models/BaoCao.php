<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaoCao extends Model
{
    use HasFactory;
    protected $table = 'bao_caos';
    protected $fillable =[
            'ma_nhan_vien' ,
            'ngay_bao_cao',
            'noidung_bao_cao',
            'tong_so_tien',
            'ngay_tao' ,
            'tinh_trang' ,
    ];
}


