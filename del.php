<?php

$con = mysqli_connect("localhost","root","","transport_parthib");

$id= $_GET['id'];

$sel="SELECT * FROM customer WHERE uid='$id'";
$rs=$con->query($sel);

if ($rs->num_rows>0) {
    $row = $rs->fetch_assoc();
    $del_query = "UPDATE customer SET start=NULL,end=NULL,date=NULL,busno=NULL,bsize=NULL WHERE uid='$id'";
    if($con->query($del_query)){
        header("location:view_book.php");
    }else {
        header("location:form_book.php");
    }
}else {
    header("location:form_book.php");
}


?>