<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surya extends Model
{
    use HasFactory;

    protected $table = "surya";

    protected $fillable = [
        "nim",
        "nama",
        "kelas",
        "jenis_kelamin",
    ];
}
