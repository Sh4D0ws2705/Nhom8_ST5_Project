<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    public $timestamps = false;
    protected $table = 'sanpham';
    use HasFactory;
    public function danhmucs(){
        return $this->belongsTo(DanhMuc::class,'idDanhMuc');
    }
    
    public function nhasanxuats(){
        return $this->belongsTo(NhaSanXuat::class, 'maNhaSX', 'maNhaSX');
    }
}