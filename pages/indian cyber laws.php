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
  <title>Indian cyber laws</title>
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
    <label class="logo">Indian Cyber Laws</label>
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
    <h2 class="heading">Cyber Laws of India</h2>
    <div class="cont">
      <span class="paragraph">

        In Simple way we can say that cyber crime is unlawful acts wherein the computer is either a tool or a target or both.
        Cyber crimes can involve criminal activities that are traditional in nature, such as theft, fraud, forgery, defamation and mischief, all of which are subject to the Indian Penal Code.
        The abuse of computers has also given birth to a gamut of new age crimes that are addressed by the Information Technology Act, 2000.
        <br>
        <br>
        We can categorize Cyber crimes in two ways
        <br>
        <br>
        1.The Computer as a Target :-using a computer to attack other computers.
        <br>
        e.g. Hacking,Virus/Worm attacks,DOS attack etc.
        <br>
        2.computer as a weapon :-using a computer to commit real world crimes.
        <br>
        e.g. Cyber Terrorism, IPR violations,Credit card frauds,EFT frauds, Pornography etc.
        <br>
        <br>
        Cyber law (also referred to as cyberlaw) is a term used to describe the legal issues related to use of communications technology, particularly "cyberspace", i.e. the Internet.
        It is less a distinct field of law in the way that property or contract are as it is an intersection of many legal fields, including intellectual property, privacy, freedom of expression, and jurisdiction.
        In essence, cyber law is an attempt to integrate the challenges presented by human activity on the Internet with legacy system of laws applicable to the physical world.
        <br>
        <br>
        <h3 class="heading">Why CyberSecurity in India?</h3>
        When Internet was developed, the founding fathers of Internet hardly had any inclination that Internet could transform itself into an all pervading revolution which could be misused for criminal activities and which required regulation.
        Today, there are many disturbing things happening in cyberspace.
        Due to the anonymous nature of the Internet, it is possible to engage into a variety of criminal activities with impunity and people with intelligence, have been grossly misusing this aspect of the Internet to perpetuate criminal activities in cyberspace. Hence the need for Cyberlaws in India.
        <br>
        <br>
        <h3 class="heading">What is importance of Cyberlaws? </h3>
        Cyberlaw is important because it touches almost all aspects of transactions and activities on and concerning the Internet, the World Wide Web and Cyberspace.
        Initially it may seem that Cyberlaws is a very technical field and that it does not have any bearing to most activities in Cyberspace. But the actual truth is that nothing could be further than the truth.
        Whether we realize it or not, every action and every reaction in Cyberspace has some legal and Cyber legal perspectives.
        <br>
        <br>
        <h3 class="heading">Advantages of Cyberlaws</h3>
        Internet is just like life. It is interesting and we spend a lot of time doing amusing things here, but it comes with its fair share of trouble.
        With the technology boom and easy Internet access across the country, cyber crime, too, has become a pretty common occurrence.
        From hacking into computers to making fraudulent transactions online, there are many ways in which we can become a victim of illegal cyber activities.
        <br>
        To regulate such activities that violate the rights of an Internet user, the Indian government has the Information Technology Act, 2000, in place.
        Here are some of its sections that empower Internet users and attempt to safeguard the cyberspace.
      </span>
    </div>
  </div>
  <br>
  <br>
  <br>
  <div class="cont2">
    <h2 class="heading">Cyberlaws</h2>
    <div class="cont">
      <span class="paragraph">
        <h3 class="heading">Section-65 : Tempering With Computer Source Document</h3>
        A person who intentionally conceals, destroys or alters any computer source code (such as programmes, computer commands, design and layout), when it is required to be maintained by law commits an offence and can be punished with 3 years’ imprisonment or a fine of 2 Lakhs INR or both
        <br>

        <h3 class="heading">Section-66 : Using Password of Another Person</h3>
        If a person fraudulently uses the password, digital signature or other unique identification of another person, he/she can face imprisonment up to 3 years or/and a fine of 1 Lakh INR.
        <br>

        <h3 class="heading">Section-66D : Cheating Using Computer Resource</h3>
        If a person cheats someone using a computer resource or a communication device, he/she could face imprisonment up to 3 years or/and fine up to 1 Lakh INR
        <br>

        <h3 class="heading">Section-66E : Publishing Private Images of Others</h3>
        If a person captures, transmits or publishes images of a person’s private parts without his/her consent or knowledge, the person is entitled to imprisonment up to 3 years of fine up to 2 Lakhs INR or both
        <br>

        <h3 class="heading">Section-66F : Acts of Cyber Terrorism</h3>
        A person can face life imprisonment if he/she denies an authorized person the access to the computer resource or attempts to penetrate/access a computer resource without authorization, with an aim to threaten the unity, integrity, security or sovereignty of the nation. This is a non-bailable offence.
        <br>

        <h3 class="heading">Section-67 : Publishing Child Porn or Predating Children Online</h3>
        If a person captures, publishes or transmits images of a child in a sexually explicit act or induces anyone under the age of 18 into a sexual act, then the person can face imprisonment up to 7 years or fine up to 10 lakhs INR or both
        <br>

        <h3 class="heading">Section-69 : Govt's Power To Block Websites.</h3>
        If the government feel it necessary in the interest of sovereignty and integrity of India, it can intercept, monitor or decrypt any information generated, transmitted, received or stored in any computer resource. The power is subject to compliance of procedure. Under section 69A, the central government can also block any information from public access.
        <br>

        <h3 class="heading">section-43A : Data Protection At Corporate Level.</h3>
        If a body corporate is negligent in implementing reasonable security practices which causes wrongful loss or gain to any person, such body corporate shall be liable to pay damages to the affection person.
      </span>
    </div>
  </div>
  <br>
  <br>


  <!-- pull data through database start here  -->
  <?php
  include '../dbconnect.php';
  $sql = "SELECT * FROM `pages` where prno = '6';";
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
  <button class="previous-page"><a href="disaster ricovery and business continuity.php">&laquo; Previous Page</a></button>
  <button class="next-page"><a href="../home.php">Home Page &raquo;</a></button>
  <br>
  <br>
  <br>
  <div class="footer">
    <h4 class="footer"><span class="copyright-symbol"> &#169;</span> All rights Reserved by Dhiraj Mokal</h4>
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