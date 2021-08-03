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
  <title>Operational security</title>
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
</head>

<body>
  <!--menu start-->
  <nav id="mydiv">
    <label class="logo">Operational Security</label>
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
    <h2 class="heading">Defination of Operational Security</h2>
    <div class="cont">
      <span class="paragraph">
        Operational security (OPSEC), also known as procedural security, is a risk management process that encourages managers to view operations from the perspective of an adversary in order to protect sensitive information from falling into the wrong hands.
        <br>
        Though originally used by the military, OPSEC is becoming popular in the private sector as well.
        Things that fall under the OPSEC umbrella include monitoring behaviors and habits on social media sites as well as discouraging employees from sharing login credentials via email or text message.
      </span>
    </div>
  </div>

  <br>
  <br>
  <br>

  <div class="cont2">
    <h2 class="heading">The Five Steps of Operational Security</h2>
    <div class="cont">
      <span class="paragraph">
        The processes involved in operational security can be neatly categorized into five steps:
        <br>
        <br>
        <strong>1.Identify your sensitive data,</strong> including your product research, intellectual property, financial statements, customer information, and employee information.
        This will be the data you will need to focus your resources on protecting.
        <br>
        <br>
        <strong>2.Identify possible threats.</strong> For each category of information that you deem sensitive, you should identify what kinds of threats are present.
        While you should be wary of third parties trying to steal your information, you should also watch out for insider threats, such as negligent employees and disgruntled workers.
        <br>
        <br>
        <strong>3.Analyze security holes and other vulnerabilities.</strong>
        Assess your current safeguards and determine what, if any, loopholes or weaknesses exist that may be exploited to gain access to your sensitive data.
        <br>
        <br>
        <strong>4.Appraise the level of risk associated with each vulnerability.</strong>
        Rank your vulnerabilities using factors such as the likelihood of an attack happening, the extent of damage that you would suffer, and the amount of work and time you would need to recover.
        The more likely and damaging an attack is, the more you should prioritize mitigating the associated risk.
        <br>
        <br>
        <strong>5.Get countermeasures in place.</strong> The last step of operational security is to create and implement a plan to eliminate threats and mitigate risks.
        This could include updating your hardware, creating new policies regarding sensitive data, or training employees on sound security practices and company policies.
        Countermeasures should be straightforward and simple. Employees should be able to implement the measures required on their part with or without additional training.
      </span>
    </div>
  </div>
  <br>
  <br>
  <br>
  <div class="cont2">
    <h2 class="heading">Best practices For Operational Security.</h2>
    <div class="cont">
      <span class="paragraph">
        Follow these best practices to implement a robust, comprehensive operational security program:
        <br>
        <h3 class="heading">Implement precise change management processes. </h3>
        that your employees should follow when network changes are performed.
        All changes should be logged and controlled so they can be monitored and audited.
        <br>


        <h3 class="heading">Restrict access to network devices. </h3>
        using AAA authentication. In the military and other government entities, a “need-to-know” basis is often used as a rule of thumb regarding access and sharing of information.
        <br>


        <h3 class="heading">Give your employees the minimum access. </h3>
        necessary to perform their jobs. Practice the principle of least privilege.
        <br>


        <h3 class="heading">Implement dual control.</h3>
        Make sure that those who work on your network are not the same people in charge of security.
        <br>


        <h3 class="heading">Automate tasks to reduce the need for human intervention. </h3>
        Humans are the weakest link in any organization’s operational security initiatives because they make mistakes, overlook details, forget things, and bypass processes.
        <br>


        <h3 class="heading">Incident response and disaster recovery planning.</h3>
        are always crucial components of a sound security posture. Even when operational security measures are robust, you must have a plan to identify risks, respond to them, and mitigate potential damages.
        <br>
        Risk management involves being able to identify threats and vulnerabilities before they become problems.
        Operational security forces managers to dive deeply into their operations and figure out where their information can be easily breached.
        Looking at operations from a malicious third-party’s perspective allows managers to spot vulnerabilities they may have otherwise missed so that they can implement the proper countermeasures to protect sensitive data.
      </span>
    </div>
  </div>
  <br>
  <br>


  <!-- pull data through database start here  -->
  <?php
  include '../dbconnect.php';
  $sql = "SELECT * FROM `pages` where prno = '4';";
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
  <button class="previous-page"><a href="information security.php">&laquo; Previous Page</a></button>
  <button class="next-page"><a href="disaster ricovery and business continuity.php">Next Page &raquo;</a></button>
  <br>
  <br>
  <br>
  <div class="footer">
    <h4 class="footer"><span class="copyright-symbol"> &#169;</span>All rights Reserved by Dhiraj Mokal</h4>
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

  <!--javascript start-->
  <script src="../script/script.js"></script>
  <!--javacript end-->
</body>

</html>