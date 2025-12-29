<?php
// Thông tin kết nối cho XAMPP mặc định
$servername = "localhost";
$username = "root";
$password = ""; // XAMPP mặc định không có mật khẩu
$dbname = "toan_lop_1"; // Tên database mình vừa tạo ở bước trước

// Tạo kết nối
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if (!$conn) {
    // Nếu lỗi thì hiện thông báo
    die("Kết nối thất bại: " . mysqli_connect_error());
}

// Dòng này để hỗ trợ tiếng Việt không bị lỗi font
mysqli_set_charset($conn, 'utf8');
?>