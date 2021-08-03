<?php

session_start();
include '../dbconnect.php';


if (isset($_POST['fid']) && $_POST['fid'] > 0) {
    $fid = $_POST['fid'];
    $sno = $_SESSION['sno'];
    $sql0 = "SELECT count(lno) FROM `likes` where `fid` = '$fid' AND `sno` = '$sno';";
    $result0 = mysqli_query($conn, $sql0);
    $num0 = mysqli_fetch_array($result0);
    if ($num0[0] > 0) {
        $type = 'unlike';
    } else {

        $type = 'like';
    }

    if ($type == 'like') {
        $sql = "update forum set likes = likes + 1 where fid='$fid';";
        $sql2 = "INSERT INTO `likes` (`sno`, `fid`) VALUES ('$sno', '$fid');";
        $result = mysqli_query($conn, $sql);
        $result2 = mysqli_query($conn, $sql2);
        $operation = 'likes';
    }

    if ($type == 'unlike') {
        $sql = "update forum set likes = likes - 1 where fid='$fid'";
        $sql2 = "DELETE FROM `likes` WHERE `likes`.`fid` = '$fid' AND `likes`.`sno` = '$sno';";
        $result = mysqli_query($conn, $sql);
        $result2 = mysqli_query($conn, $sql2);
        $operation = 'unlike';
    }

    $sql9 = "SELECT * FROM `forum` where `fid` = '$fid'";
    $result9 = mysqli_query($conn, $sql9);
    $num9 = mysqli_fetch_assoc($result9);
    $row=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `forum` where `fid` = '$fid'"));
    echo json_encode( [
        'operation'=> $operation,
        'likes'=>$row['likes']
    ]);
}

?>
