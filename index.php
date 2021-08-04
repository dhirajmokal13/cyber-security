<?php
if (!(isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || 
   $_SERVER['HTTPS'] == 1) ||  
   isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&   
   $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'))
{
   $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
   header('HTTP/1.1 301 Moved Permanently');
   header('Location: ' . $redirect);
   exit();
}


session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header('location: Home.php');
    exit;
}
?>

<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "dbconnect.php";
    $username1 = $_POST['username1'];
    $password1 = $_POST['password1'];
    $ip = $_SERVER['REMOTE_ADDR'];

    $sql = "select * from registration where username1='$username1' AND password1='$password1'";
    $result = mysqli_query($conn, $sql);
    //$row = array();
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        while ($row = mysqli_fetch_array($result)) {

            $login = true;
      
            $_SESSION['loggedin'] = true;
            $_SESSION['username1'] = $username1;
            $_SESSION['email'] = $row['email'];
            $_SESSION['mobile'] = $row['mobile'];
            $_SESSION['gender'] = $row['gender'];
            $_SESSION['address'] = $row['address'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['dob'] = $row['dob'];
            $_SESSION['score'] = $row['score'];
            $_SESSION['sno'] = $row['sno'];
             $sql4 = "INSERT INTO `login` (`uname`, `status`, `ip`, `ldate`) VALUES ('$username1', 'User Access', '$ip', current_timestamp());";
            $result4 = mysqli_query($conn, $sql4);
            if($result4) {
            header('location: Home.php');
            }
        }
    } else {
        $sql2 = "select * from admin where username='$username1' AND password='$password1'";
        $result2 = mysqli_query($conn, $sql2);
        $num2 = mysqli_num_rows($result2);
        if ($num2 == 1) {
            while ($row = mysqli_fetch_array($result2)) {
                $login2 = true;
           
                $_SESSION['loggedinadmin'] = true;
                $_SESSION['username1'] = $username1;
                $_SESSION['aid'] = $row['aid'];
                $_SESSION['name'] = $row['name'];
                $sql5 = "INSERT INTO `login` ( `uname`, `status`, `ip`, `ldate`) VALUES ('$username1', 'Admin Access', '$ip', current_timestamp());";
               $result5 = mysqli_query($conn, $sql5);
               if($result5) {
                header('location: admin/admin.php');
               }
            }
        } else {
             $sql6 = "INSERT INTO `login` ( `uname`, `status`, `ip`, `ldate`) VALUES ('$username1', 'Access Denied', '$ip', current_timestamp());";
               $result6 = mysqli_query($conn, $sql6);
            $showError = "Invalid Credential";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
        }

        body {
            background-image: url("css/image/login-bg2.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }

        img.avatar {
            height: 135px;
            width: 135px;
            margin: 140px 46% 0 46%;
            border-radius: 65px;
            box-shadow: 0 0 45px rgb(238, 114, 98), 0 0 25px rgb(243, 55, 49);
            position: absolute;
            top: 36px;
        }

        input[type=text],
        input[type=password] {
            display: flex;
            flex-direction: column;
            min-width: 20rem;
            margin: 17px 15px;
            border-radius: 5px;
            padding: 7px 5px 7px 7px;
            outline: none;
            font-size: 17px;
            cursor: pointer;
            border: 1px solid black;
        }

        input[type=text]:focus,
        input[type=password]:focus {
            border: 2px solid rgb(8, 148, 8);
            height: 37px;
            width: 52%;
            transition-delay: 0.3s;
            font-size: 19px;
            box-shadow: 0 0 25px rgb(243, 240, 84), 0 0 5px rgb(233, 134, 21);
        }

        div.main {

            border: 1px solid rgb(241, 37, 37);
            max-width: 44rem;
            margin-left: auto;
            margin-right: auto;
            padding: 65px 60px 60px 30px;
            background-color: rgba(10, 10, 10, 0.5);
            border-radius: 5px;
            box-shadow: 0 0 45px rgb(238, 114, 98), 0 0 25px rgb(243, 55, 49);
            top: 255px;
            position: relative;
            z-index: -1;
        }


        button {
            height: 35px;
            width: 90px;
            border-radius: 5px;
            outline: none;
            padding: auto;
            font-size: 17px;
            background-color: rgb(8, 148, 8);
            color: white;
            border: none;
            margin-right: 29px;
            margin-left: 16px;
            margin-top: 10px;
            cursor: pointer;
        }

        button:focus {
            background-color: rgb(59, 247, 59);
            transition: 0.5s;
            font-size: 19px;
            height: 37px;
            width: 92px;
            box-shadow: 0 0 25px rgb(243, 240, 84), 0 0 5px rgb(118, 139, 0);
        }

        span {
            color: #fff;
            font-size: 19px;

        }

        span a {
            color: red;
            padding-left: 15px;
        }

        span a:hover {
            background-color: transparent;
        }

        div.alert {
            background-color: rgba(0, 145, 0, 0.2);
            color: rgb(14, 34, 14);
            width: 100%;
            height: 40px;
            padding: 5px 20px;
            font-size: 20px;
            border-bottom: 1px solid green;

        }

        div.Error {
            background-color: rgb(248, 27, 27, 0.2);
            color: #fff;
            width: 100%;
            height: 40px;
            padding: 5px 20px;
            font-size: 20px;
            border-bottom: 1px solid red;
            top: 61px;
            position: absolute;
        }

        strong.error {
            color: red;
        }

        strong.success {
            color: green;
        }

        @media only screen and (max-width: 500px) {
            img.avatar {
            width: 117px;
            height: 117px;
            margin: 140px 34% 0 34%;
            border-radius: 65px;
            position: absolute;
            top: 76px;
        }
        div.main {
            max-width: 22rem;
            padding: 60px 5px 17px 5px;
            top: 288px;
        }
        input[type=text],
        input[type=password]{
            min-width: 17rem;
            z-index: 1;
        }
        span {
            display: block;
            margin: 14px 17px;
        }
        body {
            background-repeat: repeat-y;
        }

        }
    </style>
</head>

<body>
    <div class="navbar">
        <?php include 'pages/navbar.php'; ?>
    </div>

    <?php
    if ($login) {
        echo '<div class="alert" id="alert"><strong class"success">Successful </strong>You are successfully logged in.</div>
    ';
    }
    ?>

    <?php
    if ($showError) {
        echo '<div class="Error" id="Error"><strong class="error">!Error </strong> ' . $showError . ' </div>
    ';
    }
    ?>
    <form action="index.php" method="post">
        <img src="css/image/avatar.png" class="avatar">
        <div class="main">
            <input type="text" id="username1" name="username1" placeholder="Enter your username" required>
            <input type="password" id="password1" name="password1" placeholder="Enter your password" required>
            <button type="submit">Login</button> <button type="reset">Reset</button>
            <span>Didn't have account <a href="registration1.php">Register</a><a href="pages/forget.php" style="color:white">forget pass</a></span>
        </div>
    </form>
</body>

</html>
