<?php
session_start();
if (!isset($_SESSION['sesi'])) {
    $_SESSION['sesi'] = 0;
}

// Tingkatkan hitungan setiap kali halaman dimuat
$_SESSION['sesi']++;
// ini untuk memeriksa pengguna sudah login apa belom
if (!isset($_SESSION['username'])) {
    // semiisal blm, di aliihkan ke halaman login
    header("Location: ../Login_Daftar/Login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../CSS/home.css">
</head>

<body>
    <h1>Selamat Datang Di Halaman Admin</h1>
    <div class="box">
        <h3>Keterangan</h3>
        <label for="">Nama</label>
        <input type="text" readonly value="<?php echo $_SESSION['username'] ?>">
        <label for="">Total Login</label>
        <input type="text" readonly value="<?php echo 'Anda mengakses server ini sebanyak : ' . ' ' . $_SESSION['sesi']; ?> X">
        <a href="proses_logout.php"><button class="btn">LogOut</button></a>
    </div>
</body>

</html>