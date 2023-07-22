<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <!-- Tampilkan pesan sukses jika ada -->
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Program Studi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswas as $index => $mahasiswa)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $mahasiswa->nama_mahasiswa }}</td>
                <td>{{ $mahasiswa->nim_mahasiswa }}</td>
                <td>{{ $mahasiswa->prodi_mahasiswa }}</td>
                <td>
                    <a href="{{ route('mahasiswa.edit', $mahasiswa->id_mahasiswa) }}">Edit</a>
                    <form action="{{ route('mahasiswa.destroy', $mahasiswa->id_mahasiswa) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('mahasiswa.create') }}">Tambah Data Baru</a>
</body>
</html>
