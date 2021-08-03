<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location: index.php");
  exit;
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
  <link rel="stylesheet" href="../css/cybersecurity.css">
  <link rel="stylesheet" href="../css/my_account.css">
  <style>
    /*  contact start  */
    div.contact {
      width: 95%;
      margin-left: auto;
      margin-right: auto;
      padding: 30px 30px 0 30px;
      box-shadow: 0 0 45px rgb(98, 238, 208), 0 0 25px rgb(58, 136, 226);
      text-align: center;
      background-image: url('../css/image/cyber-security-1805632.png');

      background-size: cover;
    }

    .contact h3.head {
      font-size: 38px;
      font-family: arial;
      color: rgb(233, 30, 30);

    }

    h3.head {
      font-size: 30px;
      font-family: arial;
    }

    input[type=text].cont,
    input[type=email].cont,
    input[type=number].cont {
      height: 40px;
      width: 37%;
      padding: 13px 13px 13px 13px;
      margin-top: 25px;
      margin-bottom: 30px;
      font-size: 2vw;
      background-color: rgb(255, 235, 235, 0.8);
      border: 1px solid red;
      border-radius: 6px;
    }

    input[type=text].cont:focus,
    input[type=email].cont:focus,
    input[type=number].cont:focus,
    textarea:focus {
      border: 2px solid rgb(10, 7, 161);
      box-shadow: 0 0 25px rgb(4, 130, 161), 0 0 5px rgb(102, 233, 233);

    }

    @media only screen and (max-width: 500px) {

      input[type=text].cont,
      input[type=email].cont,
      input[type=number].cont {
        width: 80%;
        font-size: 5vw;
      }

      .contact textarea {
        width: 90%;
        height: 20vw;
      }

      .contact button.con {
        width: 27vw;
        font-size: 3.5vw;
        padding: 3%;
        margin: 5%;
        border-radius: 10%;
      }

      .contact h3.head{
        font-size: 30px;
      }

      #id01 .modal-content {
        width: 95%;
      }
    }

    textarea {
      width: 48%;
      height: 12vw;
      padding: 15px 20px 15px 20px;
      margin-top: 25px;
      font-size: 17px;
      background-color: rgb(255, 235, 235, 0.8);
      border-radius: 6px;
      outline: none;
      border: 1px solid red;
    }

    button.con {
      margin: 3%;
      width: 13vw;
      font-size: 1.6vw;
      padding: 1.3%;
      border-radius: 15px;
      outline: none;
      font-weight: bold;
      color: white;
      background-image: linear-gradient(to right, rgb(0, 162, 255), rgb(81, 38, 224));
      border: 1px solid red;
    }

    button.con:focus {
      background-image: linear-gradient(to right, rgb(12, 146, 7), rgb(0, 255, 221));
    }

    /* contact end */

    table {
      background-color: #ffffff;
      width: 95%;
      margin: 30px auto;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      border: none;
      border-collapse: collapse;
      padding-bottom: 30px;
    }

    table td {
      padding: 10px 20px;
    }

    table th {
      background-color: #f59fa6;
      padding-top: 20px;
      padding-bottom: 16px;
      font-size: 21px;
      word-spacing: 10px;
      letter-spacing: 2.5px;
    }

    tr:nth-child(even) {
      background-color: #affa4c6c;
    }

    /* delete update and certificate start here */
    div.some {
      display: flex;
      font-family: arial;
    }



    h4.certificate,
    h4.update,
    h4.delete {
      display: inline-flex;
      padding: 6px 10px;
      background-color: #a23b3b;
      margin: 4px 8px;
      border-radius: 5px;

    }

    a.update,
    a.delete,
    a.certificate {
      background-color: transparent;
      color: white;
    }

    h4.update:hover,
    h4.delete:hover,
    h4.certificate:hover,
    h4.update:focus,
    h4.delete:focus,
    h4.certificate:focus {
      background-color: red;
    }

    /* delete update and certificate end here */
  </style>
  <title>Information Security</title>
</head>

