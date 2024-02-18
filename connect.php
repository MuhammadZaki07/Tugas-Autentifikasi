<?php
$localhost = "localhost";
$root = "root";
$password = "";
$database = "belajar_auth";

$koneksi = mysqli_connect($localhost, $root, $password, $database);

if (!$koneksi) {
    die("eror : " . mysqli_connect_error());
}
// echo "Koneksi Berhasil Tersambung";
