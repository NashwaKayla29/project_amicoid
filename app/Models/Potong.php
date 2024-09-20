<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Potong extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_pemotong', 'id_bahan', 'size', 'tanggal_potong', 'id_barang'];
    // protected $table = ['Potong'];
    public $timestamps = true;

    public function bahan()
    {
        return $this->belongsTo(Bahan::class, 'id_bahan');
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }

    public function hasilPotong()
    {
        return $this->hasMany(HasilPotong::class, 'id_potong'); 
    
    }

}
