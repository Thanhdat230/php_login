<?php
/*Database credentials. Assuming you are running Mysql server
with default setting ( user 'root' with no password)*/
/*Thông tin đăng nhập cơ sỏ dữ liệu.Giả sử bạn đang chạy máy
chủ mysql với cài đặt mặc định (người dùng 'root' không có mật khẩu)*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'test');

/*Attempt to connect to mysql database*/
/*Cố gắng kết nối với cơ sỏ dữ liệu mysql*/
$mysqli = @new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

// Check connection: Kiểm tra kết nối.
if($mysqli == false){
    die("ERROR: Could not connect. " .$mysqli->connect_error);
}/*else{
    echo "DB connection successful!";
}*/
?>