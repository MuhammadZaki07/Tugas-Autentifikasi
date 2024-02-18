<?php
session_start();
unset($_SESSION['admin_id']);
unset($_SESSION['admin_username']);
session_destroy();
echo "<script>alert('Anda Berhasil keluar'); window.location.href='../Login_Daftar/Login.php';</script>";
exit();
