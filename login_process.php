<?php
include 'koneksi.php';

$username = $_POST["username"];
$password = $_POST["password"];
$password_md5 = md5($password);

$data = mysqli_query($conn, "SELECT * FROM siswa WHERE username='$username' and password='$password_md5'");
if($data->num_rows>0){
    $aNamel = mysqli_fetch_assoc($data);

    //menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);

    $uname = $aNamel['fullname'];

    header("Location:dasboard.php");
} else{
    echo"login gagal";
}



