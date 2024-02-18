<?php
include("../connect.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nama = $_POST["nama"];
    $password = $_POST["password"];
    $konfirmasi_password = $_POST["konfirmasi_password"];
    $gender = $_POST["gender"];
    if ($password !== $konfirmasi_password) {
        echo "<script>alert('passowrd tidak cocok!!!'); window.location.href='Regristasi.php?error=password_mismatch';</script>";
        exit();
    }
    $hash = password_hash($password, PASSWORD_BCRYPT);
    $sql = "INSERT INTO user (username,password,gender) VALUES ('$nama','$hash','$gender')";
    $cek = mysqli_query($koneksi, $sql);
    if ($cek) {
        echo "<script>alert('User berhasil terdaftar');window.location.href = 'Login.php';</script>";
        exit();
    } else {
        echo "<script>alert('Pendaftaran Gagal Mohon Coba Lgii');window.location.href='Regristasi.php?error=registration_failed';</script>";
        exit();
    }
}
