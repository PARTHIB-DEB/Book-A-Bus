<!-- From view_book , Data Got deleted By the connection inside the database here. -->
<!-- Database logics Page -->
<!-- Put **signin-required** code - means if someone just want to visit this page  without registered , will be redirected to register page-->

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
    <title>Delete User </title>
</head>
<body class="bg-black">
    <div class="encap-form w-full h-[35rem] w-full flex justify-center items-center p-4 text-white">
        <form action="del_data.php" method="post" enctype="multipart/form-data" class="flex justify-center space-y-[1rem] items-center flex-col my-[2rem] h-full w-1/2 shadow-white shadow-md rounded-lg">
            <p class="form-name text-3xl font-bold mb-[1rem]">Delete User <?php echo $_SESSION['customer_username'];?></p>
            <div class="uname">
                <label for="uname" class="text-2xl">Username : </label>
                <input type="text" name="uname" id="" placeholder="Write Username" class="pl-2 text-lg w-[25rem] bg-slate-300 text-black rounded-md">
            </div>
            <div class="btns flex justify-center items-center space-x-8 text-white text-lg">
                <input type="submit" value="Submit" class="bg-blue-600 w-[5rem] h-[2.5rem] rounded-lg hover:cursor-pointer">
                <input type="reset" value="Reset" class="bg-pink-600 w-[5rem] h-[2.5rem] rounded-lg hover:cursor-pointer">
            </div>
        </form>
    </div>
</body>
</html>