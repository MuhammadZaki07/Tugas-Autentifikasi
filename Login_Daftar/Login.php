<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <h2 class="text-login" onclick="text_login()">Login</h2>
    <form action="proses_login.php" method="post" onsubmit="return SettingForm()">
        <div class="box">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama"  placeholder="Masukan Nama Anda">
            <label for="">password</label>
            <input type="password" name="password" id="password"  placeholder="Masukan Password">
            <p id="error_input" style="color: red;"></p>
            <p>Jika Anda Belum Punya Akun, Daftar <a href="Regristasi.php">Di sini</a></p>
            <input type="submit" class="btn" value="Login" onclick="return SettingForm()">
        </div>
    </form>
    <script src="../JS/index.js"></script>
</body>

</html>