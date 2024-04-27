<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class NhaSanXuatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('nhasanxuat')->insert([
            ['maNhaSX'=>'SXDT01',
            'tenNhaSX'=>'Samsung'],
            ['maNhaSX'=>'SXDT02',
            'tenNhaSX'=>'Oppo'],
            ['maNhaSX'=>'SXDT03',
            'tenNhaSX'=>'Xiaomi'],
            ['maNhaSX'=>'SXDT04',
            'tenNhaSX'=>'Vivo'],
            ['maNhaSX'=>'SXDT05',
            'tenNhaSX'=>'Apple'],

            ['maNhaSX'=>'SXLT01',
            'tenNhaSX'=>'HP'],
            ['maNhaSX'=>'SXLT02',
            'tenNhaSX'=>'Asus'],
            ['maNhaSX'=>'SXLT03',
            'tenNhaSX'=>'Acer'],
            ['maNhaSX'=>'SXLT04',
            'tenNhaSX'=>'Lenovo'],
            ['maNhaSX'=>'SXLT05',
            'tenNhaSX'=>'Dell'],
            ['maNhaSX'=>'SXLT06',
            'tenNhaSX'=>'MacBook'],

            ['maNhaSX'=>'SXTL01',
            'tenNhaSX'=>'Ipad'],
            ['maNhaSX'=>'SXTL02',
            'tenNhaSX'=>'Samsung'],
            ['maNhaSX'=>'SXTL03',
            'tenNhaSX'=>'Xiaomi'],
            ['maNhaSX'=>'SXTL04',
            'tenNhaSX'=>'Oppo'],
            ['maNhaSX'=>'SXTL05',
            'tenNhaSX'=>'Lenovo']
        ]);
    }
}
