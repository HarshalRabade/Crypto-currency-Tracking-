<?php
$servername="localhost";
$username="root";
$password="";
$database="crypto";
$conn=mysqli_connect($servername,$username,$password,$database);
if (!$conn) {
    die("Have a reasons".mysqli_connect_error());
} else {
    echo 'success';
}

?>