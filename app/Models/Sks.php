<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sks extends Model
{
    
    use HasFactory;
    protected $table = "sks";
    protected $fillable = [
        'nama',
        'id_user',
        'tgl'
    ];
    public $timestamps = false;
}
