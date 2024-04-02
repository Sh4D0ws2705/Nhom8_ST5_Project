<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class trangthaispSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trangthaisp')->insert([
            ['MaTrangThai'=>'CH01',
            'TrangThai'=>'Còn Hàng'],
            ['MaTrangThai'=>'HH01',
            'TrangThai'=>'Hết Hàng'],
            ['MaTrangThai'=>'NB01',
            'TrangThai'=>'Ngừng Bán'],
           
        ]);
    }
}
