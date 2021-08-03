<?php

echo '<nav id="mydiv">
      <label class="logo">Cyber Security</label>
      <ul>
        <li><a class="nav" href="#" title="Login For Access">Home</a></li>
        <li><a href="#"  title="Login For Access"  class="nav">Cyber Security</a></li>
        <li><a href="#" class="nav"  title="Login For Access">E-Hacking</a></li>
        <li><a href="#contact" class="nav"  title="Login For Access">Contact</a></li>
		<li><a href="#About" class="nav"  title="Login For Access">About us</a></li> 
        <li><a href="index.php" class="nav active"  title="you can login/Register here">login</a></li> 

      </ul>
    </nav>';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0"/>
<style>

nav{
 /* background: #b4b4b4; */
  height: 60px;
  width: 100%;
  position: fixed;
  /* opacity :0.9; */
  background :rgb(180, 180, 180,0.6);
}
label.logo {
  color: #000000;
  font-size: 40px;
  line-height: 58px;
  padding: 0 20px;
  font-family: fantasy;
}
nav ul{
  float: right;
  margin-right: 20px;
}
nav ul li{
  display: inline-block;
  line-height: 60px;
  margin: 0 5px;
}
nav ul li a{
  color: white;
  font-size: 17px;
  padding: 7px 13px;
  border-radius: 3px;
  text-transform: uppercase;
}
a.active,a:hover{
  background: #787878;
  transition: .5s;
}
.checkbtn{
  font-size: 30px;
  color: white;
  float: right;
  line-height: 60px;
  margin-right: 40px;
  cursor: pointer;
  display: none;
}
#check{
  display: none;
}
li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 100px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 5px 10px;
  text-decoration: none;
  display: block;
  text-align: left;
  font-size: 15px;
  line-height: 40px;
}

.dropdown-content a:hover {
	background-color: #ddd;
	/*border-bottom:2px solid black;
	color:blue;*/
}

.dropdown:hover .dropdown-content {
  display: block;
}


</style>
</head>
<title>Home of cyber security</title>
<body>

<!--My account Section-->

<!--javascript start-->
<script src="../script/script.js"></script>
<!--javacript end-->
</body>
</html>