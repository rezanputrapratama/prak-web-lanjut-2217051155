<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User Form</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f3f4f6; /* Warna background lebih terang */
        }

        .form-container {
            background-color: #f1f3f6; /* Background form abu-abu */
            padding: 30px;
            border-radius: 10px; /* Sudut border lebih kecil */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Shadow lebih halus */
            max-width: 350px;
            width: 100%;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
            font-size: 20px; /* Ukuran font lebih kecil */
            font-weight: 600;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label, input {
            margin-bottom: 15px;
        }

        input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        input[type="submit"], button[type="submit"] {
            padding: 10px;
            border: none;
            background-color: #6c757d; /* Warna submit button abu-abu */
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            border-radius: 6px;
        }

        input[type="submit"]:hover, button[type="submit"]:hover {
            background-color: #5a6268; /* Hover warna lebih gelap */
        }

        /* Responsive Design */
        @media (max-width: 500px) {
            .form-container {
                padding: 20px;
                width: 90%;
            }

            input[type="text"], input[type="submit"] {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Create User</h2>
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" value="Rezan Putra Pratama" required>

            <label for="kelas">Kelas</label>
            <input type="text" id="kelas" name="kelas" value="A" required>

            <label for="npm">NPM</label>
            <input type="text" id="npm" name="npm" value="2217051155" required>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
