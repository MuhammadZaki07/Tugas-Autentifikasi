<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="../CSS/style2.css">
</head>

<body>
    <div class="container">
        <h1 class="text-daftar">Daftar</h1>
        <form action="proses_daftar.php" method="post" onclick="return SettingForm()">
            <div class="box">
                <div class="input">
                    <span for="nama">Nama</span>
                    <input type="text" name="nama" id="nama" placeholder="Masukan Nama" required>
                    <p id="error_input" style="color: red;"></p>
                </div>
                <div class="input">
                    <span for="password">Password</span>
                    <input type="password" name="password" id="password" required placeholder="Masukan Password">
                </div>
            </div>
            <div class="box">
                <div class="input">
                    <span for="konfirmasi_password">Konfirmasi Password</span>
                    <input type="password" name="konfirmasi_password" id="password" placeholder="Konfirmasi Password" required>
                </div>
                <div class="input">
                    <span>Pilih Kelamin</span>
                    <select name="gender" id="gender">
                        <option value="-">Kelamin</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <button class="button" onclick="window.history.back()">Kembali</button>
            <input type="submit" class="btn" onclick="return SettingForm()" value="Daftar">
        </form>
    </div>
    <script src="../JS/index.js"></script>
</body>

</html>