<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: index.php");
    exit;
}
?>



<?php
$showAlert = false;
$showError = false;
include "dbconnect.php";
$username = $_SESSION['username1'];

if(isset($_POST['name-update'])){
    $name = $_POST['name'];
  $sql="UPDATE `registration` SET `name` = '$name' WHERE `registration`.`username1` = '$username';";
  $result = mysqli_query($conn, $sql);
  if($result){
    $showAlert = true;
    $_SESSION['name'] = $name;
}

else {
$showError = "Record Could Not Update";
}

}

elseif(isset($_POST['mobile-update'])){
  $mobile = $_POST['mobile'];
$sql="UPDATE `registration` SET `mobile` = '$mobile' WHERE `registration`.`username1` = '$username';";
$result = mysqli_query($conn, $sql);
if($result){
  $showAlert = true;
  $_SESSION['mobile'] = $mobile;
}

else {
$showError = "Record Could Not Update";
}

}

elseif(isset($_POST['email-update'])){
  $email = $_POST['email'];
$sql="UPDATE `registration` SET `email` = '$email' WHERE `registration`.`username1` = '$username';";
$result = mysqli_query($conn, $sql);
if($result){
  $showAlert = true;
  $_SESSION['email'] = $email;
}

else {
$showError = "Record Could Not Update";
}

}

elseif(isset($_POST['address-update'])){
  $address = $_POST['address'];
$sql="UPDATE `registration` SET `address` = '$address' WHERE `registration`.`username1` = '$username';";
$result = mysqli_query($conn, $sql);
if($result){
  $showAlert = true;
  $_SESSION['address'] = $address;
}

else {
$showError = "Record Could Not Update";
}

}

elseif(isset($_POST['dob-update'])){
  $dob = $_POST['dob'];
$sql="UPDATE `registration` SET `dob` = '$dob' WHERE `registration`.`username1` = '$username';";
$result = mysqli_query($conn, $sql);
if($result){
  $showAlert = true;
  $_SESSION['dob'] = $dob;
}

else {
$showError = "Record Could Not Update";
}

}

elseif(isset($_POST['password-update'])){
  $password1 = $_POST['password1'];
$sql="UPDATE `registration` SET `password1` = '$password1' WHERE `registration`.`username1` = '$username';";
$result = mysqli_query($conn, $sql);
if($result){
  $showAlert = true;
}

else {
$showError = "Record Could Not Update";
}

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/my_account.css">
    <title>Update The user data</title>
    <style>
    * {
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
}

body {
     align-items: center;
     font-family: arial;
     background-image: url("css/image/login-bg2.jpg");
     background-size: cover;
     background-repeat: no-repeat;
}

/* message show start */

div.alert {
    background-color: rgba(0, 145, 0, 0.2);
    color: rgb(14, 34, 14);
    width: 100%;
    height: 40px;
    padding: 5px 20px;
    font-size: 20px;
    border-bottom: 1px solid green;
    position: absolute;
    top:60px;
    z-index: -1;
}

div.Error {
    background-color: rgb(248, 27, 27, 0.2);
    color: #fff;
    width: 100%;
    height: 40px;
    padding: 5px 20px;
    font-size: 20px;
    border-bottom: 1px solid red;
    position: absolute;
    top:60px;
    z-index: -1;
}
strong.error {
    color: red;
}
strong.success {
    color: green;
}

/* message show end */

/* footer start here */

footer {
  position: absolute;
   /* top: 900px; */
  bottom: 0;
  width:100%;
  height:1.3cm;
  background-color:black;
  color:white;
  text-align:center;
}

h4.footer {
    padding: 10px 25px 5px 25px;
 }

/* footer end here */
        .paragraph {
            border: 1px solid #4CAF50;
            cursor: pointer;
            padding: 7px 23px;
            /* height: 35px; */
            width: 45%;
            font-size: 18px;
            border-radius: 7px;
            color: white;
        }

        .clsbtn {
                  cursor: pointer; 
                  height: 37px;
                  width: 20px;
                  color:red;
                  font-size: 20px;
                }

#upform {
        margin: 20px 20%;
        position: relative;
        top: 80px;
        display: block;
        z-index: 1;
        background-color: rgba(10, 10, 10, 0.5);
        padding: 15px 50px;
        border-radius: 10px;
        box-shadow: 0 0 25px rgb(238, 114, 98), 0 0 5px rgb(243, 55, 49);
}

