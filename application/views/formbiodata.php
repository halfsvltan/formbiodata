<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata</title>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="date"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        input[type="submit"],
        input[type="reset"] {
            background-color: #4CAF50;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Biodata Mahasiswa</h2>
        <form action="<?php echo base_url('biodata/tampil'); ?>" method="POST">
            <label for="nama">Nama :</label>
            <input type="text" id="nama" name="nama" required>

            <label for="alamat">Alamat Lengkap :</label>
            <textarea id="alamat" name="alamat" required></textarea>

            <label for="no_hp">Nomor HP:</label>
            <input type="number" id="nohp" name="nohp" required>

            <label for="nim">NIM :</label>
            <input type="number" id="nim" name="nim" required>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="tgl_lahir">Tanggal Lahir :</label>
            <input type="date" id="tgl_lahir" name="tgl_lahir" required>

            <input type="submit" value="Kirim"> <input type="reset" value="Batal">
        </form>
    </div>
</body>
</html>
