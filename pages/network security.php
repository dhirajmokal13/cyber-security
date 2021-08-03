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
  <title>Network security</title>
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
    <label class="logo">Network Security</label>
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
    <h2 class="heading">Network security defined</h2>
    <div class="cont">
      <span class="paragraph">
        Network security is a broad term that covers a multitude of technologies, devices and processes.
        In its simplest term, it is a set of rules and configurations designed to protect the integrity, confidentiality and accessibility of computer networks and data using both software and hardware technologies.
        Every organization, regardless of size, industry or infrastructure, requires a degree of network security solutions in place to protect it from the ever-growing landscape of cyber threats in the wild today.
        <br>
        Today's network architecture is complex and is faced with a threat environment that is always changing and attackers that are always trying to find and exploit vulnerabilities.
        These vulnerabilities can exist in a broad number of areas, including devices, data, applications, users and locations.
        For this reason, there are many network security management tools and applications in use today that address individual threats and exploits and also regulatory non-compliance.
        When just a few minutes of downtime can cause widespread disruption and massive damage to an organization's bottom line and reputation, it is essential that these protection measures are in place.
      </span>
    </div>
  </div>

  <br>
  <br>
  <br>

  <div class="cont2">
    <h2 class="heading">How does network security work?</h2>
    <div class="cont">
      <span class="paragraph">
        There are many layers to consider when addressing network security across an organization.
        Attacks can happen at any layer in the network security layers model, so your network security hardware, software and policies must be designed to address each area.
        <br>
        Network security typically consists of three different controls: physical, technical and administrative.
        Here is a brief description of the different types of network security and how each control works.
      </span>

      <h3 class="heading">Physical Network Security</h3>
      <span class="paragraph">
        Physical security controls are designed to prevent unauthorized personnel from gaining physical access to network components such as routers, cabling cupboards and so on.
        Controlled access, such as locks, biometric authentication and other devices, is essential in any organization.
      </span>

      <h3 class="heading">Technical Network Security</h3>
      <span class="paragraph">
        Technical security controls protect data that is stored on the network or which is in transit across, into or out of the network.
        Protection is twofold; it needs to protect data and systems from unauthorized personnel, and it also needs to protect against malicious activities from employees.
      </span>

      <h3 class="heading">Administrative Network Security</h3>
      <span class="paragraph">
        Administrative security controls consist of security policies and processes that control user behavior, including how users are authenticated, their level of access and also how IT staff members implement changes to the infrastructure.
      </span>
    </div>
  </div>

  <br>
  <br>
  <br>

  <div class="cont2">
    <h2 class="heading">Types of network security</h2>
    <div class="cont">
      <span class="paragraph">
        We have talked about the different types of network security controls.
        Now let's take a look at some of the different ways you can secure your network.
      </span>

      <h3 class="heading">Network Access Control</h3>
      <span class="paragraph">
        To ensure that potential attackers cannot infiltrate your network, comprehensive access control policies need to be in place for both users and devices.
        Network access control (NAC) can be set at the most granular level. For example, you could grant administrators full access to the network but deny access to specific confidential folders or prevent their personal devices from joining the network.
      </span>
      <h3 class="heading">Antivirus and Antimalware Software</h3>
      <span class="paragraph">
        Antivirus and antimalware software protect an organization from a range of malicious software, including viruses, ransomware, worms and trojans.
        The best software not only scans files upon entry to the network but continuously scans and tracks files.
      </span>

      <h3 class="heading">Firewall Protection</h3>
      <span class="paragraph">
        Firewalls, as their name suggests, act as a barrier between the untrusted external networks and your trusted internal network.
        Administrators typically configure a set of defined rules that blocks or permits traffic onto the network.
        For example, Forcepoint's Next Generation Firewall (NGFW) offers seamless and centrally managed control of network traffic, whether it is physical, virtual or in the cloud.
      </span>

      <h3 class="heading">Virtual Private Networks</h3>
      <span class="paragraph">
        Virtual private networks (VPNs) create a connection to the network from another endpoint or site.
        For example, users working from home would typically connect to the organization's network over a VPN.
        Data between the two points is encrypted and the user would need to authenticate to allow communication between their device and the network.
        Forcepoint's Secure Enterprise SD-WAN allows organizations to quickly create VPNs using drag-and-drop and to protect all locations with our Next Generation Firewall solution.
      </span>
    </div>
  </div>

  <br>
  <br>
  <br>

  <div class="cont2">
    <h2 class="heading">Network security for businesses and consumers</h2>
    <div class="cont">
      <span class="paragraph">
        Network security should be a high priority for any organization that works with networked data and systems.
        In addition to protecting assets and the integrity of data from external exploits, network security can also manage network traffic more efficiently, enhance network performance and ensure secure data sharing between employees and data sources.
        <br>
        There are many tools, applications and utilities available that can help you to secure your networks from attack and unnecessary downtime.
        Forcepoint offers a suite of network security solutions that centralize and simplify what are often complex processes and ensure robust network security is in place across your enterprise.
      </span>
    </div>
  </div>
  <br>
  <br>


  <!-- pull data through database start here  -->
  <?php
  include '../dbconnect.php';
  $sql = "SELECT * FROM `pages` where prno = '1';";
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
  <button class="previous-page"><a href="../Home.php">&laquo; Previous Page</a></button>
  <button class="next-page"><a href="application security.php">Next Page &raquo;</a></button>
  <br>
  <br>
  <br>
  <div class="footer">
    <h4 class="footer"><span class="copyright-symbol"> &#169; </span> All rights Reserved by Dhiraj Mokal</h4>
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