<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', ['mahasiswas' => $mahasiswas]);
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mahasiswa' => 'required',
            'nim_mahasiswa' => 'required',
            'prodi_mahasiswa' => 'required',
        ]);
    
        Mahasiswa::create($request->all());
    
        return redirect()->route('mahasiswa.index')
                         ->with('success', 'Data mahasiswa berhasil ditambahkan.');
    }
    

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', ['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_mahasiswa' => 'required',
            'nim_mahasiswa' => 'required',
            'prodi_mahasiswa' => 'required',
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswa.index')
                         ->with('success', 'Data mahasiswa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')
                         ->with('success', 'Data mahasiswa berhasil dihapus.');
    }
}
/**
 * Penjelasan kode di atas:
 * Fungsi index(): Digunakan untuk menampilkan daftar mahasiswa.
 * Fungsi create(): Menampilkan halaman tambah data mahasiswa.
 * Fungsi store(): Digunakan untuk menyimpan data mahasiswa baru ke dalam database.
 * Fungsi edit($id): Menampilkan halaman edit data mahasiswa berdasarkan ID yang diberikan.
 * Fungsi update(Request $request, $id): Digunakan untuk memperbarui data mahasiswa berdasarkan ID yang diberikan.
 * Fungsi destroy($id): Menghapus data mahasiswa berdasarkan ID yang diberikan.
 * Selanjutnya, pastikan Anda memiliki tampilan Blade untuk halaman tambah data baru dan halaman edit data mahasiswa. Misalnya, Anda dapat membuat file "create.blade.php" dan "edit.blade.php" dalam direktori "resources/views/mahasiswa" dan sesuaikan isinya dengan formulir yang sesuai.
 */