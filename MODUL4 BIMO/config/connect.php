<?php
// $host = "localhost:3307";
// $user = "user";
// $pass = "";
// $db = "modul3";

$koneksi = mysqli_connect("localhost:3307", "root", "", "modul3");
if (!$koneksi) {
    die("Koneksi gagal");
}
?>