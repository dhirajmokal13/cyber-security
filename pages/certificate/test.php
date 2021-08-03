<?php
session_start();

include "../../dbconnect.php";
$score = $_SESSION['score'];
$showAlert = false;
$showError = false;

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
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
    <link rel="stylesheet" href="../../css/my_account.css">
    <title>Mcq Test For Certificate.</title>
</head>
<style>
    * {
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
}
body {
    font-family: Arial, Helvetica, sans-serif;
    background-image: url("../../css/image/test-bg.jpg");
    background-size: full;
    /* background-repeat: no-repeat; */
    height: 100%;
}
div.container {
        position: relative;
        top: 112px;
        display: block;
        background-color: rgb(222, 247, 253, 0.4);
        width: 95%;
        margin-left: 2.5%;
        margin-right: 2.5%;
        border-radius: 5px;
        z-index: 1;
        bottom: 20px;
        height: 1195px;
        margin-bottom: 135px;
        box-shadow: 0 0 45px rgb(238, 114, 98), 0 0 25px rgb(243, 55, 49);
    }

span.q {
    display: block;
    margin: 20px auto 10px auto;
    display: flex;
    justify-content: center;
    font-size: 1.6em;
    color:#003366;
}

div.que {
        display: flex;
        justify-content: center;
}

input[type=radio] {
    margin: 0 7px;
    font-size: 1.4;
    color: grey;
   
}
label {
       cursor: pointer;
}

div.buttons {
        display: flex;
        justify-content: center;
}

button.bt {
    margin: 10px 20px;
    padding: 7px 13px;
}
span.point {
           margin: 10px 24px;
           color: black;
}
    span.warn {
        color:rgb(241, 60, 60);
        font-size: 1.2em;
        display: flex;
        justify-content: center;
        margin-top: 15px;
    }

    h2.heading{
        display: flex;
        justify-content: center;
        font-size: 3em;
        margin-top: 10px;
        color: #ff0066;
    }
#direct {
        display:none;
        color:yellow;
        font-size: 1.2em;
        margin: 15px 34% 0 35%;
        background-color: rgba(0, 145, 0, 0.2);
        border: 1px solid green;
        padding: 5px 10px 5px 10px;
        border-radius: 8px;
}

button.bt {
  font-size: 15px;
  border-radius: 5px;
  background-color: rgb(40, 254, 116);
  cursor: pointer;
}

input[type=radio]:checked + label {
       background-color:  rgb(104, 236, 212, 0.4);
       padding: 4px 10px;
       border: 1px solid #020258;
       border-radius: 8px;
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
    z-index: 1;
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
    z-index: 1;
}
strong.error {
    color: red;
}
strong.success {
    color: green;
}

/* message show end */

</style>
<body>
<!--menu start-->
<nav id="mydiv" style="z-index: 9;">
    <label class="logo">Quiz For Certificate</label>
    <ul>
      <li><a href="../../Home.php">Home</a></li>
      <li class="dropdown">
  <a href="#" class="dropbtn">CyberSecurity</a>
  
</li>
      <li><a href="../ethical-hacking.php" class="nav">E-Hacking</a></li>
      <li><a href="../../Home.php#contact" class="nav">Contact</a></li>
  <li><a href="../../Home.php#About" class="nav">About us</a></li>
  <li><a href="#" class="active">test</a></li>
      
    </ul>
  </nav>
