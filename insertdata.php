<!-- From Register , Data Got inserted By the connection inside the database here. -->
<!-- Database logics Page -->
<!-- Put **signin-required** code - means if someone just want to visit this page  without registered , will be redirected to register page-->

<?php
session_start();

$a= $_POST['uname'];
$b= $_POST['email'];
$c=$_POST['gender'];
$d=$_POST['pass'];
$e=$_POST['dname'];

$buf = $_FILES['img']['tmp_name'];
$fn = time().$_FILES['img']['name'];
move_uploaded_file($buf,"upload/". $fn);

$con = mysqli_connect("localhost","root","","transport_parthib");
$ins ="INSERT INTO customer SET username='$a', email='$b', gender='$c', password ='$d', dtype ='$e', img ='$fn'";
if($con->query($ins)){
    $_SESSION['customer_username']=$a;
    header("location:form_book.php");
}else {
    header("location:register.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Successfully Registered</title>
</head>
</html>