<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header("location: Home.php");
    exit;
}
?>

<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    include "dbconnect.php";
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $username1 = $_POST['username1'];
    $password1 = $_POST['password1'];
    $cpassword1 = $_POST['cpassword1'];
    $ip =  $_SERVER['REMOTE_ADDR'];
    //$exists = false;
    //check whether this username exist
    $existSql = "SELECT * FROM `registration` WHERE username1 = '$username1'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    $existSql2 = "SELECT * FROM `admin` WHERE username = '$username1'";
    $result2 = mysqli_query($conn, $existSql2);
    $numExistRows2 = mysqli_num_rows($result2);
    if (($numExistRows > 0) || ($numExistRows2 > 0)) {
        //$exists = true;
        $showError = "Username already exists";
    } else {
        //$exists = false;

        if (($password1 == $cpassword1)) {
            $sql = "INSERT INTO `registration` (`name`, `mobile`, `email`, `address`, `gender`, `dob`, `username1`, `password1`, `dt`, `score`, `ip`) VALUES ('$name', '$mobile', '$email', '$address', '$gender', '$dob', '$username1', '$password1', current_timestamp(), '0', '$ip');";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showAlert = true;

                include('pages/smtp/PHPMailerAutoload.php');
                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host = "smtp.gmail.com";
                $mail->Port = 587;
                $mail->SMTPSecure = "tls";
                $mail->SMTPAuth = true;
                $mail->Username = "dhirajmokal14@gmail.com";
                $mail->Password = "8668893166";
                $mail->SetFrom("dhirajmokal14@gmail.com");
                $mail->addAddress($email);
                $mail->IsHTML(true);
                $mail->Subject = "Registration Successfull";
                $mail->Body = '<h1 style="margin: 1rem 0; font-family: arial; color: darkblue; ">Cyber-Security & Ethical Hacking</h1>
            <div style="margin-bottom: 1.5rem; margin-top:2.5rem; color: rgb(153, 149, 149);">
                   <h2>Hey congratulations <strong style="color:black">' . $name . '</strong></h2>
                   <h3>Your Account On our website is Successfully created</h3>
                   <h3>Now You can login and use.</h3>
               </div>
               <span style="float:left; margin-top:10px; margin-bottom: 16px;">Thank You.</style>
               <br>
             <div style="padding: 1rem 0.8rem; margin-bottom: 1rem; margin-top:2rem; background-color: rgba(141, 140, 135, 0.3); border-radius: 0.4rem; font-family:arial"><span style="color:red; display: block; margin-right: 0.3rem; margin-bottom: 0.5rem">please do not share this mail with anyone.</span>
                    please do not reply this mail. <br>In case you are not created Account please contact us.
                </div>';
                $mail->SMTPOptions = array('ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => false
                ));

                if ($mail->send()) {
                    //echo "Mail send";
                    echo '<script>window.location="index.php";</script>';
                } else {
                    // echo "Error occur";
                }
            }
        } else {
            $showError = "Passwords do not match";
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
    <title>Registration form</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
        }

        body {
            background-image: url("css/image/re.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }

        div.main {
            max-width: 55%;
            background-color: rgba(10, 10, 10, 0.5);
            margin-right: auto;
            margin-left: auto;
            border-radius: 7px;
            display: block;
            padding: 20px;
            border: 1px solid rgb(177, 3, 32);
            position: relative;
            top: 107px;
        }

        div.main:hover {
            box-shadow: 0 0 25px rgb(238, 114, 98), 0 0 5px rgb(243, 55, 49);
        }

        h1 {
            margin: 0 10%;
            color: rgb(59, 247, 59);
            font-size: 42px;
            font-family: arial;
        }

        span {
            font-size: 18px;

        }

        a {
            padding-left: 8px;
        }

        input[type=text],
        input[type=number],
        input[type=email],
        input[type=password],
        input[type=date] {
            width: 50%;
            margin: 15px 10%;
            height: 35px;
            border-radius: 5px;
            padding: 3px 5px 3px 7px;
            outline: none;
            font-size: 17px;
            cursor: pointer;
            border: 1px solid black;
        }

        input[type=text]:focus,
        input[type=number]:focus,
        input[type=email]:focus,
        input[type=password]:focus,
        input[type=date]:focus {
            border: 2px solid rgb(59, 247, 59);
            height: 37px;
            width: 52%;
            transition-delay: 0.3s;
            font-size: 19px;
            box-shadow: 0 0 25px rgb(243, 240, 84), 0 0 5px rgb(118, 139, 0);
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
            margin-right: 50px;
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

        .buttons {
            margin: 20px 70px;
        }

        .gender {

            display: flex;
            color: rgb(253, 231, 231);
            font-size: 20px;
            margin: 5px 10%;
            /* border :1px solid rgb(59, 247, 59); */
            width: 50%;
            border-radius: 6px;
        }

        input[type=radio] {

            cursor: pointer;
            display: none;
        }

        label {
            padding: 7px 30px;
            border: 1px solid rgb(59, 247, 59);
            border-radius: 6px;
            cursor: pointer;
        }

        input[type=radio]:checked+label {
            background-color: rgb(59, 247, 59);
            box-shadow: 0 0 25px rgb(243, 240, 84), 0 0 5px rgb(118, 139, 0);
        }

        div.alert {
            background-color: rgba(0, 145, 0, 0.2);
            color: rgb(14, 34, 14);
            width: 100%;
            height: 40px;
            padding: 5px 20px;
            font-size: 20px;
            border-bottom: 1px solid green;
            position: absolute;
            top: 60px;
        }

        div.Error {
            background-color: rgb(248, 27, 27, 0.2);
            color: #fff;
            width: 100%;
            height: 40px;
            padding: 5px 20px;
            font-size: 20px;
            border-bottom: 1px solid red;
            position: absolute;
            top: 60px;
        }

        strong.error {
            color: red;
        }

        strong.success {
            color: green;
        }

        @media only screen and (max-width: 500px) {
            div.main {
                max-width: 95%;
                padding: 14px 20px;
            }

            .gender {
                font-size: 18px;
                margin: 10px 0%;
            }

            input[type=text],
            input[type=number],
            input[type=email],
            input[type=password],
            input[type=date] {
                margin: 10px 0%;
                width: 100%;
            }

            button {
                margin-right: 30px;
            }

            .buttons {
                margin: 20px 0%;
            }

            span {
                display: block;
               margin-top: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="navbar">
        <?php include 'pages/navbar.php'; ?>
    </div>

    <?php
    if ($showAlert) {
        echo '<div class="alert" id="alert"><strong class"success">Successful </strong>your account is created you now login.</div>
    ';
    }
    ?>

    <?php
    if ($showError) {
        echo '<div class="Error" id="Error"><strong class="error">!Error </strong> ' . $showError . ' </div>
    ';
    }
    ?>

    <form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
        <div class="main">
            <h1>Registration</h1>
            <!--name start-->
            <input type="text" id="name" name="name" placeholder="Name here" required />
            <!--name end-->

            <!--mobile number start-->
            <input type="number" id="mobile" name="mobile" placeholder="Mobile Number" required />
            <!--mobile number end-->

            <!--email start-->
            <input type="email" id="email" name="email" placeholder="Email" maxlength="30" required />
            <!--email end-->

            <!--address start-->
            <input type="text" id="address" name="address" placeholder="Address" />
            <!--address end-->

            <!--gender start-->
            <div class="gender">
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label><br>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label><br>
                <input type="radio" id="other" name="gender" value="other">
                <label for="other">Other</label>
            </div>
            <!--gender end-->

            <!--birth of date start-->
            <input type="date" id="dob" name="dob" placeholder="Date of birth" placeholder="dd-mm-yyyy" required />
            <!--birth of date end-->

            <!--username start-->
            <input type="text" id="username1" name="username1" placeholder="Username"  maxlength="20" required />
            <!--username end-->

            <!--password start-->
            <input type="password" id="password1" name="password1" placeholder="Create Password" maxlength="20" required />
            <input type="password" id="cpassword1" name="cpassword1" placeholder="Conform Password" maxlength="20" required />
            <!--password end-->

            <!--buttons start-->
            <div class="buttons">
                <button type="submit" class="bu">Submit</button> <button type="reset" class="re">Reset</button>
                <span>Already Have Account <a href="index.php">Login</a></span>
            </div>
            <!--buttons end-->
        </div>
    </form>
    <script>

    </script>
</body>

</html>