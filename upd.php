<?php

session_start();

if(!isset($_SESSION['customer_busno'])){
    header("location:form_book.php");
}

?>

<?php

$con = mysqli_connect("localhost","root","","transport_parthib");

$s = $_POST['start'];
$e = $_POST['end'];
$n = $_POST['busno'];
$d = $_POST['date'];
$u = $_POST['uname'];

if(isset($_POST['bsize'])){
    $f = implode(",",$_POST['bsize']);
}else{
    $f ="";
}

$ins = "UPDATE `customer` SET `start`='$s',`end`='$e',`date`='$d',`busno`='$n',`bsize`='$f' WHERE `username`='$u'";

if($con->query($ins)){
    header("location:view_book.php");
}


?>