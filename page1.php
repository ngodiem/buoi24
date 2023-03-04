<?php 
include "header.php";
 // include là lấy hết nội dụng file đó 
// include 
echo "<br>";
require "header.php";
require_once "header.php"; // nếu file trên đã chạy thì nó k chạy nữa chỉ sd 1 lần tránh lập lại
echo "<br>";
echo "nội dung trang 1";
// include nếu file đó không tồn tại thì báo lỗi vẫn chạy dòng bên dưới
// require nếu file đó không tồn tại chương trình dừng luôn
 ?>