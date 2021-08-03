<?php
    if(isset($_POST['name'])){
     $server ="bhuoahjwctxzhvgsrlmw-mysql.services.clever-cloud.com";
     $username ="uav1lkeoowfeajs9";
     $password ="LQYP6q5feHi2kvSyNgkr";
     $dbname ="bhuoahjwctxzhvgsrlmw";
	 
     $con = mysqli_connect($server, $username, $password, $dbname);

     if(!$con){
         die("connection is failed due to" .
         mysqli_connect_error());
     }
    // echo "success connecting to the db";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $comment = $_POST['comment'];

    $sql ="INSERT INTO `contact` (`name`, `email`, `phone`, `comment`, `dt`) VALUES ('$name', '$email', '$phone', '$comment', current_timestamp());
    ";
    //echo $sql;

    if($con->query($sql) == true){
        echo "<h1>Thank you $name for get your responce.</h1>";
        echo "<p>we will contact you shortly</p>";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
}
?>


<html>
<head>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-styling: border-box;
        }

        h1 {
            color:red;
            font-family: arial;
            padding: 20px 20px 5px 30px;
        }
        
        p {
            font-family: cursive;
            font-size: 25px;
            padding: 5px 20px 20px 30px;
        }
    </style>
</head>
</html>