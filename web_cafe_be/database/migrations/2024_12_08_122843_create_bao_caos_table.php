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
        Schema::create('bao_caos', function (Blueprint $table) {
            $table->id();
            $table->string('ma_nhan_vien');
            $table->date('ngay_bao_cao');
            $table->string('noidung_bao_cao');
            $table->string('tong_so_tien');
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
        Schema::dropIfExists('bao_caos');
    }
};
