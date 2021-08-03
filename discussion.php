<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: index.php");
    exit;
}

include 'dbconnect.php';
$showAlert = false;
$showError = false;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/my_account.css">
    <link rel="stylesheet" href="css/forum.css">
    <script>
        if (window.history.replaceState) {

            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    <title>Discussion</title>
</head>

<body>

    <!--menu start-->
    <nav id="mydiv" style="z-index: 9">
        <label class="logo">Discussion</label>
        <ul>
            <li><a href="Home.php">Home</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">CyberSecurity</a>
            </li>
            <li><a href="pages/ethical-hacking.php" class="nav">E-Hacking</a></li>
            <li><a href="Home.php#contact" class="nav">Contact</a></li>
            <li><a href="forum.php" class="nav">Forum</a></li>
            <li><a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="nav">My Account</a></li>
        </ul>
    </nav>
    <!--menu end-->

    <!-- main subject start here -->
    <div class="sub" id="sub">

        <div class="postt" id="postt">

            <?php
            $fid = $_GET['fid'];

            $sql2 = "SELECT * FROM `forum` where fid = '$fid';";
            $result2 = mysqli_query($conn, $sql2);

            while ($row = mysqli_fetch_assoc($result2)) {
                //$puname = $row['puname'];
                $date2 = $row['date'];
                $date = date('jS   F Y h:i A', strtotime($date2));
                $point = $row['point'];
                $postcomment = $row['postcomment'];
                $sid = $row['sno'];
                $snoa = $_SESSION['sno'];
                // select puname from registration table by using sno in forum
                $sql3 = "SELECT * FROM `registration` where sno ='$sid';";
                $result3 = mysqli_query($conn, $sql3);
                $num2 = mysqli_num_rows($result3);
                if ($num2 == 1) {
                while ($row = mysqli_fetch_assoc($result3)) {
                    $puname = $row['name'];
                }
                    
                }
                else {
                    $puname ="Deleted Account";
                }
            }


            // echo 'Posted By: ' . $puname . '<br>';
            // echo $date . '<br>';
            // echo $point . '<br>';
            // echo $postcomment . '<br>';
            // echo $sid . '<br>';
            echo '<div class="dpoint"><img src="css/image/question.png" class="queavtar">' . $point . '</div>
            <div class="mid">Posted by <span class="heighlight">' . $puname;
            if ($sid == $snoa) {
                echo " (me)";
            }
            echo '</span> on <span class="heighlight">' . $date . '</span></div>
            <div class="message">' . $postcomment . '</div>';
            ?>

        </div>

        <div class="dispoint">Discussion</div>

        <!-- <div class="discussion"> -->

        <?php
        $sql4 = "SELECT * FROM `discussion` where fid = '$fid';";
        $result4 = mysqli_query($conn, $sql4);
        $noResult = true;

        while ($row = mysqli_fetch_assoc($result4)) {
            $noResult = false;
            $message = $row['message'];
            $date1 = $row['d_date'];
             $addtime = strtotime("05:30") - strtotime("00:00");
             $time = date('h:i A', strtotime($date1)+$addtime);
            $ddate = date('jS   F Y', strtotime($date1));
            //$ddate = date("d F Y H:i:s", $current_timestamp);
            $sno = $row['sno'];

            // select puname from registration table by using sno in forum
            $sql5 = "SELECT * FROM `registration` where sno ='$sno';";
            $result5 = mysqli_query($conn, $sql5);
            $num = mysqli_num_rows($result5);
            if ($num == 1) {
            while ($row = mysqli_fetch_assoc($result5)) {
                $uname = $row['username1'];
              }
            }
            else {
                $uname ="Deleted Account";
            }

            if ($snoa == $sno) {
                echo ' <div class="discussion discussion2">
                <div class="first"><img src="css/image/dicon.png" alt=""><span class="name">' . $uname . '</span><span class="active"> (me)</span> on: <span class="posttime"> ' . $ddate . '&nbsp;'. $time .'</span></div>
                <div class="second">' . $message . '</div>
                        </div>';
            } else {
                echo '<div class="discussion" id="discussion">
            <div class="first"><img src="css/image/dicon.png" alt=""><span class="name">' . $uname . ' </span>on: <span class="posttime"> ' . $ddate . '&nbsp;'. $time .'</span></div>
            <div class="second">' . $message . '</div>
                    </div>';
            }
        }
        if ($noResult) {
            echo '<div class="discussion"><span class="notdis">There is not a discussion yet</span></div>';
        }
        ?>

        <!-- for some time use threds will be show here -->



        <div class="discform">
            <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                <textarea name="discuss" id="discussionn" cols="45" rows="3" placeholder="Start discussion" required></textarea>
                <button type="submit" name="discsubmit">Post</button>
            </form>
        </div>

        <!-- chats will be post from here -->
        <?php
        if (isset($_POST['discsubmit'])) {
            $sno = $_SESSION['sno'];
            $discuss = $_POST['discuss'];
            $sign = array("&", "'", "/", '"', " ");
            $symbol = array("&amp;", "&apos;", "&sol;", '&quot;', "&nbsp;");
            $discuss = str_replace("<", "&lt;", $discuss);
            $discuss = str_replace(">", "&gt;", $discuss);
            $discuss = str_replace($sign, $symbol, $discuss);
            $sql7 = "INSERT INTO `discussion` (`message`, `sno`, `fid`, `d_date`) VALUES ('$discuss', '$sno', '$fid', current_timestamp());";
            $result7 = mysqli_query($conn, $sql7);
            if ($result7) {
                echo '<script>window.onload = function () {window.location.reload()}</script>';
                $showAlert = 'successfully posted';
            } else {
                $showError = 'unsuccessful to Post';
            }
        }

        ?>
    </div>
    <!-- main subject end here -->

    <footer>
        <h4 class="footer"><span class="copyright-symbol"> &#169; </span> All Rights Reserved By Dhiraj Mokal & Nachiket Lokhande.</h4>
    </footer>

    <!--login form start-->
    <div id="id01" class="modal">
        <form class="modal-content animate">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Account">&times;</span>
            </div>
            <div class="container">
                <h1 class="head-my-account">My Account</h1>


                <h4 class="user"><span class="user-symbol">&#xf007; Username: </span><?php echo $_SESSION['username1'] ?></h4>

                <h4 class="user"><span class="user-symbol">&#xf2b9; Name: </span><?php print_r($_SESSION['name']); ?></h4>

                <h4 class="user"><span class="user-symbol">&#9993; Email: </span><?php print_r($_SESSION['email']); ?></h4>

                <h4 class="user"><span class="user-symbol">&#9742; Mobile: </span><?php print_r($_SESSION['mobile']); ?></h4>

                <h4 class="user"><span class="user-symbol">&#x26A5; Gender: </span><?php print_r($_SESSION['gender']); ?></h4>

                <h4 class="user"><span class="user-symbol">&#128197; Date of Birth: </span><?php print_r($_SESSION['dob']); ?></h4>

                <h4 class="user"><span class="user-symbol">&#9962; Address: </span><?php print_r($_SESSION['address']); ?></h4>

                <hr>
                <div class="some">
                    <h4 class="update"><a href="update.php" class="update"> Update Account </a> </h4>
                    <h4 class="delete"><a href="delete.php" class="delete"> Delete Account </a> </h4>
                    <h4 class="certificate"><a href="pages/certificate/test.php" class="certificate"> Get Certificate </a> </h4>
                </div>
                <hr>
                <h4 class="logout"><a href="logout.php" class="logout"> Logout </a> </h4>

            </div>
        </form>
    </div>
    <!--login form end-->

    <!--javascript start-->
    <script src="script/script.js"></script>
    <!--javacript end-->
</body>

</html>

<?php
if ($showAlert) {
    echo '<div class="alert" id="alert"><strong class"success">Successful </strong>Record is Updated.</div>
    ';
}
?>

<?php
if ($showError) {
    echo '<div class="Error" id="Error"><strong class="error">!Error </strong> ' . $showError . ' </div>
    ';
}
?>