input[type=text],input[type=date],input[type=password],input[type=number],input[type=email]
  {
    height: 35px;
    width: 80%;
    font-size: 18px;
    border-radius: 7px;
    outline: none;
    padding: 5px 23px;
    color: black;
    border: 2px solid #4CAF50;
    box-shadow: 0 0 25px rgb(243, 240, 84), 0 0 5px rgb(118, 139, 0);
  }

  input[type=text]:focus,input[type=date]:focus,input[type=password]:focus,input[type=number]:focus,input[type=email]:focus
  {
    border: 2px solid red;
  }
form {
  display: flex;
  flex-wrap: nowrap;
  /* margin: 28px 20%; */
  margin: 28px 0 28px 0;
  
}


button{
  height: 32px;
  width: 75px;
  margin-top: 5px;
  font-size: 16px;
  border-radius: 5px;
  outline:none;
  border-radius: 7px;
  padding: 5px 11px;
  background-color: rgb(8, 148, 8);
}

button:focus {
    background-color: rgb(59, 247, 59);
    transition: 0.5s;
    box-shadow: 0 0 25px rgb(243, 240, 84), 0 0 5px rgb(118, 139, 0);
}
/* image upload code end */
    </style>
</head>
<body>
<!--menu start-->
<nav id="mydiv">
    <label class="logo">Update</label>
    <ul>
      <li><a href="Home.php">Home</a></li>
      <li class="dropdown">
  <a href="#" class="dropbtn">CyberSecurity</a>
  
</li>
      <li><a href="pages/ethical-hacking.php" class="nav">E-Hacking</a></li>
      <li><a href="Home.php#contact" class="nav">Contact</a></li>
  <li><a href="Home.php#About" class="nav">About us</a></li>
  <li><a href="#" class="active">Update</a></li>
      
    </ul>
  </nav>
<!--menu end-->
  <!-- image start here -->
 
