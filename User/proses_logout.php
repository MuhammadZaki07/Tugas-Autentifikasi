<?php
session_start();
session_unset();
session_destroy();
echo"<script>alert('Anda Berhasil Keluar'); window.location.href='../Login_Daftar/Login.php';</script>";
exit();