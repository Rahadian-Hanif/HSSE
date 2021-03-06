<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaAcara extends Model
{
    use HasFactory;

    protected $table = "berita_acara";
    protected $fillable = [
        'id_user',
        'jenis',
        'waktu',
        'tempat',
        'bukti', 
        'kronologi',
        'korban'
    ];
    public $timestamps = false;
}