<!--menu end-->

    <div class="container">
    <form action="" method="post">
    <h2 class="heading">Mcq Quiz For Get Certificate.</h2>
    <span class="warn">Minimum Score for pass this Exam is 7/10.</span>
    <a href="certificate.php" id="direct">Go For Certificate. your Score is <?php print_r($_SESSION['score']); ?>/10.</a>
    <!-- first question start here -->
   <span class="q">1. What Type of Hacker is generally Known as Ethical Hacker ?</span>
    <div class="que">
      <span class="point"><input type="radio" name="qone" value="1" id="a" required/><label for="a">A. BlackHat Hacker</label></span>
      <span class="point"><input type="radio" name="qone" value="2" id="b" required/><label for="b">B. GreyHat Hacker</label></span>
      <span class="point"><input type="radio" name="qone" value="3" id="c" required/><label for="c">C. WhiteHat Hacker</label></span>
      <span class="point"><input type="radio" name="qone" value="4" id="d" required/><label for="d">D. None</label></span>
    </div>
    <!-- first question end here -->

    <!-- second question start here -->
    <span class="q">2. what is First Phase of Hacking ?</span>
    <div class="que">
      <span class="point"><input type="radio" name="qtwo" value="1" id="e" required/><label for="e">A. Attack</label></span>
      <span class="point"><input type="radio" name="qtwo" value="2" id="f" required/><label for="f">B. Scanning</label></span>
      <span class="point"><input type="radio" name="qtwo" value="3" id="g" required/><label for="g">C. Maintaining Access</label></span>
      <span class="point"><input type="radio" name="qtwo" value="4" id="h" required/><label for="h">D. Reconnaissance</label></span>
    </div>
    <!-- second question end here -->

    <!-- third question start here -->
    <span class="q">3. which linux distribution is mostly used for Hacking and pentesting ?</span>
    <div class="que">
      <span class="point"><input type="radio" name="qthree" value="1" id="i" required/><label for="i">A. parrot os</label></span>
      <span class="point"><input type="radio" name="qthree" value="2" id="j" required/><label for="j">B. Kali Linux</label></span>
      <span class="point"><input type="radio" name="qthree" value="3" id="k" required/><label for="k">C. Ubantu</label></span>
      <span class="point"><input type="radio" name="qthree" value="4" id="l" required/><label for="l">D. Black Arch Linux</label></span>
    </div>
    <!-- third question end here -->

    <!-- fourth question start here -->
    <span class="q">4. Nslookup can be used to gather information regarding which of the following ?</span>
    <div class="que">
      <span class="point"><input type="radio" name="qfour" value="1" id="m" required/><label for="m">A. Host names and IP addresses</label></span>
      <span class="point"><input type="radio" name="qfour" value="2" id="n" required/><label for="n">B. Whois information</label></span>
      <span class="point"><input type="radio" name="qfour" value="3" id="o" required/><label for="o">C. DNS server locations</label></span>
      <span class="point"><input type="radio" name="qfour" value="4" id="p" required/><label for="p">D. OS Version</label></span>
    </div>
    <!-- fourth question end here -->

    <!-- fifth question start here -->
    <span class="q">5. What port number does HTTPS use ?</span>
    <div class="que">
      <span class="point"><input type="radio" name="qfive" value="1" id="q" required/><label for="q">A. 80</label></span>
      <span class="point"><input type="radio" name="qfive" value="2" id="r" required/><label for="r">B. 53</label></span>
      <span class="point"><input type="radio" name="qfive" value="3" id="s" required/><label for="s">C. 21</label></span>
      <span class="point"><input type="radio" name="qfive" value="4" id="t" required/><label for="t">D. 443</label></span>
    </div>
    <!-- fifith question end here -->

    <!-- sixth question start here -->
    <span class="q">6. By the ...... Section of Indian Cyber law Goverment Has Power To block a website ?</span>
    <div class="que">
      <span class="point"><input type="radio" name="qsix" value="1" id="u" required/><label for="u">A. Section-69</label></span>
      <span class="point"><input type="radio" name="qsix" value="2" id="v" required/><label for="v">B. Section-65</label></span>
      <span class="point"><input type="radio" name="qsix" value="3" id="w" required/><label for="w">C. Section-66</label></span>
      <span class="point"><input type="radio" name="qsix" value="4" id="x" required/><label for="x">D. Section-43A</label></span>
    </div>
    <!-- sixth question end here -->

    <!-- seventh question start here -->
    <span class="q">7. What is entry level certification in field of Ethical Hacking ?</span>
    <div class="que">
      <span class="point"><input type="radio" name="qseven" value="1" id="y" required/><label for="y">A. OSCP</label></span>
      <span class="point"><input type="radio" name="qseven" value="2" id="z" required/><label for="z">B. CISSP</label></span>
      <span class="point"><input type="radio" name="qseven" value="3" id="aa" required/><label for="aa">C. CEH</label></span>
      <span class="point"><input type="radio" name="qseven" value="4" id="bb" required/><label for="bb">D. LPT</label></span>
    </div>
    <!-- seventh question end here -->

    <!-- eighth question start here -->
    <span class="q">8. What is ethical way to earn money ?</span>
    <div class="que">
      <span class="point"><input type="radio" name="qeight" value="1" id="cc" required/><label for="cc">A. Scamming</label></span>
      <span class="point"><input type="radio" name="qeight" value="2" id="dd" required/><label for="dd">B. Bug Bounty</label></span>
      <span class="point"><input type="radio" name="qeight" value="3" id="ee" required/><label for="ee">C. Password Cracking</label></span>
      <span class="point"><input type="radio" name="qeight" value="4" id="ff" required/><label for="ff">D. Hack The Bank System</label></span>
    </div>
    <!-- eighth question end here -->

    <!-- nineth question start here -->
    <span class="q">9. What is two Basic Type Of Attack ?</span>
    <div class="que">
      <span class="point"><input type="radio" name="qnine" value="1" id="gg" required/><label for="gg">A. Active</label></span>
      <span class="point"><input type="radio" name="qnine" value="2" id="hh" required/><label for="hh">B. Passive</label></span>
      <span class="point"><input type="radio" name="qnine" value="3" id="ii" required/><label for="ii">C. Dos</label></span>
      <span class="point"><input type="radio" name="qnine" value="4" id="jj" required/><label for="jj">D. Both A & B</label></span>
    </div>
    <!-- nineth question end here -->
    
    <!-- tenth question start here -->
    <span class="q">10. The Main Aim of Dos Attack is Distroy ..... ?</span>
    <div class="que">
      <span class="point"><input type="radio" name="qten" value="1" id="kk" required/><label for="kk">A. Network</label></span>
      <span class="point"><input type="radio" name="qten" value="2" id="ll" required/><label for="ll">B. System</label></span>
      <span class="point"><input type="radio" name="qten" value="3" id="mm" required/><label for="mm">C. Website</label></span>
      <span class="point"><input type="radio" name="qten" value="4" id="nn" required/><label for="nn">D. Router</label></span>
    </div>
    <!-- tenth question end here -->

    <hr>
    
    <div class="buttons">
    <button type="submit" class="bt" name="submit">Submit</button>
    <button type="Reset" class="bt">Reset</button>
    </div>
    </form>

    </div>
  
