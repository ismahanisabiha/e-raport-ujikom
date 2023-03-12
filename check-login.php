<?php

session_start();

// panggil koneksi database
include "koneksi.php";

$username = $_POST['username'];
$pass = md5($_POST['password']);
$query = "SELECT * FROM user WHERE username = '$username'
AND password = '$pass'";


$data = mysqli_query($koneksi, $query);

// jika username dan password ditemukan/sesuai

$cek = mysqli_num_rows($data);

if ($cek > 0) {
         $_SESSION['username'] = $username;
         $_SESSION['status'] = "login";
        // Jika data ditemukan, redirect ke halaman sukses
        header("location: index.php");
} else {
        //Jika data tidak ditemukan, tampilkan pesan error
        echo "<script>
                alert(' pastikan username dan password anda benar');
                document.location='login.php';
                </script>";    
       }      
?>