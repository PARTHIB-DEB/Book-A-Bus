<?php

session_start();

if(!isset($_SESSION['customer_busno'])){
    header("location:form_book.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Update Booking Details </title>
</head>
<body class="bg-white">
    <?php
        $con = mysqli_connect("localhost","root","","transport_parthib");
        $id = $_GET['id'];
        $sel = "SELECT * FROM customer WHERE uid='$id'";
        $rs=$con->query($sel);
        $row=$rs->fetch_assoc();
    ?>
    <div class="encap-form w-full h-[35rem] w-full flex justify-center items-center p-4 text-white">
        <form action="upd.php" method="post" enctype="multipart/form-data" class="flex justify-center space-y-[1rem] items-center flex-col my-[2rem] h-full w-1/2 shadow-white shadow-md bg-black rounded-lg">
            <p class="form-name text-3xl font-bold mb-[1rem]">Update Your Details <?php echo $_SESSION['customer_username']; ?></p>
            <div class="uname">
                <label for="uname" class="text-2xl">Username : </label>
                <input type="text" name="uname" id="" placeholder="Write Username" class="pl-2 text-lg w-[25rem] bg-slate-300 text-black rounded-md" value="<?php echo $row['username'];?>">
            </div>
            <div class="start">
                <label for="start" class="text-2xl">Start : </label>
                <input type="text" name="start" id="" placeholder="Write starting Location" class="pl-2 text-lg w-[25rem] bg-slate-300 text-black rounded-md" value="<?php echo $row['start'];?>">
            </div>
            <div class="end">
                <label for="end" class="text-2xl">End : </label>
                <input type="text" name="end" id="" placeholder="Write starting Location" class="pl-2 text-lg w-[25rem] bg-slate-300 text-black rounded-md" value="<?php echo $row['end'];?>">
            </div>
            <div class="bno">
                <label for="busno" class="text-2xl">Bus No : </label>
                <input type="text" name="busno" id="" placeholder="Write Bus No" class="pl-2 text-lg w-[25rem] bg-slate-300 text-black rounded-md" value="<?php echo $row['busno'];?>">
            </div>
            <?php
                $subarr = explode(",",$row['bsize']);
            ?>
            <div class="b flex justify-evenly space-x-[1rem] items-center">
                <p class="text-2xl">Capacity : </p>
                <input <?php if( in_array("small",$subarr)) { echo "checked";}?> type="checkbox" name="bsize[]" value="small"><p class="text-xl">small</p>
                <input <?php if( in_array("medium",$subarr)) { echo "checked";}?> type="checkbox" name="bsize[]" value="medium"><p class="text-xl">medium</p>
                <input <?php if( in_array("large",$subarr)) { echo "checked";}?> type="checkbox" name="bsize[]" value="large"><p class="text-xl">large</p>
            </div>
            <div class="date">
                <label for="date" class="text-2xl">Date : </label>
                <input type="date" name="date" id="" placeholder="Write Date" class="pl-2 text-lg w-[25rem] bg-slate-300 text-black rounded-md" value="<?php echo $row['date'];?>">
            </div>
            <div class="btns flex justify-center items-center space-x-8 text-white text-lg">
                <input type="submit" value="Submit" class="bg-blue-600 w-[5rem] h-[2.5rem] rounded-lg hover:cursor-pointer">
                <input type="reset" value="Reset" class="bg-pink-600 w-[5rem] h-[2.5rem] rounded-lg hover:cursor-pointer">
            </div>
        </form>
    </div>
</body>
</html>