<body>
  <!--menu start-->
  <nav id="mydiv">
    <label class="logo">Information Security</label>
    <ul>
      <li><a href="../Home.php">Home</a></li>
      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn active">CyberSecurity</a>
        <div class="dropdown-content">
          <a href="network security.php">Network Security</a>
          <a href="application security.php">Application Security</a>
          <a href="information security.php">Information Security</a>
          <a href="operational security.php">Operational Security</a>
          <a href="disaster ricovery and business continuity.php">Disaster Ricovery & Business Continuity</a>
          <a href="indian cyber laws.php">Indian cyber Laws</a>
        </div>
      </li>
      <li><a href="ethical-hacking.php" class="nav">E-Hacking</a></li>
      <li><a href="#contact" class="nav">Contact</a></li>
      <li><a href="../Home.php#About" class="nav">About us</a></li>
      <li><a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="nav">My Account</a></li>
    </ul>
  </nav>
  <!--menu end-->
  <br>
  <br>
  <br>
  <br>
  <!--images slides start-->
  <iframe src="trial.html">
  </iframe>
  <!--images slides end-->
  <br>
  <br>
  <div class="cont2">
    <h2 class="heading">Difference between Cyber Security and Information Security</h2>
    <div class="cont">
      <span class="paragraph">
        The terms Cyber Security and Information Security are often used interchangeably.
        As they both are responsible for security and protecting the computer system from threats and information breaches and often Cybersecurity and information security are so closely linked that they may seem synonymous and unfortunately, they are used synonymously.
        <br>
        If we talk about data security it’s all about securing the data from malicious user and threats.
        Now another question is that what is the difference between Data and Information? So one important point is that “not every data can be an information” data can be informed if it is interpreted in a context and given meaning.
        for example “100798” is data and if we know that it’s the date of birth of a person then it is information because it has some meaning.
        so information means data which has some meaning.
      </span>
    </div>
  </div>
  <br>
  <br>
  <div class="table1">
    <table>
      <tr>
        <th>Cyber Security</th>
        <th>Information Security</th>
      </tr>
      <tr>
        <td>It is the practice of protecting the data from outside the resource on the internet.</td>
        <td>It is all about protecting information from unauthorized user, access and data modification or removal in order to provide confidentiality, integrity, and availability.</td>
      </tr>
      <tr>
        <td>It is about the ability to protect the use of cyberspace from cyber attacks.</td>
        <td>It deals with protection of data from any form of threat.</td>
      </tr>
      <tr>
        <td>Cybersecurity to protect anything in the cyber realm.</td>
        <td>Information security is for information irrespective of the realm.</td>
      </tr>
      <tr>
        <td>Cybersecurity deals with danger against cyberspace.</td>
        <td>Information security deals with the protection of data from any form of threat.</td>
      </tr>
      <tr>
        <td>Cybersecurity strikes against Cyber crimes, cyber frauds and law enforcement.</td>
        <td>Information security strives against unauthorised access, disclosure modification and disruption.</td>
      </tr>
      <tr>
        <td>On the other hand cyber security professionals with cyber security deals with advanced persistent threat.</td>
        <td>Information security professionals is the foundation of data security and security professionals associated with it prioritize resources first before dealing with threats.</td>
      </tr>
      <tr>
        <td>It deals with threats that may or may not exist in the cyber realm such as a protecting your social media account, personal information, etc.</td>
        <td>It deals with information Assets and integrity confidentiality and availability.</td>
      </tr>
    </table>
  </div>
  <br>
  <br>


  <!-- pull data through database start here  -->
  <?php
  include '../dbconnect.php';
  $sql = "SELECT * FROM `pages` where prno = '3';";
  $result = mysqli_query($conn, $sql);


  while ($row = mysqli_fetch_assoc($result)) {

    $title1 = $row['title'];
    $paragraph1 = $row['paragraph'];
    $pno = $row['pno'];

    echo '<div class="cont2">
     <h2 class="heading">' . $title1 . '</h2>
     <div class="cont">
       <span class="paragraph">
      ' . $paragraph1 . '
     </div>
   </div>
   <br>
   <br>
   <br>
 
 ';
  }

  ?>

  <!-- pull data through database end here  -->

 <!--contact start-->
 <form class="contact" action="../contact.php" method="post">
    <div class="contact" id="contact">
      <br>
      <h3 class="head"><label for="name">Name</label></h3>
      <input type="text" name="name" placeholder="Enter your name here" class="cont" id="name" required>

      <h3 class="head"><label for="email">Email id</label></h3>
      <input type="email" name="email" placeholder="Enter your email id" class="cont" id="email" required>

      <h3 class="head"><label for="phone">Mobile Number</label></h3>
      <input type="text" name="phone" placeholder="Enter your mobile number" max="13" class="cont" id="phone" required>

      <h3 class="head" required><label for="comment">Comment</label></h3>
      <textarea id="comment" name="comment"> </textarea>
      <br>
      <button type="submit" class="con">Submit</button>
      <button type="reset" class="con">Reset</button>
    </div>
  </form>
  <!--contact end-->
  <br>
  <button class="previous-page"><a href="application security.php">&laquo; Previous Page</a></button>
  <button class="next-page"><a href="operational security.php">Next Page &raquo;</a></button>
  <br>
  <br>
  <br>

  <div class="footer">
    <h4 class="footer"> <span class="copyright-symbol"> &#169; </span> All rights Reserved by Dhiraj Mokal</h4>
  </div>
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
          <h4 class="update"><a href="../update.php" class="update"> Update Account </a> </h4>
          <h4 class="delete"><a href="../delete.php" class="delete"> Delete Account </a> </h4>
          <h4 class="certificate"><a href="certificate/test.php" class="certificate"> Get Certificate </a> </h4>
        </div>
        <hr>

        <h4 class="logout"><a href="../logout.php"> Logout </a> </h4>

      </div>
    </form>
  </div>
  <!--login form end-->
  <script src="../script/script.js"></script>
</body>

</html>