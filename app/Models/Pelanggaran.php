<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggaran extends Model
{
    use HasFactory;
    protected $table = "laporan_pelanggaran";
    protected $fillable = [
        'id_user',
        'kepada',
        'bagian',
        'tgl',
        'pelanggaran',
        'deskripsi'   
    ];
    public $timestamps = false;
}
