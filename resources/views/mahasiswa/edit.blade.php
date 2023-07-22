<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
</head>
<body>
    <h1>Edit Data Mahasiswa</h1>

    <!-- Tampilkan pesan error jika validasi gagal -->
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('mahasiswa.update', $mahasiswa->id_mahasiswa) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama_mahasiswa">Nama:</label>
        <input type="text" id="nama_mahasiswa" name="nama_mahasiswa" value="{{ $mahasiswa->nama_mahasiswa }}" required>
        <br>
        <label for="nim_mahasiswa">NIM:</label>
        <input type="text" id="nim_mahasiswa" name="nim_mahasiswa" value="{{ $mahasiswa->nim_mahasiswa }}" required>
        <br>
        <label for="prodi_mahasiswa">Program Studi:</label>
        <input type="text" id="prodi_mahasiswa" name="prodi_mahasiswa" value="{{ $mahasiswa->prodi_mahasiswa }}" required>
        <br>
        <button type="submit">Simpan Perubahan</button>
    </form>
    <br>
    <a href="{{ route('mahasiswa.index') }}">Kembali</a>
</body>
</html>
