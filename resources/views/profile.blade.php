<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile User</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #DA8EFF, #FDB99B); /* Gradasi dari ungu ke oranye lembut */
        }
        .profile-container {
            background-color: rgba(255, 255, 255, 0.2); /* Warna latar belakang transparan untuk efek buram */
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2); 
            backdrop-filter: blur(10px); /* Efek blur */
            width: 350px;
            text-align: center;
        }
        .profile-pic {
            margin-bottom: 20px;
            border-radius: 50%;
            border: 4px solid rgba(255, 255, 255, 0.6); /* Border putih transparan */
            width: 120px;
            height: 120px;
            object-fit: cover;
        }
        .info-item {
            background-color: rgba(255, 255, 255, 0.1); /* Background transparan lembut */
            color: #00e0ff; /* Warna teks cyan */
            margin: 10px 0;
            padding: 12px;
            border-radius: 10px;
            font-weight: 600;
            text-align: center;
            font-size: 18px;
            transition: background-color 0.3s ease; /* Efek hover halus */
        }
        .info-item:hover {
            background-color: rgba(255, 255, 255, 0.2); /* Warna berubah saat hover */
        }
        h1 {
            color: white; /* Teks putih */
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="profile-container">
    <h1>Profile User</h1>
    <div class="profile-info">
        <!-- Tampilkan gambar profil dari public/assets/img -->
        <img src="{{ asset('assets/img/foto.jpg') }}" alt="Profile Picture" class="profile-pic">
        <!-- Info user -->
        <div class="info-item">Nama: {{ $nama }}</div>
        <div class="info-item">NPM: {{ $npm }}</div>
        <!-- Info user dengan kelas inline -->
        <div class="info-item">
            <span>Kelas:</span>
            <span>{{ $nama_kelas ?? 'Kelas tidak ditemukan' }}</span>
        </div>
    </div>
</div>
</body>
</html>
