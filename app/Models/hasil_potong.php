<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hasil_potong extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'id_potong', 'jumlah_dihasilkan', 'jumlah_lolos', 'jumlah_cacat'];
    // protected $table = ['hasil_potong'];
    public $timestamps = true;

    public function potong()
    {
        return $this->hasMany(Potong::class, 'id_hasil');
    }
}
