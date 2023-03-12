<?php

// session start
session_start();

session_destroy();
echo "<script>
alert('Anda Telah Keluar dari halaman Admin..!');
document.location='login.php';
</script>"
?>