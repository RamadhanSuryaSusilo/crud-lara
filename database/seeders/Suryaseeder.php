<?php

namespace Database\Seeders;

use App\models\Surya;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Suryaseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Surya::create([
            "nim" => "083103524177",
            "nama" => "rhmdnsuryasus",
            "kelas" => "XII RPL A",
            "jenis_kelamin" => "Laki-laki",
        ]);
    }
}
