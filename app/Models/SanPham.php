<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    public $timestamps = false;
    protected $table = 'sanpham';
    protected $primaryKey = 'maSP';
    protected $fillable = [
        'maSP',
        'tenSP'
    ];
    use HasFactory;
    public function danhmucs(){
        return $this->belongsTo(DanhMuc::class,'idDanhMuc');
    }
    
    public function nhasanxuats(){
        return $this->belongsTo(NhaSanXuat::class, 'maNhaSX', 'maNhaSX');
    }

    public function trangthaisps(){
        return $this->belongsTo(TrangThaiSP::class, 'MaTrangThai', 'MaTrangThai');
    }

    public function sanphams(){
        return $this->belongsTo(SanPham::class,'maSP','maSP');
    }
}