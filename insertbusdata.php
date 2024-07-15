<!-- From Register , Data Got inserted By the connection inside the database here. -->
<!-- Database logics Page -->
<!-- Put **signin-required** code - means if someone just want to visit this page  without registered , will be redirected to register page-->

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

$bus_avl = "SELECT * FROM buses WHERE bno = '$n'";
$rs = $con->query($bus_avl);

if ($rs->num_rows>0) {
    $row = $rs->fetch_assoc();
    if ($row['avl'] ==1){
        $upd_query = "UPDATE `customer` SET `start`='$s',`end`='$e',`date`='$d',`busno`='$n',`bsize`='$f' WHERE `username`='$u'";
        if($con->query($upd_query)){
            session_start();
            $_SESSION['customer_busno'] = '$n';
            header("location:view_book.php");
        }else {
            header("location:form_book.php");
        }
    }else {
        header("location:form_book.php");
    }   
}else {
    header("location:form_book.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Inserting Bus Form</title>
    <h1 class="text-center text-4xl">Inserting Your Form..........</h1>
</head>
</html>