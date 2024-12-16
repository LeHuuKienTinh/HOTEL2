<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hoa_dons', function (Blueprint $table) {
            $table->id();
            $table->integer('id_khach_hang');
            $table->integer('id_phong');
            $table->integer('id_nhan_vien');
            $table->date('ngay_nhan_phong');
            $table->date('ngay_tra_phong');
            $table->integer('tong_cong');
            $table->integer('giam_gia');
            $table->integer('giam_gia_ben_thu_ba');
            $table->integer('thanh_tien');
            $table->date('ngay_tao');
            $table->integer('tinh_trang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hoa_dons');
    }
};
