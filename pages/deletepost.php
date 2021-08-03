<?php
$fid = $_GET['deletefid'];
include "../dbconnect.php";

$sql ="DELETE FROM `forum` WHERE `forum`.`fid` = '$fid';";
$result = mysqli_query($conn, $sql);
if($result){
    $sql2 = "DELETE FROM `discussion` WHERE `discussion`.`fid` = '$fid';";
    $result2 = mysqli_query($conn, $sql2);
    $sql3 = "DELETE FROM `likes` WHERE `likes`.`fid` = '$fid';";
    $result3 = mysqli_query($conn, $sql3);
    if(($result2) &&($result3)){
        header("location: ../forum.php");
    }
    else {
        echo "unknown error occured";
    }
}
else{
    echo "unknown error occured";
}
exit;
?>