</body>
</html>

<?php 

if(isset($_POST['submit'])) {
  $username = $_SESSION['username1'];
  $list = explode(';', $_REQUEST['qone']);
  foreach ($list as $name) {
    //$value = $_REQUEST[$name];
    $q1 = $_POST['qone'];
    $q2 = $_POST['qtwo'];
    $q3 = $_POST['qthree'];
    $q4 = $_POST['qfour'];
    $q5 = $_POST['qfive'];
    $q6 = $_POST['qsix'];
    $q7 = $_POST['qseven'];
    $q8 = $_POST['qeight'];
    $q9 = $_POST['qnine'];
    $q10 = $_POST['qten'];
    
  }
    
  $score1 = 0;

  if($q1 == 3) {
		$score1++;
		}

  if($q2 == 4) {
    $score1++;
    }

  if($q3 == 2) {
    $score1++;
    }

  if($q4 == 1) {
    $score1++;
    }

  if($q5 == 4) {
    $score1++;
    }
  
  if($q6 == 1) {
    $score1++;
    }

  if($q7 == 3) {
    $score1++;
    }

  if($q8 == 2) {
    $score1++;
    }

  if($q9 == 4) {
    $score1++;
    }

  if($q10 == 3) {
    $score1++;
    }

    if ($score1 < 7) {
      $showError = "you failed this test your score is ". $score1 . "/10";
    }
  elseif($score1 < $score) {
              $showError = "your previous test mark is: " .$score. "/10 and this test mark is: " .$score1. "/10 That's why Score Couldn't be updated.";
  }

  elseif (($score1 >= 7) || ($score1)) {
    $sql="UPDATE `registration` SET `score` = '$score1' WHERE `registration`.`username1` = '$username';";
    $result = mysqli_query($conn, $sql);
    if($result){
      $showAlert = "you passed the test your score is: " .$score1. "/10";
  }
  
  else {
  $showError = "Score Could Not Update";
  }
  $_SESSION['score'] = $score1;
  
  ?>
<script type='text/javascript'>
     document.getElementById("direct").style.display = "block";
     
    </script>
 <?php

  }
}
?>

<?php
if($score >=7) {

?>
<script type='text/javascript'>
     document.getElementById("direct").style.display = "block";
     </script>
 <?php
}

?>

<!-- message handling start here -->
<?php
    if($showAlert){
   echo '<div class="alert" id="alert"><strong class"success">Successful </strong>'. $showAlert .'</div>
    ';
    }
    ?>
    
    <?php
    if($showError){
      echo '<div class="Error" id="Error"><strong class="error">!Error </strong> '. $showError .' </div>
    ';
    }
    ?>
<!-- message handling end here -->
