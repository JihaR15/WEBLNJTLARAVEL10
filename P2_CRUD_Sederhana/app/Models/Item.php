<?php

namespace App\Models; // Menentukan namespace model agar dapat digunakan dalam aplikasi.

use Illuminate\Database\Eloquent\Factories\HasFactory; // Menggunakan trait HasFactory untuk mendukung pembuatan instance model menggunakan factory.
use Illuminate\Database\Eloquent\Model; // Mengimpor kelas Model dari Laravel agar bisa digunakan sebagai model database.

class Item extends Model // Mendefinisikan kelas Item sebagai model yang mewarisi fitur dari Model Laravel.
{
    use HasFactory; // Mengaktifkan fitur factory untuk model ini.

    // Menentukan atribut yang boleh diisi secara massal (mass assignment).
    // Dalam hal ini, hanya 'name' dan 'description' yang diizinkan.
    protected $fillable = ['name', 'description'];
}
