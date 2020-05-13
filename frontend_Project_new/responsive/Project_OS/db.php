<?php                // เชื่อมต่อฐานข้อมูล

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '12345678';

$Conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if(mysqli_connect_errno()) {

   echo 'Could not connect: ' . mysqli_connect_errno(mysql_error());
}

if(!$Conn) echo "Could not connect Database";

mysqli_select_db($Conn,'project_os'); // กำหนด ชื่อ Database ที่ต้องการเชื่อมต่อ
mysqli_set_charset($Conn,'utf8'); // กำหนดอักขระ ในการเชื่อมต่อ Database



?>