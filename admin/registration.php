<?php
session_start();
if(!isset($_SESSION['loggedinadmin']) || $_SESSION['loggedinadmin']!=true){
    header("location: ../index.php");
    exit;
}

include '../dbconnect.php';
$username = $_SESSION['username1'];
$name = $_SESSION['name'];
$aid = $_SESSION['aid'];
$showAlert = false;
$showError = false;
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script>
        if (window.history.replaceState) {

            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    <title>registration For Admin</title>
</head>

<body>
    <?php include '_navbar.php'; ?>
    <h1 class="d-flex justify-content-center mt-3 mx-3 text-primary" style="font-family:arial">Create New Admin Account</h1>

    <!-- forms start here -->
    <div class="container" style="min-height:38vh">
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="nameHelp" autocomplete="off" name="name" placeholder="Enter Your Name" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" aria-describedby="usernameHelp" autocomplete="off" name="username" placeholder="Create Username" required>
            </div>
            <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" class="form-control" id="Password" autocomplete="off" name="password" placeholder="Create Password" required>
            </div>
            <div class="form-group">
                <label for="CPassword">Confirm Password</label>
                <input type="password" class="form-control" id="CPassword" autocomplete="off" name="cpassword" placeholder="Confirm Password" required>
            </div>
            <button type="submit" class="btn btn-outline-primary" name="createadmin">Create Account</button>
        </form>
    </div>
    <!-- forms end here -->

    <!-- footer start here -->
    <?php
    include '_footer.php';
    ?>
    <!-- footer end here -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>

<?php
if (isset($_POST['createadmin'])) {
    $name1 = $_POST['name'];
    $username1 = $_POST['username'];
    $password1 = $_POST['password'];
    $cpassword1 = $_POST['cpassword'];

    // echo $name1;
    // echo $username1;
    // echo $password1;
    // echo $cpassword1;
    $existSql = "SELECT * FROM `admin` WHERE username = '$username1'";
    $result5 = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result5);
    $existSql2 = "SELECT * FROM `registration` WHERE username1 = '$username1'";
    $result6 = mysqli_query($conn, $existSql2);
    $numExistRows2 = mysqli_num_rows($result6);
    if ($numExistRows > 0) {
        //$exists = true;
        $showError = " Username already exists in admin";
    } elseif ($numExistRows2) {
        $showError = " Username already exists in Users";
    } else {
        if (($password1 == $cpassword1)) {
            $sql5 = "INSERT INTO `admin` (`username`, `password`, `name`) VALUES ('$username1', '$password1', '$name1');";
            $result6 = mysqli_query($conn, $sql5);
            if ($result6) {
                $showAlert = " Admin Account Successfully Created";
            }
        } else {
            $showError = " Passwords do not match";
        }
    }
}
?>

<?php
if ($showAlert) {
    echo '<div class="alert alert-success alert-dismissible fade show position-absolute" role="alert" style="top:58px; width: 100%;">
   <strong>Succesful </strong>' . $showAlert . '                     
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>
    ';
}
?>

<?php
if ($showError) {
    echo '<div class="alert alert-warning alert-dismissible fade show position-absolute" role="alert" style="top: 58px; width: 100%;">
  <strong>!Error</strong>' . $showError . '
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    ';
}
?>