<?php

session_start();

if(!isset($_SESSION['customer_username'])){
    header("location:register.php");
}else{
$con = mysqli_connect("localhost","root","","transport_parthib");

$u = $_POST['uname'];

$sel="SELECT * FROM customer WHERE uid='$u'";
$rs=$con->query($sel);
$row=$rs->fetch_assoc();
unlink('upload/'.$row['img']);

$del = "TRUNCATE TABLE `customer`";
$con->query($del);
session_destroy();
header("location:register.php");
}



?>