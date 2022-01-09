<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataWarga extends Model
{
    use HasFactory;
    protected $fillable = [
        "foto",
        "nama",
        "alamat",
        "email",
        "tanggal_lahir",
        "jenis_kelamin",
        "status_perkawinan",
        "status_warga"
    ];
}
