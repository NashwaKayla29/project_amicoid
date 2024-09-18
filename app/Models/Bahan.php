<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bahan extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_bahan', 'ukuran_bahan', 'tanggal_masuk'];
    // protected $table = ['Bahan'];
    public $timestamps = true;

    public function potong()
    {
        return $this->hasMany(Potong::class, 'id_bahan');
    }
}