<?php
session_start();
include("../connect.php");

$nama = $_POST['nama'];
$password = $_POST['password'];

// Lakukan sanitasi input
$nama = mysqli_real_escape_string($koneksi, $nama);

$sql = "SELECT * FROM user WHERE username='$nama'";
$hasil_query = $koneksi->query($sql);

if ($hasil_query) {
    // Pastikan ada hasil yang dikembalikan dari kueri
    if ($hasil_query->num_rows > 0) {
        $user = $hasil_query->fetch_assoc();

        // Verifikasi kata sandi
        if (password_verify($password, $user['password'])) {
            // Set session untuk pengguna
            $_SESSION['username'] = $user['username'];
            
            // Periksa jika pengguna adalah admin
            if ($user['username'] === 'admin' && $password === 'admin123') {
                $_SESSION['role'] = 'admin';
                header("Location: ../Admin/index.php");
                exit();
            } else {
                $_SESSION['role'] = 'user';
                header("Location: ../User/index.php");
                exit();
            }
        } else {
            // Jika kata sandi tidak cocok, arahkan kembali ke halaman login
            $_SESSION['error'] = "Nama pengguna atau kata sandi salah.";
            header("Location: Login.php");
            exit();
        }
    } else {
        // Jika akun tidak ditemukan, arahkan ke halaman login
        $_SESSION['error'] = "Akun tidak ditemukan. Silakan daftar terlebih dahulu.";
        header("Location: Login.php");
        exit();
    }
} else {
    // Tangani kesalahan kueri SQL
    $_SESSION['error'] = "Terjadi kesalahan saat memeriksa akun: " . mysqli_error($koneksi);
    header("Location: Login.php");
}

$koneksi->close();
?>
