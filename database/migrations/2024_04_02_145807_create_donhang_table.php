<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhang', function (Blueprint $table) {
            $table->increments('maDonHang');
            $table->string('tenDonHang');
            $table->integer('soLuong');
            $table->double('tienHang');
            $table->double('tongTien');
            $table->unsignedInteger('maSP');
            $table->unsignedInteger('maKH');
            $table->foreign('maSP')->references('maSP')->on('sanpham')->onDelete('cascade');
            $table->foreign('maKH')->references('maKH')->on('taikhoankhach')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donhang');
    }
};
