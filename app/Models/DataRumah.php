<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataRumah extends Model
{
    use HasFactory;
    protected $fillable = [
        "nomor",
        "alamat",
        "pemilik",
        "penghuni"
    ];
}
