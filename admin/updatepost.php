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
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Admin Panel Users</title>
</head>

<body>
    <?php include '_navbar.php'; ?>
    <h1 class="d-flex justify-content-center mt-3 mx-3 text-primary" style="font-family:arial">Users Account Data</h1>
    <div class="conatiner">

        <?php
       
        if (isset($_GET['updatepage'])) {
            $pno = $_GET['updatepage'];
           
            $sql10 = "SELECT * FROM `pages` where pno = '$pno';";
            $result10 = mysqli_query($conn, $sql10);
            while ($row = mysqli_fetch_assoc($result10)) {
                  $title3 = $row['title'];
                  $paragraph3 = $row['paragraph'];
                  $prno = $row['prno'];
            }
            
        }
        ?>

     <div class="container">
        <h1 class="display-5 mb-3 mt-6 text-secondary">Update Content of Website</h1>
        <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
            <div class="form-group">
                <label for="title">Enter The Title Here</label>
                <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title" placeholder="Enter The Title" value="<?php echo $title3 ?>" required>
            </div>
            <div class="form-group">
                <label for="paragraph">Paragraph</label>
                <textarea class="form-control" id="paragraph" rows="3" name="paragraph" placeholder="Enter Paragraph Content here" required><?php echo $paragraph3 ?></textarea>
            </div>
            <input type="hidden" name="prno" value="1">
            <button type="submit" class="btn btn-outline-primary" name="page">Submit</button>
        </form>
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
 if (isset($_POST['page'])){
     $title = $_POST['title'];
     $paragraph = $_POST['paragraph'];

     $sqll= "UPDATE `pages` SET `title` = '$title',`paragraph` = '$paragraph' WHERE `pages`.`pno` = '$pno';";
     $resultt = mysqli_query($conn, $sqll);
     if(($resultt) && ($prno <= 6)){
        echo "<script>location.href='cyber-security.php';</script>";
     }
     elseif(($resultt) && ($prno >= 7)){
        echo "<script>location.href='ethical-hacking.php';</script>";
     }
     else{
         echo 'cannot modify';
     }
 }
?>