<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_barang', 'size'];
    // protected $table = ['Barang'];
    public $timestamps = true;

    public function potong()
    {
        return $this->hasMany(Potong::class, 'id_barang');
    }

}
