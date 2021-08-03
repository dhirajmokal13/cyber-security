<?php
include '../dbconnect.php';

if(isset($_GET['deletecontact'])){
    $sno = $_GET['deletecontact'];
    $sql2 ="DELETE FROM `contact` WHERE `contact`.`sno` = '$sno';";
    $result2 = mysqli_query($conn, $sql2);

    if($result2){
        header("location: admin.php");
      exit;
    }
}

if(isset($_GET['deleteuser'])){
  $sno = $_GET['deleteuser'];
  $sql2 ="DELETE FROM `registration` WHERE `registration`.`sno` = '$sno';";
  $result2 = mysqli_query($conn, $sql2);

  if($result2){
    header("location: users.php");
  exit;
}
}

if(isset($_GET['deletepage'])){
  $pno = $_GET['deletepage'];
  $sql2 ="DELETE FROM `pages` WHERE `pages`.`pno` = '$pno';";
  $result2 = mysqli_query($conn, $sql2);

  if($result2){
    header("location: cyber-security.php");
  exit;
}
}

if(isset($_GET['deletepage2'])){
  $pno = $_GET['deletepage2'];
  $sql2 ="DELETE FROM `pages` WHERE `pages`.`pno` = '$pno';";
  $result2 = mysqli_query($conn, $sql2);

  if($result2){
    header("location: ethical-hacking.php");
  exit;
}
}

if(isset($_GET['clearlog'])){

 // $sql2 ="TRUNCATE `cyber`.`login`;";

 $sql2 = "TRUNCATE TABLE `login`;";
  $result2 = mysqli_query($conn, $sql2);

  if($result2){
    header("location: logged.php");
  exit;
}
}

if(isset($_GET['deletelog'])){

  $lno = $_GET['deletelog'];

  $sql2 ="DELETE FROM `login` WHERE `login`.`lno` = '$lno';";
  $result2 = mysqli_query($conn, $sql2);

  if($result2){
    header("location: logged.php");
  exit;
}
}

?>
