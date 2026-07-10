<?php


$host = 'localhost';
$db = 'db_joki';
$user = 'root';
$pass = 'Whenwemeetagain890';


$conn = mysqli_connect($host,$user,$pass,$db);

if(!$conn){
    die("Koneksi gagal : ".mysqli_connect_error());
}



