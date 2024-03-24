<?php
$server = "localhost"; 
$username = "root";    
$password = "";        
$database = "connectsql"; 

$conn = new mysqli($server, $username, $password, $database);

if ($conn){
    mysqli_query($conn, "SET NAMES 'utf8' ");
    echo 'Đã kết nối thành công';
} else {
    echo "Kết nối thất bại";
}   

?>
