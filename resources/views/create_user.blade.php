<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
     body {
            font-family: 'Roboto', sans-serif; /* Mengganti font menjadi Roboto */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #ffafbd, #ffc3a0); /* Gradient warna pink dan oranye */
        }
        .container {
            background-color: #f9f9f9;
            padding: 30px; /* Menambah padding */
            border-radius: 8px; /* Border-radius lebih kecil */
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15); /* Bayangan lebih kuat */
            width: 420px; /* Lebar kotak sedikit lebih besar */
            text-align: left; /* Ubah teks menjadi rata kiri */
        }
        h1 {
            color: #444;
            font-size: 24px; /* Ukuran font lebih besar */
            font-weight: 700; /* Font lebih tebal */
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: stretch;
        }
        label {
            font-weight: 700;
            margin-bottom: 8px;
            color: #555; /* Warna teks lebih lembut */
            font-size: 15px;
        }
        input, select {
            width: 100%;
            padding: 12px; /* Menambah padding input */
            margin-bottom: 12px; /* Jarak antar elemen lebih besar */
            border: 1px solid #ccc; /* Border abu-abu lembut */
            border-radius: 6px; /* Border-radius sedikit lebih besar */
            font-size: 15px; /* Ukuran font lebih besar */
            background-color: #f2f2f2; /* Warna latar belakang input */
        }
        input:focus, select:focus {
            border-color: #ff6f61; /* Warna border saat fokus (pink) */
            box-shadow: 0 0 5px rgba(255, 111, 97, 0.4); /* Warna bayangan pink saat fokus */
            outline: none;
        }
        input:hover, select:hover {
            background-color: #e6e6e6; /* Warna latar belakang saat hover */
        }
        button {
            background-color: #ff6f61; /* Warna oranye pink */
            color: white;
            padding: 12px;
            font-size: 16px;
            font-weight: 700;
            border: none;
            border-radius: 6px; /* Border-radius lebih besar untuk tombol */
            cursor: pointer;
            transition: all 0.3s ease;
        }
        button:hover {
            background-color: #e55a4e; /* Warna tombol lebih gelap saat hover */
            transform: translateY(-2px); /* Efek hover naik sedikit */
        }
        button:active {
            transform: translateY(0);
        }
        /* Responsive Design */
        @media (max-width: 500px) {
            .container {
                width: 95%;
                padding: 20px;
            }
            input, select, button {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
</head>

@extends('layouts.app') 
@section('content') 
<div class="container">
    <h2>Create User</h2>

    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" placeholder="Nama" required>

        <label for="npm">NPM:</label>
        <input type="text" id="npm" name="npm" placeholder="NPM" required>

        <label for="kelas_id">Kelas:</label>
        <select id="kelas_id" name="kelas_id" required>
            <option value="" disabled selected>Pilih Kelas</option>
            @foreach($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
            @endforeach
        </select>

        <label for="foto">Foto:</label>
        <input type="file" id="foto" name="foto"><br><br>

        <button type="submit">Submit</button>
    </form>
</div>
@endsection

</html>