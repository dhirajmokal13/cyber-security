<?php
session_start();
include 'dbconnect.php';
$showAlert = false;
$showError = false;

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/my_account.css">
    <link rel="stylesheet" href="css/forum.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script>
        if (window.history.replaceState) {

            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Forum</title>
</head>

<body>
    <!--menu start-->
    <nav id="mydiv" style="z-index: 9">
        <label class="logo">Forum</label>
        <ul>
            <li><a href="Home.php">Home</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">CyberSecurity</a>
            </li>
            <li><a href="pages/ethical-hacking.php" class="nav">E-Hacking</a></li>
            <li><a href="Home.php#contact" class="nav">Contact</a></li>
            <li><a href="forum.php" class="nav active">Forum</a></li>
            <li><a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="nav">My Account</a></li>
        </ul>
    </nav>
    <!--menu end-->


    <!-- main content will start here -->
    <h2 class="head1">Lets Solve Your Issues</h2>
    <div class="forum" id="forum">

        <!-- post your comment start here -->
        <div class="postp">
            <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                <label for="point">Topic Of Post</label>
                <input type="text" id="point" placeholder="Enter The Topic Of Post" class="point center" name="point" required>

                <label for="postcomment">Post</label>
                <textarea id="postcomment" name="postcomment" rows="5" cols="43" class="postcomment center" placeholder="Enter your comment here" required>Your Post will be goes here </textarea>
                <button type="submit" name="post-p" class="center">Post</button>
            </form>
        </div>
        <!-- post your comment end here -->
    </div>
    <!-- main content will end here -->

    <!-- center div start -->
    <div class="sort" id="sort">

        <form action="#" method="post" id="sorts">
            <select id="sorting" name="sorting">
                <option disabled="disabled" selected="selected">Forum Sorts</option>
                <?php foreach (['Older First', 'Creation Time', 'Subject'] as $sorts) : ?>
                    <option <?php if (isset($_POST["sorting"]) && $_POST["sorting"] == $sorts) echo "selected" ?> value="<?= $sorts; ?>"><?= $sorts; ?></option>
                <?php endforeach; ?>
            </select>
        </form>
        <h2>Users Questions</h2>
    </div>
    <!-- center div end -->

    <script type="text/javascript">
        $(document).ready(function() {
            $("#sorting").change(function() {
                $('#sorts').submit();
            })
        })
    </script>
    <!-- pulling data from database -->
    <?php
    if (isset($_POST["sorting"])) {
        $sort = $_POST["sorting"];
        if ($sort == "Older First") {
            $order = "ORDER BY fid ASC";
        } elseif ($sort == "Creation Time") {
            $order = "ORDER BY fid DESC";
        } elseif ($sort == "Subject") {
            $order = "ORDER BY point";
        }
    } else {
        $order = "ORDER BY fid DESC";
    }
    $limit = 10;
    //$order = "ORDER BY fid DESC";
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $start = ($page - 1) * $limit;
    $sql2 = "SELECT * FROM `forum` $order LIMIT $start, $limit;";
    $result2 = mysqli_query($conn, $sql2);
    $sno = $_SESSION['sno'];


    while ($row = mysqli_fetch_assoc($result2)) {
        // $puname = $row['puname'];
        $date1 = $row['date'];
        $addtime = strtotime("05:30") - strtotime("00:00");
        $time = date('h:i A', strtotime($date1) + $addtime);
        $date = date('jS   F Y', strtotime($date1));
        $point = $row['point'];
        $postcomment = $row['postcomment'];
        $fid = $row['fid'];
        $sno1 = $row['sno'];
        $likes = $row['likes'];
        // count the no of records
        $sql0 = "SELECT count(d_id) FROM `discussion` where fid = '$fid';";
        $result0 = mysqli_query($conn, $sql0);
        $num0 = mysqli_fetch_array($result0);

        $sql3 = "SELECT * FROM `registration` where sno ='$sno1';";
        $result3 = mysqli_query($conn, $sql3);
        $num3 = mysqli_num_rows($result3);
        if ($num3 == 1) {
            while ($row = mysqli_fetch_assoc($result3)) {
                $puname = $row['username1'];
            }
        } else {
            $puname = "Deleted Account";
        }

        echo '<div class="forumcon" id="forumcon">
       <div class="first" style="display:block;"><img src="css/image/icon.png" class="avtar">
           <div class="name">' . $puname . '</div>';

        //active or not check the user start
        if ($sno == $sno1) {
            echo ' <span class="active"> me </span>';
        }
        //our and other comment check

        echo ' <div class="timestamp">' . $date . '&nbsp;' . $time . '</div>';

        echo '
       </div>
       <div class="sub"><a href="discussion.php?fid=' . $fid . '" style="background:transparent;color: #a23b3b;">' . $point . '</a></div>
       <span class="message">' . $postcomment . '</span>
       <a href="discussion.php?fid=' . $fid . '" class="discussion-page">' . $num0[0] . ' Replies  <span class="material-icons" style="vertical-align:middle; font-size:2.8vh;">
       reply
       </span></a>';


        $sql8 = "SELECT count(lno) FROM `likes` where `fid` = '$fid' AND `sno` = '$sno';";
        $result8 = mysqli_query($conn, $sql8);
        $num8 = mysqli_fetch_array($result8);
        $likeClass = "like";
        if ($num8[0] > 0) {
            $likeClass = "liked";
        }

        echo '<span id="post' . $fid . '" style="margin-left: 9px" class="' . $likeClass . '" onclick="setLike(' . $fid . ')"><span id="likes">' . $likes . '</span> Like<span class="likk"></span>  <span class="material-icons" style="vertical-align:middle; font-size:2.8vh;">
            favorite_border
            </span></span>';


        if ($sno == $sno1) {
            echo ' <a href="pages/deletepost.php?deletefid=' . $fid . '" class="discussion-page">Remove <span class="material-icons" style="vertical-align:middle; font-size:2.8vh;">
       delete
       </span></a>';
        }
        echo ' </div>';
    }

    $sql01 = "SELECT count(fid) As fid FROM `forum`";
    $result01 = mysqli_query($conn, $sql01);
    $countlno = $result01->fetch_all(MYSQLI_ASSOC);
    $total = $countlno[0]['fid'];
    $pages = ceil($total / $limit);
    $previous = $page - 1;
    $next = $page + 1;
    echo '<div class="pagination">';

    if ($previous > 0) {
        echo '<a href="forum.php?page=' . $previous . '" title="Go to previous page">&laquo;</a>';
    } else {
        echo ' <a href="#" title="This is first page" style="color:grey">&laquo;</a>';
    }

    for ($i = 1; $i <= $pages; $i++) :
        if ($page == $i) {
            echo '<a class="active" href="#">' . $i . '</a>';
        } else {
            echo '<a href="forum.php?page=' . $i . '" title="Go to Page ' . $i . '">' . $i . '</a>';
        }
    endfor;


    if ($page >= $pages) {
        echo '
     <a href="#" style="color:grey" title="This is last page">&raquo;</a>';
    } else {
        echo '<a href="forum.php?page=' . $next . '" title="Go to next page">&raquo;</a>';
    }
    echo '</div>';
    ?>


    <?php
    if (isset($_POST['post-p'])) {
        // $puname = $_SESSION['username1'];
        $sno = $_SESSION['sno'];
        $point = $_POST['point'];
        $sign = array("&", "'", "/", '"', " ");
        $symbol = array("&amp;", "&apos;", "&sol;", '&quot;', "&nbsp;");
        $point = str_replace("<", "&lt;", $point);
        $point = str_replace(">", "&gt;", $point);
        $point = str_replace($sign, $symbol, $point);

        $comment = $_POST['postcomment'];
        $comment = str_replace("<", "&lt;", $comment);
        $comment = str_replace(">", "&gt;", $comment);
        $comment = str_replace($sign, $symbol, $comment);

        $sql = "INSERT INTO `forum` (`point`, `postcomment`, `sno`, `likes`,`date`) VALUES ('$point', '$comment', '$sno', '0', current_timestamp());";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo '<script>window.onload = function () {window.location.reload()}</script>';
            $showAlert = 'successfully posted';
        } else {
            $showError = 'unsuccessful to Post';
        }
    }

    ?>

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
    <script>
        function setLike(fid) {
            jQuery.ajax({
                url: 'pages/like.php',
                type: 'post',
                data: 'fid=' + fid,
                success: function(result) {
                    result = jQuery.parseJSON(result);
                    if(result.operation == 'likes'){
                        jQuery('#post'+fid).removeClass('like');
                        jQuery('#post'+fid).addClass('liked');
                    }
                    if(result.operation == 'unlike'){
                        jQuery('#post'+fid).removeClass('liked');
                        jQuery('#post'+fid).addClass('like');
                    }
                    jQuery('#post' + fid + ' #likes').html(result.likes);
                }
            })
        }
    </script>
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