<!-- image end here -->
<?php
    if($showAlert){
   echo '<div class="alert" id="alert"><strong class"success">Successful </strong>Record is Updated.</div>
    ';
    }
    ?>
    
    <?php
    if($showError){
      echo '<div class="Error" id="Error"><strong class="error">!Error </strong> '. $showError .' </div>
    ';
    }
    ?>

  <div id="upform">
   <span class="paragraph" style="display:inline-block; width: 45%; margin-top: 15px;" title="You Can't change Username"> 
    <?php echo $_SESSION['username1'] ?> 
   </span>
     <!-- name start here -->
    <form action="" method="post">
        <span id="inputname" style="display:none">
          <input type="text" placeholder="Enter New Name" name="name" id="name" required>
          <button type="submit" name="name-update">Update</button>
          <span onclick="M002()" style="margin: 0 6px" class="clsbtn" title="close">&#x2715</span>
        </span>
        <span onclick="M001()" style="display:inline-block" id="para1" class="paragraph" title="click here to update name">
         <?php echo $_SESSION['name'] ?>  
         </span>
    </form>
     <!-- name end here -->
     
     <!-- mobile number start here -->
     <form action="" method="post">
     
        <span id="inputmnum" style="display:none">
          <input type="number" placeholder="Enter New Mobile Number" name="mobile" id="mobile" required>
          <button type="submit" name="mobile-update">Update</button>
          <span onclick="M004()" style="margin: 0 6px" class="clsbtn" title="close">&#x2715</span>
        </span>
        <span onclick="M003()" style="display:inline-block" id="para2" class="paragraph" title="click here to update mobile number"> 
        <?php print_r($_SESSION['mobile']); ?> 
        </span>
      
    </form>
     <!-- mobile number end here -->

     <!-- email start here -->
     <form action="" method="post">
        <span id="inputemail" style="display:none">
          <input type="email" placeholder="Enter New Email" name="email" id="email" required>
          <button type="submit" name="email-update">Update</button>
          <span onclick="M006()" style="margin: 0 6px" class="clsbtn" title="close">&#x2715</span>
        </span>
        <span onclick="M005()" style="display:inline-block" id="para3" class="paragraph" title="click here to update email"> 
        <?php print_r($_SESSION['email']); ?>
         </span>
    </form>
     <!-- email end here -->

     <!-- address start here -->
     <form action="" method="post">
        <span id="inputaddr" style="display:none">
          <input type="text" placeholder="Enter New Address" name="address" id="address" required>
          <button type="submit" name="address-update">Update</button>
          <span onclick="M008()" style="margin: 0 6px" class="clsbtn" title="close">&#x2715</span>
        </span>
        <span onclick="M007()" style="display:inline-block" id="para4" class="paragraph" title="click here to update address">
         <?php print_r($_SESSION['address']); ?>
          </span>
    </form>
     <!-- address end here -->

     <!-- date of birth start here -->
     <form action="" method="post">
        <span id="inputdob" style="display:none">
          <input type="date" name="dob" id="dob" required>
          <button type="submit" name="dob-update">Update</button>
          <span onclick="M010()" style="margin: 0 6px" class="clsbtn" title="close">&#x2715</span>
        </span>
        <span onclick="M009()" style="display:inline-block" id="para5" class="paragraph" title="click here to update date of birth">
        <?php print_r($_SESSION['dob']); ?>
        </span>
    </form>
     <!-- date of birth end here -->

     <!-- password start here -->
     <form action="" method="post">
      <span id="inputpass" style="display:none">
        <input type="password" placeholder="Enter New Password" name="password1" id="password1" required>
        <button type="submit" name="password-update">Update</button>
        <span onclick="M012()" style="margin: 0 6px" class="clsbtn" title="close">&#x2715</span>
      </span>
      <span onclick="M011()" style="display:inline-block" id="para6" class="paragraph" title="click here to update password">*********</span>
  </form>
     <!-- password end here -->

  </div>

  <footer>
    <h4 class="footer"><span class="copyright-symbol"> &#169; </span>  All Rights Reserved By Dhiraj Mokal & Nachiket Lokhande.</h4>
  </footer>
    <script>
        
        function M001(){
         document.getElementById("inputname").style.display ="inline-block";
      document.getElementById("para1").style.display ="none";
        }
        
      function M002(){
         document.getElementById("inputname").style.display ="none";
      document.getElementById("para1").style.display ="inline-block";
        }


        function M003(){
         document.getElementById("inputmnum").style.display ="inline-block";
      document.getElementById("para2").style.display ="none";
        }
        
      function M004(){
         document.getElementById("inputmnum").style.display ="none";
      document.getElementById("para2").style.display ="inline-block";
        }



        function M005(){
         document.getElementById("inputemail").style.display ="inline-block";
      document.getElementById("para3").style.display ="none";
        }
        
      function M006(){
         document.getElementById("inputemail").style.display ="none";
      document.getElementById("para3").style.display ="inline-block";
        }



        function M007(){
         document.getElementById("inputaddr").style.display ="inline-block";
      document.getElementById("para4").style.display ="none";
        }
        
      function M008(){
         document.getElementById("inputaddr").style.display ="none";
      document.getElementById("para4").style.display ="inline-block";
        }



      function M009(){
         document.getElementById("inputdob").style.display ="inline-block";
      document.getElementById("para5").style.display ="none";
        }
        
      function M010(){
         document.getElementById("inputdob").style.display ="none";
      document.getElementById("para5").style.display ="inline-block";
        }


        function M011(){
         document.getElementById("inputpass").style.display ="inline-block";
      document.getElementById("para6").style.display ="none";
        }
        
      function M012(){
         document.getElementById("inputpass").style.display ="none";
      document.getElementById("para6").style.display ="inline-block";
        }

       </script>

      
</body>
</html>
