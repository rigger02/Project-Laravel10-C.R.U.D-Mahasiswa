<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id_mahasiswa';
    protected $fillable = ['nama_mahasiswa', 'nim_mahasiswa', 'prodi_mahasiswa'];
    public $timestamps = false;
}
/**
 * Penjelasan kode di atas:
 * protected $table: Menyatakan nama tabel yang akan digunakan oleh model "Mahasiswa". Dalam kasus ini, tabel yang digunakan adalah "mahasiswa".
 * protected $primaryKey: Menyatakan primary key tabel yang digunakan oleh model "Mahasiswa". Di sini, primary key adalah "id_mahasiswa".
 * protected $fillable: Menyatakan kolom-kolom yang dapat diisi secara massal (mass assignable). Kolom-kolom inilah yang bisa diisi saat Anda menyimpan data melalui model. Jangan lupa sesuaikan dengan kolom-kolom yang Anda gunakan dalam tabel "mahasiswa".
 * public $timestamps: Mengatur apakah Laravel akan menambahkan kolom "created_at" dan "updated_at" pada tabel. Dalam contoh ini, kita set menjadi "false" karena tabel "mahasiswa" tidak memiliki kolom timestamp.
 */