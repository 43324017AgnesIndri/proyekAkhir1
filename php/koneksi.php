<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "admin_db";

// Membuat koneksi dengan error reporting
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    $conn = mysqli_connect($host, $user, $pass, $db);
    
    // Set charset untuk mencegah SQL injection
    mysqli_set_charset($conn, "utf8mb4");
} catch (mysqli_sql_exception $e) {
    // Log error ke file daripada menampilkan ke user
    error_log("Koneksi database gagal: " . $e->getMessage());
    
    // Tampilkan pesan error yang ramah pengguna
    die("Maaf, terjadi kesalahan pada sistem. Silakan coba lagi nanti.");
}
?>