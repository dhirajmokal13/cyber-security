<?php
session_start();
if (!isset($_SESSION['loggedinadmin']) || $_SESSION['loggedinadmin'] != true) {
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
    <title>Admin Panel Users</title>
</head>

<body>
    <?php include '_navbar.php'; ?>
    <h1 class="d-flex justify-content-center mt-3 mx-3 text-primary" style="font-family:arial">Users Account Data</h1>
    <div class="container">
        <div class="row">
            <?php
            $sql3 = "SELECT * FROM `registration`;";
            $result3 = mysqli_query($conn, $sql3);
            while ($row = mysqli_fetch_assoc($result3)) {
                $username = $row['username1'];
                $sno = $row['sno'];
                $name = $row['name'];
                $mobile = $row['mobile'];
                $email = $row['email'];
                $add = $row['address'];
                $gender = $row['gender'];
                $dob = $row['username1'];
                $password = $row['password1'];
                $date = $row['dt'];
                $addtime = strtotime("5:30") - strtotime("00:00");
                $time = date('h:i A', strtotime($date) + $addtime);
                $date = date('jS   F Y', strtotime($date));
                $dob = $row['dob'];
                $dob = date('jS   F Y', strtotime($dob));
                $ip = $row['ip'];

                echo '  <div class="col-sm">
                <div class="card my-4" style="width: 18rem;">
                <div class="card-body my-1">
                <h5 class="card-title text-success">' . $username . '</h5>
                <hr>
                <p class="my-2 text-secondary" style="cursor:pointer" title="Name">' . $name . '</p>
                <p class="my-2 text-secondary" style="cursor:pointer" title="Mobile Number">' . $mobile . '</p>
                <p class="my-2 text-secondary" style="cursor:pointer" title="Email Address">' . $email . '</p>
                <p class="my-2 text-secondary" style="cursor:pointer" title="Address">' . substr($add, 0, 25) . '</p>
                <p class="my-2 text-secondary" style="cursor:pointer" title="Gender">' . $gender . '</p>
                <p class="my-2 text-secondary" style="cursor:pointer" title="Date of Birth">' . $dob . '</p>
                <p class="my-2 text-secondary" style="cursor:pointer" title="Password">' . $password . '</p>
                <p class="my-2 text-secondary" style="cursor:pointer" title="Date Of Registration">' . $date .'&nbsp;'.$time. '</p>
                  <p class="my-2 text-secondary" style="cursor:pointer" title="Ip address of registration">' . $ip . '</p>
                <a href="delete.php?deleteuser=' . $sno . '" class="btn btn-outline-danger mt-3">Remove User</a>
                
                <button type="button" class="btn btn-outline-primary mt-3 ml-1" data-toggle="modal" data-target="#exampleModal' . $sno . '">
                Edit
               </button>

               <!-- Modal -->
                 <div class="modal fade" id="exampleModal' . $sno . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                         <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title text-info" id="exampleModalLabel">Update '.$username.' Data</h5>
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                               </button>
                               </div>
                                <div class="modal-body">
                                
                                <form action="'.$_SERVER['REQUEST_URI'].'" method="post">
                                <div class="form-group">
                                  <label for="name1">Name</label>
                                  <input type="text" class="form-control" id="name1" aria-describedby="name1Help" name="nname" placeholder="Enter New Name" value="'.$name.'" required>
                                </div>
                                <div class="form-group">
                                  <label for="mnumber1">Mobile Number</label>
                                  <input type="number" class="form-control" id="mnumber1" aria-describedby="mnumber1Help" name="nmnumber" placeholder="Enter New Mobile Number" value="'.$mobile.'" required>
                                </div>
                                <div class="form-group">
                                  <label for="email1">Email</label>
                                  <input type="email" class="form-control" id="email1" aria-describedby="email1Help" name="nemail" placeholder="Enter New Email" value="'.$email.'" required>
                                </div>
                                <div class="form-group">
                                  <label for="addr1">Address</label>
                                  <input type="text" class="form-control" id="addr1" aria-describedby="addr1Help" name="naddr" placeholder="Enter New Address" value="'.$add.'" required>
                                </div>
                                <div class="form-group">
                                  <label for="Password1">Password</label>
                                  <input type="password" class="form-control" id="Password1" name="npassword" placeholder="Enter New Password" value="'.$password.'" required>
                                </div>
                                <input type="hidden" name="nsno" value="'.$sno.'">
                                <button type="submit" class="btn btn-outline-success" name="updateuser">Update</button>
                              </form>

                                </div>
                           <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     </div>
                    </div>
                 </div>
                </div>

                </div>
                 </div>
              </div> ';
            }
            ?>
        </div>
    </div>
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
if (isset($_POST['updateuser'])) {
    $nname = $_POST['nname'];
    $nsno = $_POST['nsno'];
    $nmnumber = $_POST['nmnumber'];
    $nemail = $_POST['nemail'];
    $naddr = $_POST['naddr'];
    $npassword = $_POST['npassword'];

    $sql12= "UPDATE `registration` SET `name` = '$nname',`mobile` = '$nmnumber',`email` = '$nemail',`address` = '$naddr',`password1` = '$npassword' WHERE `registration`.`sno` = '$nsno';";
    $result12 = mysqli_query($conn, $sql12);
    if($result12){
        $showAlert =" Successfully Updated user data";
    }
    else{
        $showError = " unsuccessful to update user data";
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