<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Card</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial;
            background-color: #f0f0f0;
        }

        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            width: 250px;
        }

        .card h3 {
            margin-top: 0;
            font-size: 18px;
            color: gray;
        }

        .card p {
            margin: 5px 0;
            font-size: 16px;
            color: black;
        }
    </style>
</head>
<body>
    <div class="card">
    
    <div class="Foto-Profil">
            <img src=" " alt="Profile Picture">
        </div>
            <div class=>Nama: <?= $nama ?></div>
            <div class=>Kelas: <?= $kelas ?></div>
            <div class=>NPM: <?= $npm ?></div>
    </div>
</body>
</html>
