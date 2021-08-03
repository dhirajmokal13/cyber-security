<?php
include '../dbconnect.php';
session_start();

function GenerateSerial()
{
    $chars = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
    $sn = '';
    $max = count($chars) - 1;
    for ($i = 0; $i < 6; $i++) {
        $sn .= (!($i % 6) && $i ?: '') . $chars[rand(0, $max)];
    }
    return $sn;
}

$otp = GenerateSerial();

?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Forget Password</title>
</head>

<body>
    <?php
    if (isset($_POST['otp'])) {
        $getotp = true;
        $username = $_POST['username'];

        $sql = "SELECT * FROM `registration` where username1 ='$username';";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            while ($row = mysqli_fetch_assoc($result)) {
                $name = $row['name'];
                $email = $row['email'];
                $_SESSION['username'] = $row['username1'];
            }
            $_SESSION['otp'] = $otp;
            //email will be send from here
            include('smtp/PHPMailerAutoload.php');
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
            $mail->Subject = "Otp For Forget Password";
            $mail->Body = '<h1 style="margin: 1rem 0; font-family: arial; color: darkblue; ">Cyber-Security & Ethical Hacking</h1>
            <div style="margin-bottom: 1.5rem; margin-top:2.5rem; color: rgb(153, 149, 149);">
                   <h2>Hey <strong style="color:black">' . $name . '</strong></h2>
                   <h3>Otp For Forget Password:  <strong style="color:black">' . $otp . '</strong>.</h3>
               </div>
               <span style="float:left; margin-top:10px; margin-bottom: 16px;">Thank You.</style>
               <br>
             <div style="padding: 1rem 0.8rem; margin-bottom: 1rem; margin-top:2rem; background-color: rgba(141, 140, 135, 0.3); border-radius: 0.4rem; font-family:arial"><span style="color:red; display: block; margin-right: 0.3rem; margin-bottom: 0.5rem">please do not share this mail with anyone.</span>
                    please do not reply this mail. <br>In case you did not requested otp please contact us.
                </div>';
            $mail->SMTPOptions = array('ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => false
            ));
            if ($mail->send()) {
                m1();
            } else {
                echo 'mail could not be send';
            }

            //m1();
        } else {
            echo 'plaese enter valid username';
        }
    }

    if (isset($_POST['verify-otp'])) {
        $getotp = true;
        $otp = $_POST['ottp'];
        if ($_SESSION['otp'] == $otp) {
            echo '<div class="container mt-5" style="max-width: 40rem">
            <form action="' . $_SERVER['REQUEST_URI'] . '" method="post">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Enter New Password</label>
                    <input type="password" class="form-control" placeholder="Please Create New Password" name="password" required>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-outline-primary mb-3" name="change-pass">Submit</button>
                </div>
            </form>
        </div>';
        } else {
            echo 'plaese enter valid otp';
        }
    }

    if (isset($_POST['change-pass'])) {
        $getotp = true;
        $username = $_SESSION['username'];
        $password = $_POST['password'];

        $sql2 = "UPDATE `registration` SET `password1` = '$password' WHERE `registration`.`username1` = '$username';";
        $result2 = mysqli_query($conn, $sql2);
        if ($result2) {
            session_unset();
            session_destroy();
            echo '<script>window.location="../index.php";</script>';
            exit;
        } else {
            echo 'password could not be updated';
        }
    }

    function m1()
    {
        echo '<div class="container mt-5" style="max-width: 40rem">
        <form action="' . $_SERVER['REQUEST_URI'] . '" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Enter Otp</label>
                <input type="number" class="form-control" placeholder="Please Enter Otp" name="ottp" required>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-outline-primary mb-3" name="verify-otp">Submit</button>
            </div>
        </form>
    </div>';
    }


    if (!isset($getotp) == true) {
        echo '
    <div class="container mt-5" style="max-width: 40rem">
        <form action="' . $_SERVER['REQUEST_URI'] . '" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Forget Password</label>
                <input type="text" class="form-control" placeholder="Please Enter Your Username" name="username" required>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-outline-primary mb-3" name="otp">Request Otp</button>
            </div>
        </form>
    </div>';
    } else {
    }


    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>
