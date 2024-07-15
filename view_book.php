<!-- Put **signin-required** code - means if someone just want to visit this page  without registered , will be redirected to register page-->
<!-- After Booking a bus , any new user will be redirect Here -->

<?php

session_start();

if(!isset($_SESSION['customer_busno'])){
    header("location:form_book.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Booked Buses</title>
</head>

<body class="bg-black bg-no-repeat h-[50rem] md:p-[2rem]">
    <div class="tbl-bg bg-stone-400 h-full w-full rounded-lg shadow-lg shadow-white p-2 overflow-x-hidden">
        <div class="block flex flex-col items-center h-full w-full">
            <p class="text-center font-bold text-4xl pt-3 pb-1">Booked Buses of <?php echo $_SESSION['customer_username']; ?></p>
            <table class="h-full w-full flex flex-col items-center justify-center text-lg">
                <thead class=" h-[10%] w-full">
                    <tr class="flex justify-evenly space-x-[1rem] pt-[1rem] underline">
                        <th class="child-b1 h-full w-full  flex justify-center items-center">S.No</th>
                        <th class="child-b1 h-full w-full flex justify-center items-center">Start</th>
                        <th class="child-b1 h-full w-full flex justify-center items-center">End</th>
                        <th class="child-b1 h-full w-full flex justify-center items-center">B.No</th>
                        <th class="child-b1 h-full w-full flex justify-center items-center">Docs</th>
                        <th class="child-b1 h-full w-full flex justify-center items-center">Update</th>
                        <th class="child-b1 h-full w-full flex justify-center items-center">Delete</th>
                    </tr>
                </thead>
                <tbody class=" h-full w-full -mt-[1rem]">
                <?php
                    $i = 0;
                    $con = mysqli_connect("localhost","root","","transport_parthib");
                    $ins = "SELECT * FROM customer";
                    $rs = $con->query($ins);
                    while ($row = $rs-> fetch_assoc()) {
                ?>
                    <tr class="flex justify-evenly space-x-[1rem] pt-[1rem] ">
                        <td scope="row" class="child-b1 h-full w-full flex justify-center items-center"> <?php echo ++$i?></td>
                        <td class="child-b1 h-full w-full flex justify-center items-center"><?php echo $row['start'];?></td>
                        <td class="child-b1 h-full w-full flex justify-center items-center"><?php echo $row['end'];?></td>
                        <td class="child-b1 h-full w-full flex justify-center items-center"><?php echo $row['busno'];?></td>
                        <td class="child-b1 h-full w-full flex justify-center items-center"><img style="width:100px;" src="upload/<?php echo $row['img']; ?>" alt=""></td>
                        <td class="child-b1 h-full w-full flex justify-center items-center"><a class="bg-red-600 text-white w-[5rem] h-[2rem] rounded-lg hover:cursor-pointer text-center" href="del.php?id=<?php echo $row['uid']; ?>" onclick="return confirm('Are you want to delete?');">Delete</a></td>
                        <td class="child-b1 h-full w-full flex justify-center items-center"><a class="bg-blue-600 text-white w-[5rem] h-[2rem] rounded-lg hover:cursor-pointer text-center" href="edt.php?id=<?php echo $row['uid']; ?>" onclick="return confirm('Are you want to update?');">Update</a></td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
            <button type="submit" class="w-[7rem] h-[3rem] bg-red-500 text-white  rounded-lg -mt-[30rem] "><a href="signout.php">Delete Acc</a></button>
        </div>
    </div>
</body>

</html>