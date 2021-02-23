<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmitSoal extends Model
{
    use HasFactory;
    protected $table = "monitoring_harian";
    protected $fillable = [
        'id_user',
        'tgl',
        'id_soal',
        'jawaban'
    ];
    public $timestamps = false;
}
