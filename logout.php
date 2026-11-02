<?php
session_start();  // Mulai sesi
session_unset();  // Menghapus semua session variables
session_destroy();  // Menghancurkan sesi

// Redirect ke index.php setelah logout
header("Location: index.php");  // Ganti dengan URL yang sesuai
exit();  // Pastikan tidak ada kode yang dieksekusi setelah redirect
?>
