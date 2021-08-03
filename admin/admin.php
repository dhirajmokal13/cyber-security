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
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Admin Panel Contact</title>
</head>

<body>
  
    <?php include '_navbar.php'; ?>
    <h1 class="d-flex justify-content-center mt-2 mx-3" style="font-family:arial">Contact Form Data</h1>
    <?php
         $sql = "SELECT * FROM `contact`;";
         $result = mysqli_query($conn, $sql);
         while ($row = mysqli_fetch_assoc($result)) {
             $cname = $row['name'];
             $cemail = $row['email'];
             $cphone = $row['phone'];
             $ccomment = $row['comment'];
             $sno = $row['sno'];
             $cdat = $row['dt'];
             $addtime = strtotime("5:30") - strtotime("00:00");
             $time = date('h:i A', strtotime($cdat) + $addtime);
             $cdat = date('jS   F Y', strtotime($cdat));
    echo '
        <div class="jumbotron py-4 my-3" style="max-height:20rem; margin:0 3rem;">
            <h1 class="display-5 text-success">Name: '.$cname.'</h1>
            <p class="lead"><div class="mx-2" style="display:inline-block">Email: '.$cemail.'</div><div class="mx-2" style="display:inline-block">Mobile Number: '.$cphone.'</div><div class="mx-2" style="display:inline-block">Date of Post: '.$cdat.'&nbsp;'.$time.'</div></p>
            <hr class="my-4">
            <p>'.$ccomment.'</p>
            <a class="btn btn-outline-danger btn-lg py-1 px-3" href="delete.php?deletecontact='.$sno.'" role="button">Dalete</a>
        </div>';
         }
    ?>
  <?php
  include '_footer.php';
  ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>