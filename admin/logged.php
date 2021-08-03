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
    <title>Logged</title>
</head>

<body>
    <!-- navbar start here -->
    <?php include '_navbar.php'; ?>
    <!-- navbar end here -->
    <h1 class="d-flex justify-content-center mt-3 mx-3 text-primary" style="font-family:arial">Logged</h1>
    <div class="container">
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb mt-5 mb-4">
                <li class="breadcrumb-item mr-1 mt-2 h5 text-primary">User</li>
                <li class="breadcrumb-item mr-1 mt-2 h5 text-primary">Status</li>
                <li class="breadcrumb-item mr-1 mt-2 h5 text-primary">IP Address</li>
                <li class="breadcrumb-item mr-1 mt-2 h5 text-primary">Date and Time</li>
                <li class="breadcrumb-item mr-1 mt-2 h5 text-danger">Remove</li>
                <li class="breadcrumb-item mr-1"><a href="delete.php?clearlog" class=" btn btn-outline-danger ml-3">Clear All</a></li>
            </ol>
        </nav>

        <!--php code start here-->
        <?php
        $limit = 10;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $start = ($page - 1) * $limit;
        $sql = "SELECT * FROM `login` ORDER BY lno DESC LIMIT $start, $limit ;";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $status = $row['status'];
            $ldate = $row['ldate'];
            $addtime = strtotime("05:30") - strtotime("00:00");
            $time = date('h:i A', strtotime($ldate)+$addtime);
            $idate = date('jS   F Y', strtotime($ldate));
            echo '
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb mt-2">
                <li class="breadcrumb-item mr-1" title="username">'.$row['uname'].'</li>';
            if ($status == 'Access Denied') {
                echo ' <li class="breadcrumb-item mr-1 text-danger" title="Status">'.$status.'</li>';
            } else {
                echo ' <li class="breadcrumb-item mr-1 text-success" title="status">'.$status.'</li>';
            }

            echo ' <li class="breadcrumb-item mr-1" title="Ip Addess">'.$row['ip'].'</li>
                <li class="breadcrumb-item mr-1" title="date and time">'.$idate.'&nbsp;'.$time.'</li>
                <li class="breadcrumb-item mr-1"><a href="delete.php?deletelog='.$row['lno'].'" class="ml-2 text-danger">remove</a></li>
            </ol>
        </nav>
           ';

        }
        $sql2 = "SELECT count(lno) AS lno FROM login";
        $result2 = mysqli_query($conn, $sql2);
        $countlno = $result2->fetch_all(MYSQLI_ASSOC);
        $total = $countlno[0] ['lno'];
        $pages = ceil($total / $limit);
        $previous = $page - 1;
        $next = $page + 1;
        if ($previous > 0) {
            echo '
         <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="logged.php?page='.$previous.'" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    ';
        } else {
            echo '
         <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    ';
        }
        for ($i = 1; $i <= $pages; $i++) :

        if($page == $i) {
            echo '
            <li class="page-item active">
      <a class="page-link" href="#">'.$i.' <span class="sr-only">(current)</span></a>
    </li>';
        }
        else {
        echo '
    <li class="page-item"><a class="page-link" href="logged.php?page='.$i.'">'.$i.'</a></li>';
        }

        endfor;

        if ($page >= $pages) {
            echo ' <li class="page-item disabled">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
         ';
        } else {
            echo ' <li class="page-item">
      <a class="page-link" href="logged.php?page='.$next.'" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
         ';
        }
        ?>

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