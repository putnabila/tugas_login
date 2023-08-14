<?php

$hostname = "localhost";
$user = "root";
$pass = "";
$database = "tugas_login";
 
$conn = mysqli_connect($hostname, $user, $pass, $database);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>