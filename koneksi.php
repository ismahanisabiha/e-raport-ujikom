<?php
 $servername = "103.55.39.194";
 $username = "eraport2_superuser";
 $password = "WrPHZw_]6!{[";
 $database = "eraport2_db_raport";

 $koneksi = mysqli_connect($servername, $username, $password, $database);


// Check connection
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
  } 
  echo "Connected successfully";

  ?>