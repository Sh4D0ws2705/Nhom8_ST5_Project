<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanhMucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('danhmuc')->insert([
            ['idDanhMuc'=>'DM01','tenDanhMuc'=>'Điện Thoại'],
            ['idDanhMuc'=>'DM02','tenDanhMuc'=>'Laptop'],
            ['idDanhMuc'=>'DM03','tenDanhMuc'=>'Tablet'],
            ['idDanhMuc'=>'DM04','tenDanhMuc'=>'Loa'],
            ['idDanhMuc'=>'DM05','tenDanhMuc'=>'Smart Watch'],
            ['idDanhMuc'=>'DM06','tenDanhMuc'=>'Apple Watch'],
            ['idDanhMuc'=>'DM07','tenDanhMuc'=>'Sạc dự phòng'],
            ['idDanhMuc'=>'DM08','tenDanhMuc'=>'Đồng hồ điện tử'],
            ['idDanhMuc'=>'DM09','tenDanhMuc'=>'PC Gaming'],
            ['idDanhMuc'=>'DM10','tenDanhMuc'=>'PC Working']
        ]);
    }
}
