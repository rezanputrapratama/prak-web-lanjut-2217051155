@extends('layouts.app')

@section('content')
<style>
 /* Mengimpor font Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

/* Menerapkan font Poppins ke seluruh halaman */
body {
    background-color: #f8f9fa; /* Background abu-abu muda */
    min-height: 100vh; /* Pastikan halaman penuh */
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif; /* Menggunakan font Poppins */
}

table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    background-color: white; /* Background putih untuk tabel */
    border: 1px solid #ddd; /* Border tabel */
}

th, td {
    padding: 12px;
    text-align: center; /* Rata tengah untuk teks */
    border: 1px solid #ddd; /* Border antar sel */
}

th {
    background-color: lightgreen; /* Warna hijau muda pada header */
    color: #333; /* Warna teks header */
    font-weight: 600;
}

tr:hover {
    background-color: #f1f1f1; /* Warna lebih terang saat hover */
}

td:hover {
    background-color: #eaf2fc; /* Warna highlight di kolom saat hover */
}

/* Gaya untuk tombol */
.action-buttons a, .action-buttons button {
    padding: 8px 12px;
    border-radius: 4px;
    text-decoration: none;
    color: white;
    font-weight: bold;
    border: none;
    cursor: pointer;
}

.btn-view {
    background-color: #28a745; /* Hijau untuk View */
}

.btn-edit {
    background-color: #007bff; /* Biru untuk Edit */
}

.btn-delete {
    background-color: #dc3545; /* Merah untuk Delete */
}

td .action-buttons {
    display: flex;
    gap: 10px; /* Spasi antar tombol */
    justify-content: center; /* Rata tengah tombol */
}

td .action-buttons form {
    margin: 0;
}

/* Tombol Tambah Pengguna Baru */
.btn-add-user {
    background-color: #007bff; /* Biru */
    padding: 10px 20px;
    border-radius: 5px;
    color: white;
    font-weight: bold;
    text-decoration: none;
    display: inline-block;
    margin-bottom: 10px;
}

.btn-add-user:hover {
    background-color: #0056b3; /* Biru lebih gelap saat hover */
}

/* Styling untuk judul "List Data" */
.page-title {
    font-size: 24px; /* Ukuran font sesuai tampilan */
    font-weight: bold;
    color: #333; /* Warna teks */
    margin-bottom: 20px;
    text-align: center; /* Pusatkan teks */
}

td img {
    display: block;
    margin: 0 auto;
    max-width: 100px; /* Sesuaikan ukuran gambar */
    height: auto;
}

</style>

<!-- Judul Halaman -->
 <br>
<div class="page-title">List Data</div>

<!-- Tombol Tambah Pengguna Baru -->
<a href="{{ route('users.create') }}" class="btn-add-user mb-3">Tambah Pengguna Baru</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelas</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->npm }}</td>
                <td>{{ $user->kelas->nama_kelas ?? 'Kelas Tidak Ditemukan' }}</td>
                <td>
                    @if($user->foto)
                        <img src="{{ asset($user->foto ?? 'uploads/img/default.jpg') }}" alt="Foto Pengguna" width="100">
                    @else
                        <span>Foto tidak tersedia</span>
                    @endif
                </td>
                <td>
                    <div class="action-buttons">
                        <!-- Tombol View sesuai instruksi pada gambar -->
                        <a href="{{ route('users.show', $user->id) }}" class="btn-view">View</a>

                        <!-- Tombol Edit -->
                        <a href="{{ route('users.edit', $user->id) }}" class="btn-edit">Edit</a>

                        <!-- Tombol Hapus -->
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection