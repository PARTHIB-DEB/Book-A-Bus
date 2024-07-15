<!-- Login Required -->
<!-- After Booking from this oage , user will be at **view_book.php** page -->

<!-- Put **signin-required** code - means if someone just want to visit this page  without registered , will be redirected to register page-->

<!-- Register Form / signin form page , any new user will be redirect Here -->

<?php

session_start();

if(!isset($_SESSION['customer_username'])){
    header("location:register.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Book a Bus </title>
</head>
<body class="bg-white">
    <div class="encap-form w-full h-[35rem] w-full flex justify-center items-center p-4 text-white">
        <form action="insertbusdata.php" method="post" enctype="multipart/form-data" class="flex justify-center space-y-[1rem] items-center flex-col my-[2rem] h-full w-1/2 shadow-white shadow-md bg-backdrop-md bg-black/50 rounded-lg">
            <p class="form-name text-3xl font-bold mb-[1rem]">Book a Bus <?php echo $_SESSION['customer_username']; ?></p>
            <div class="uname">
                <label for="uname" class="text-2xl">Username : </label>
                <input type="text" name="uname" id="" placeholder="Write Username" class="pl-2 text-lg w-[25rem] bg-slate-300 text-black rounded-md">
            </div>
            <div class="start">
                <label for="start" class="text-2xl">Start : </label>
                <input type="text" name="start" id="" placeholder="Write starting Location" class="pl-2 text-lg w-[25rem] bg-slate-300 text-black rounded-md">
            </div>
            <div class="end">
                <label for="end" class="text-2xl">End : </label>
                <input type="text" name="end" id="" placeholder="Write starting Location" class="pl-2 text-lg w-[25rem] bg-slate-300 text-black rounded-md">
            </div>
            <div class="bno">
                <label for="busno" class="text-2xl">Bus No : </label>
                <input type="text" name="busno" id="" placeholder="Write Bus No" class="pl-2 text-lg w-[25rem] bg-slate-300 text-black rounded-md">
            </div>
            <div class="b flex justify-evenly space-x-[1rem] items-center">
                <p class="text-2xl">Capacity : </p>
                <input type="checkbox" name="bsize[]" value="small"><p class="text-xl">small</p>
                <input type="checkbox" name="bsize[]" value="medium"><p class="text-xl">medium</p>
                <input type="checkbox" name="bsize[]" value="large"><p class="text-xl">large</p>
            </div>
            <div class="date">
                <label for="date" class="text-2xl">Date : </label>
                <input type="date" name="date" id="" placeholder="Write Date" class="pl-2 text-lg w-[25rem] bg-slate-300 text-black rounded-md">
            </div>
            <div class="btns flex justify-center items-center space-x-8 text-white text-lg">
                <input type="submit" value="Submit" class="bg-blue-600 w-[5rem] h-[2.5rem] rounded-lg hover:cursor-pointer">
                <input type="reset" value="Reset" class="bg-pink-600 w-[5rem] h-[2.5rem] rounded-lg hover:cursor-pointer">
            </div>
        </form>
    </div>
</body>
</html>