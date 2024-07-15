<!-- Register Form / signin form page , any new user will be redirect Here -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Register User </title>
</head>
<body class="bg-black">
    <div class="encap-form w-full h-[35rem] w-full flex justify-center items-center p-4 text-white">
        <form action="insertdata.php" method="post" enctype="multipart/form-data" class="flex justify-center space-y-[1rem] items-center flex-col my-[2rem] h-full w-1/2 shadow-white shadow-md rounded-lg">
            <p class="form-name text-3xl font-bold mb-[1rem]">Register User</p>
            <div class="uname">
                <label for="uname" class="text-2xl">Username : </label>
                <input type="text" name="uname" id="" placeholder="Write Username" class="pl-2 text-lg w-[25rem] bg-slate-300 text-black rounded-md">
            </div>
            <div class="email">
                <label for="email" class="text-2xl">Email : </label>
                <input type="email" name="email" id="" placeholder="Write Name" class="pl-2 text-lg w-[25rem] bg-slate-300 text-black rounded-md">
            </div>
            <div class="gender text-white flex justify-evenly items-center space-x-[1rem]">
                <label for="gender" class="text-2xl">Gender : </label>
                <input type="radio" name="gender" value="Male"><p class="text-xl">Male</p>
                <input type="radio" name="gender" value="Female"><p class="text-xl">Female</p>
                <input type="radio" name="gender" value="Unknown"><p class="text-xl">Rather not to say</p>
            </div>
            <div class="pass">
                <label for="pass" class="text-2xl">Password : </label>
                <input type="password" name="pass" id="" placeholder="Write Password" class="pl-2 text-lg w-[25rem] bg-slate-300 text-black rounded-md">
            </div>
            <div class="dname space-x-5">
                <label for="dname" class="text-2xl">Which Docs : </label>
                <select name="dname" id="" class="text-black">
                    <option value="">-Choose Any One-</option>
                    <option value="aadhar">aadhar</option>
                    <option value="voter">voter</option>
                    <option value="passport">passport</option>
                </select>
            </div>
            <div >
                Verifying Docs : <input type="file" name="img" id="">
            </div>
            <div class="btns flex justify-center items-center space-x-8 text-white text-lg">
                <input type="submit" value="Submit" class="bg-blue-600 w-[5rem] h-[2.5rem] rounded-lg hover:cursor-pointer">
                <input type="reset" value="Reset" class="bg-pink-600 w-[5rem] h-[2.5rem] rounded-lg hover:cursor-pointer">
            </div>
        </form>
    </div>
</body>
</html>