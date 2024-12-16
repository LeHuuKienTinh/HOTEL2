<?php

namespace App\Http\Controllers;

use App\Models\LoaiPhong;
use Illuminate\Http\Request;

class LoaiPhongController extends Controller
{
    public function getData()
    {
        $data = LoaiPhong::get();
        return response()->json([
            'data' => $data
        ]);
    }
}
