<?php 
session_start();

include "dbconnect.php";
$username = $_SESSION['username1'];

$sql ="DELETE FROM `registration` WHERE `registration`.`username1` = '$username';";
$result = mysqli_query($conn, $sql);
if($result){
session_unset();
session_destroy();
header("location: index.php");
exit;
}
?>