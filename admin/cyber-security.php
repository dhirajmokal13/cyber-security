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
    <title>Manage Cyber-Security</title>
</head>

<body>
    <?php include '_navbar.php'; ?>
    <h1 class="d-flex justify-content-center mt-3 mx-3 text-primary" style="font-family:arial">Manage Cyber-Security Here</h1>

    <!-- main container start here -->
    <div class="container">
        <nav class="mt-5 mb-3">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="network-tab" data-toggle="tab" href="#nav-network" role="tab" aria-controls="nav-network" aria-selected="true">Network</a>
                <a class="nav-item nav-link" id="nav-application-tab" data-toggle="tab" href="#nav-application" role="tab" aria-controls="nav-application" aria-selected="false">Application</a>
                <a class="nav-item nav-link" id="nav-information-tab" data-toggle="tab" href="#nav-information" role="tab" aria-controls="nav-information" aria-selected="false">Information</a>
                <a class="nav-item nav-link" id="nav-operational-tab" data-toggle="tab" href="#nav-operational" role="tab" aria-controls="nav-operational" aria-selected="false">operational</a>
                <a class="nav-item nav-link" id="nav-drbc-tab" data-toggle="tab" href="#nav-drbc" role="tab" aria-controls="nav-drbc" aria-selected="false">Disaster Recovery And Business Continuity</a>
                <a class="nav-item nav-link" id="nav-laws-tab" data-toggle="tab" href="#nav-laws" role="tab" aria-controls="nav-laws" aria-selected="false">Indian Cyber Laws</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <!-- network security start here -->
            <div class="tab-pane fade show active pt-2" id="nav-network" role="tabpanel" aria-labelledby="nav-network-tab">
                <h1 class="display-5 mb-3 mt-6 text-secondary">Network Security</h1>
                <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                    <div class="form-group">
                        <label for="title">Enter The Title Here</label>
                        <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title" placeholder="Enter The Title" required>
                    </div>
                    <div class="form-group">
                        <label for="paragraph">Paragraph</label>
                        <textarea class="form-control" id="paragraph" rows="3" name="paragraph" placeholder="Enter Paragraph Content here" required></textarea>
                    </div>
                    <input type="hidden" name="prno" value="1">
                    <button type="submit" class="btn btn-outline-primary" name="page">Submit</button>
                </form>

                <h2 class="display-5 mb-3 text-success" style="margin-top: 1.7rem">Recently Added</h1>
                    <?php
                    $sql8 = "SELECT * FROM `pages` where prno = '1';";
                    $result8 = mysqli_query($conn, $sql8);
                   

                    while ($row = mysqli_fetch_assoc($result8)) {
                        
                        $title1 = $row['title'];
                        $paragraph1 = $row['paragraph'];
                        $pno = $row['pno'];

                        echo '
                    <div class="card mt-4">
                     <h5 class="card-header text-secondary">' . $title1 . '</h5>
                      <div class="card-body">
                       <p class="card-text">' . $paragraph1 . '</p>
                          <a href="delete.php?deletepage=' . $pno . '" class="btn btn-outline-danger">Remove</a>
                          <a href="updatepost.php?updatepage=' . $pno . '" class="btn btn-outline-success">Edit</a>
                      </div>
                     </div>
                    ';
                    }
                    
                    ?>

            </div>
            <!-- network security end here -->

            <!-- application security start here -->
            <div class="tab-pane fade pt-2" id="nav-application" role="tabpanel" aria-labelledby="nav-application-tab">
                <h1 class="display-5 mb-3 mt-6 text-secondary">Application Security</h1>
                <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                    <div class="form-group">
                        <label for="title">Enter The Title Here</label>
                        <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title" placeholder="Enter The Title" required>
                    </div>
                    <div class="form-group">
                        <label for="paragraph">Paragraph</label>
                        <textarea class="form-control" id="paragraph" rows="3" name="paragraph" placeholder="Enter Paragraph Content here" required></textarea>
                    </div>
                    <input type="hidden" name="prno" value="2">
                    <button type="submit" class="btn btn-outline-primary" name="page">Submit</button>
                </form>

                <h2 class="display-5 mb-3 text-success" style="margin-top: 1.7rem">Recently Added</h1>
                    <?php
                    $sql8 = "SELECT * FROM `pages` where prno = '2';";
                    $result8 = mysqli_query($conn, $sql8);

                    while ($row = mysqli_fetch_assoc($result8)) {
                        $title1 = $row['title'];
                        $paragraph1 = $row['paragraph'];
                        $pno = $row['pno'];

                        echo '
                    <div class="card mt-4">
                     <h5 class="card-header text-secondary">' . $title1 . '</h5>
                      <div class="card-body">
                       <p class="card-text">' . $paragraph1 . '</p>
                          <a href="delete.php?deletepage=' . $pno . '" class="btn btn-outline-danger">Remove</a>
                          <a href="updatepost.php?updatepage=' . $pno . '" class="btn btn-outline-success">Edit</a>
                      </div>
                     </div>
                    ';
                    }
                    ?>
            </div>
            <!-- application security end here -->

            <!-- information security start here -->
            <div class="tab-pane fade" id="nav-information" role="tabpanel" aria-labelledby="nav-information-tab">
                <h1 class="display-5 mb-3 mt-6 text-secondary">Information Security</h1>
                <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                    <div class="form-group">
                        <label for="title">Enter The Title Here</label>
                        <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title" placeholder="Enter The Title" required>
                    </div>
                    <div class="form-group">
                        <label for="paragraph">Paragraph</label>
                        <textarea class="form-control" id="paragraph" rows="3" name="paragraph" placeholder="Enter Paragraph Content here" required></textarea>
                    </div>
                    <input type="hidden" name="prno" value="3">
                    <button type="submit" class="btn btn-outline-primary" name="page">Submit</button>
                </form>

                <h2 class="display-5 mb-3 text-success" style="margin-top: 1.7rem">Recently Added</h1>
                    <?php
                    $sql8 = "SELECT * FROM `pages` where prno = '3';";
                    $result8 = mysqli_query($conn, $sql8);

                    while ($row = mysqli_fetch_assoc($result8)) {
                        $title1 = $row['title'];
                        $paragraph1 = $row['paragraph'];
                        $pno = $row['pno'];

                        echo '
                    <div class="card mt-4">
                     <h5 class="card-header text-secondary">' . $title1 . '</h5>
                      <div class="card-body">
                       <p class="card-text">' . $paragraph1 . '</p>
                          <a href="delete.php?deletepage=' . $pno . '" class="btn btn-outline-danger">Remove</a>
                          <a href="updatepost.php?updatepage=' . $pno . '" class="btn btn-outline-success">Edit</a>
                      </div>
                     </div>
                    ';
                    }
                    ?>
            </div>
            <!-- information security end here -->

            <!-- operational security start here -->
            <div class="tab-pane fade" id="nav-operational" role="tabpanel" aria-labelledby="nav-operational-tab">
                <h1 class="display-5 mb-3 mt-6 text-secondary">Operational Security</h1>
                <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                    <div class="form-group">
                        <label for="title">Enter The Title Here</label>
                        <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title" placeholder="Enter The Title" required>
                    </div>
                    <div class="form-group">
                        <label for="paragraph">Paragraph</label>
                        <textarea class="form-control" id="paragraph" rows="3" name="paragraph" placeholder="Enter Paragraph Content here" required></textarea>
                    </div>
                    <input type="hidden" name="prno" value="4">
                    <button type="submit" class="btn btn-outline-primary" name="page">Submit</button>
                </form>

                <h2 class="display-5 mb-3 text-success" style="margin-top: 1.7rem">Recently Added</h1>
                    <?php
                    $sql8 = "SELECT * FROM `pages` where prno = '4';";
                    $result8 = mysqli_query($conn, $sql8);

                    while ($row = mysqli_fetch_assoc($result8)) {
                        $title1 = $row['title'];
                        $paragraph1 = $row['paragraph'];
                        $pno = $row['pno'];

                        echo '
                    <div class="card mt-4">
                     <h5 class="card-header text-secondary">' . $title1 . '</h5>
                      <div class="card-body">
                       <p class="card-text">' . $paragraph1 . '</p>
                          <a href="delete.php?deletepage=' . $pno . '" class="btn btn-outline-danger">Remove</a>
                          <a href="updatepost.php?updatepage=' . $pno . '" class="btn btn-outline-success">Edit</a>
                      </div>
                     </div>
                    ';
                    }
                    ?>
            </div>
            <!-- operational security end here -->

            <!-- drdc start here -->
            <div class="tab-pane fade" id="nav-drbc" role="tabpanel" aria-labelledby="nav-drbc-tab">
                <h1 class="display-5 mb-3 mt-6 text-secondary">Disaster Recovery And Business Continuity</h1>
                <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                    <div class="form-group">
                        <label for="title">Enter The Title Here</label>
                        <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title" placeholder="Enter The Title" required>
                    </div>
                    <div class="form-group">
                        <label for="paragraph">Paragraph</label>
                        <textarea class="form-control" id="paragraph" rows="3" name="paragraph" placeholder="Enter Paragraph Content here" required></textarea>
                    </div>
                    <input type="hidden" name="prno" value="5">
                    <button type="submit" class="btn btn-outline-primary" name="page">Submit</button>
                </form>

                <h2 class="display-5 mb-3 text-success" style="margin-top: 1.7rem">Recently Added</h1>
                    <?php
                    $sql8 = "SELECT * FROM `pages` where prno = '5';";
                    $result8 = mysqli_query($conn, $sql8);

                    while ($row = mysqli_fetch_assoc($result8)) {
                        $title1 = $row['title'];
                        $paragraph1 = $row['paragraph'];
                        $pno = $row['pno'];

                        echo '
                    <div class="card mt-4">
                     <h5 class="card-header text-secondary">' . $title1 . '</h5>
                      <div class="card-body">
                       <p class="card-text">' . $paragraph1 . '</p>
                          <a href="delete.php?deletepage=' . $pno . '" class="btn btn-outline-danger">Remove</a>
                          <a href="updatepost.php?updatepage=' . $pno . '" class="btn btn-outline-success">Edit</a>
                      </div>
                     </div>
                    ';
                    }
                    ?>
            </div>
            <!-- drdc end here -->

            <!-- indian cyber laws start here -->
            <div class="tab-pane fade" id="nav-laws" role="tabpanel" aria-labelledby="nav-laws-tab">
                <h1 class="display-5 mb-3 mt-6 text-secondary">Indian Cyber-Laws</h1>
                <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                    <div class="form-group">
                        <label for="title">Enter The Title Here</label>
                        <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title" placeholder="Enter The Title" required>
                    </div>
                    <div class="form-group">
                        <label for="paragraph">Paragraph</label>
                        <textarea class="form-control" id="paragraph" rows="3" name="paragraph" placeholder="Enter Paragraph Content here" required></textarea>
                    </div>
                    <input type="hidden" name="prno" value="6">
                    <button type="submit" class="btn btn-outline-primary" name="page">Submit</button>
                </form>

                <h2 class="display-5 mb-3 text-success" style="margin-top: 1.7rem">Recently Added</h1>
                    <?php
                    $sql8 = "SELECT * FROM `pages` where prno = '6';";
                    $result8 = mysqli_query($conn, $sql8);

                    while ($row = mysqli_fetch_assoc($result8)) {
                        $title1 = $row['title'];
                        $paragraph1 = $row['paragraph'];
                        $pno = $row['pno'];

                        echo '
                    <div class="card mt-4">
                     <h5 class="card-header text-secondary">' . $title1 . '</h5>
                      <div class="card-body">
                       <p class="card-text">' . $paragraph1 . '</p>
                          <a href="delete.php?deletepage=' . $pno . '" class="btn btn-outline-danger">Remove</a>
                          <a href="updatepost.php?updatepage=' . $pno . '" class="btn btn-outline-success">Edit</a>
                      </div>
                     </div>
                    ';
                    }
                    ?>
            </div>
            <!-- indian cyber laws end here -->
        </div>
    </div>
    <!-- main container end here   -->

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
if (isset($_POST['page'])) {
    $title = $_POST['title'];
    $sign = array("&", "'", "/", '"', " ");
    $symbol = array("&amp;", "&apos;", "&sol;", '&quot;',"&nbsp;");
    $title = str_replace("<", "&lt;", $title);
    $title = str_replace(">", "&gt;", $title);
    $title = str_replace($sign, $symbol, $title);

    $paragraph = $_POST['paragraph'];
    $paragraph = str_replace("<", "&lt;", $paragraph);
    $paragraph = str_replace(">", "&gt;", $paragraph);
    $paragraph = str_replace($sign, $symbol, $paragraph);
    $prno = $_POST['prno'];

    $sql4 = "INSERT INTO `pages` (`title`, `paragraph`, `prno`, `idate`) VALUES ('$title', '$paragraph', '$prno', current_timestamp());";
    $result4 = mysqli_query($conn, $sql4);
    if ($result4) {
        $showAlert = ' successfully Added';
    } else {
        $showError = ' unsuccessful to Add';
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
