<?php
$server ="bhuoahjwctxzhvgsrlmw-mysql.services.clever-cloud.com";
$username ="uav1lkeoowfeajs9";
$password ="LQYP6q5feHi2kvSyNgkr";
$database ="bhuoahjwctxzhvgsrlmw";

$conn = mysqli_connect($server, $username, $password, $database);
if(!$conn){
    
    die("Error".mysqli_connect_error());
}

?>