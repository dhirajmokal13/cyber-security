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
  <title>Application security</title>
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
    <label class="logo">Application Security</label>
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
    <div class="cont">
      <span class="paragraph">
        Application security is the process of making apps more secure by finding, fixing, and enhancing the security of apps.
        Much of this happens during the development phase, but it includes tools and methods to protect apps once they are deployed.
        This is becoming more important as hackers increasingly target applications with their attacks.
        <br>
        <br>
        Application security is getting a lot of attention.
        Hundreds of tools are available to secure various elements of your applications portfolio, from locking down coding changes to assessing inadvertent coding threats, evaluating encryption options and auditing permissions and access rights.
        There are specialized tools for mobile apps, for network-based apps, and for firewalls designed especially for web applications.
      </span>
    </div>
  </div>

  <br>
  <br>
  <br>

  <div class="cont2">
    <h2 class="heading">Why application security is important</h2>
    <div class="cont">
      <span class="paragraph">
        According to Veracode’s State of Software Security Vol.
        10 report, 83% of the 85,000 applications it tested had at least one security flaw.
        Many had much more, as their research found a total of 10 million flaws, and 20% of all apps had at least one high severity flaw.
        Not all of those flaws presents a significant security risk, but the sheer number is troubling.
        <br>
        <br>
        The faster and sooner in the software development process you can find and fix security issues, the safer your enterprise will be.
        Because everyone makes mistakes, the challenge is to find those mistakes in a timely fashion.
        For example, a common coding error could allow unverified inputs.
        This mistake can turn into SQL injection attacks and then data leaks if a hacker finds them.
        <br>
        <br>
        Application security tools that integrate into your application development environment can make this process and workflow simpler and more effective.
        These tools are also useful if you are doing compliance audits, since they can save time and the expense by catching problems before the auditors seen them.
        <br>
        <br>
        The rapid growth in the application security segment has been helped by the changing nature of how enterprise apps are being constructed in the last several years.
        Gone are the days where an IT shop would take months to refine requirements, build and test prototypes, and deliver a finished product to an end-user department.
        The idea almost seems quaint nowadays.
        <br>
        <br>
        Instead, we have new working methods, called continuous deployment and integration, that refine an app daily, in some cases hourly.
        This means that security tools have to work in this ever-changing world and find issues with code quickly.
        <br>
        <br>
        Gartner, in its report on the app security hype cycle (updated September 2018), said that IT managers “need to go beyond identifying common application development security errors and protecting against common attack techniques.
        ” They offer more than a dozen different categories of products and describe where in their “hype cycle” they are located.
        <br>
        <br>
        Many of these categories are still emerging and employ relatively new products.
        This shows how quickly the market is evolving as threats become more complex, more difficult to find, and more potent in their potential damage to your networks, your data, and your corporate reputation.
      </span>
    </div>
  </div>

  <br>
  <br>
  <br>

  <div class="cont2">
    <h2 class="heading">Most common software weaknesses</h2>
    <div class="cont">
      <span class="paragraph">
        One way to keep aware of the software vulnerabilities that attacker are likely to exploit is MITRE's annual annual CWE Most Dangerous Software Weaknesses list.
        MITRE tracks CWEs (Common Weakness Enumeration), assigning them a number much as they do with its database of Common Vulnerabilities and Exposures (CVEs).
        Each weakness is rated depending on the frequency that it is the root cause of a vulnerability and the severity of its exploitation.
        <br>
        <br>
        Below are the top 10 CWEs in MITRE's 2020 CWE top 25 with scores:
      </span>
      <br>
      <br>
      <ol>
        <li>1.Cross-site scripting (46.82)</li>
        <br>
        <li>2.Out-of-bounds write (46.17)</li>
        <br>
        <li>3.Improper input validation (33.47)</li>
        <br>
        <li>4.Out-of-bounds read (26.5)</li>
        <br>
        <li>5.Improper restriction of operations within the bounds of a memory buffer (23.73)</li>
        <br>
        <li>6.SQL injection (20.69)</li>
        <br>
        <li>7.Exposure of sensitive information to an unauthorized actor (19.16)</li>
        <br>
        <li>8.Use after free (18.87)</li>
        <br>
        <li>9.Cross-site reques forgery (CSRF) (17.29)</li>
        <br>
        <li>10.OS command injection (16.44)</li>
      </ol>
    </div>
  </div>

  <br>
  <br>
  <br>

  <div class="cont2">
    <h2 class="heading">Application security tools</h2>
    <div class="cont">
      <span class="paragraph">
        While there are numerous application security software product categories, the meat of the matter has to do with two: security testing tools and application shielding products.
        The former is a more mature market with dozens of well-known vendors, some of them are lions of the software industry such as IBM, CA and MicroFocus.
        These tools are well enough along that Gartner has created its Magic Quadrant and classified their importance and success.
        Review sites such as IT Central Station have been able to survey and rank these vendors, too.
        <br>
        <br>
        Gartner categorizes the security testing tools into several broad buckets, and they are somewhat useful for how you decide what you need to protect your app portfolio:
        <br>
        <br>
        <b>Static testing,</b> which analyzes code at fixed points during its development.
        This is useful for developers to check their code as they are writing it to ensure that security issues are being introduced during development.
        <br>
        <br>
        <b>Dynamic testing,</b> which analyzes running code.
        This is more useful, as it can simulate attacks on production systems and reveal more complex attack patterns that use a combination of systems.
        <br>
        <br>
        <b>Interactive testing,</b> which combines elements of both static and dynamic testing.
        <br>
        <br>
        <b>Mobile testing</b> is designed specifically for the mobile environments and can examine how an attacker can leverage the mobile OS and the apps running on them in its entirety.
        <br>
        <br>
        Another way to look at the testing tools is how they are delivered, either via an on-premises tool or via a SaaS-based subscription service where you submit your code for online analysis.
        Some even do both.
        <br>
        <br>
        One caveat is the programming languages supported by each testing vendor.
        Some limit their tools to just one or two languages. (Java is usually a safe bet.) Others are more involved in the Microsoft .Net universe.
        The same goes for integrated development environments (IDEs): some tools operate as plug-ins or extensions to these IDEs, so testing your code is as simple as clicking on a button.
        <br>
        <br>
        Another issue is whether any tool is isolated from other testing results or can incorporate them into its own analysis.
        IBM’s is one of the few that can import findings from manual code reviews, penetration testing, vulnerability assessments and competitors’ tests.
        This can be helpful, particularly if you have multiple tools that you need to keep track of.
        <br>
        <br>
        Let’s not forget about app shielding tools. The main objective of these tools is to harden the application so that attacks are more difficult to carry out.
        This is less charted territory. Here you’ll find a vast collection of smaller, point products that in many cases have limited history and customer bases.
        The goal of these products is to do more than just test for vulnerabilities and actively prevent your apps from corruption or compromise. They encompass a few different broad categories:
      </span>
      <br>
      <br>
      <h3 class="heading">Runtime application self-protection (RASP):</h3>
      <span class="paragraph">
        These tools could be considered a combination of testing and shielding.
        They provide a measure of protection against possible reverse-engineering attacks.
        RASP tools are continuously monitoring the behavior of the app, which is useful particularly in mobile environments when apps can be rewritten, run on a rooted phone or have privilege abuse to turn them into doing nefarious things.
        RASP tools can send alerts, terminate errant processes, or terminate the app itself if found compromised.
        RASP will likely become the default on many mobile development environments and built-in as part of other mobile app protection tools.
        Expect to see more alliances among software vendors that have solid RASP solutions.
      </span>
      <br>
      <h3 class="heading">Code obfuscation:</h3>
      <span class="paragraph">
        Hackers often use obfuscation methods to hide their malware, and now tools allow developer to do this to help protect their code from being attacked.
      </span>
      <br>
      <h3 class="heading">Encryption and anti-tampering tools:</h3>
      <span class="paragraph">
        These are other methods that can be used to keep the bad guys from gaining insights into your code.
      </span>
      <br>
      <h3 class="heading">Threat detection tools:</h3>
      <span class="paragraph">
        These tools examine the environment or network where your apps are running and make an assessment about potential threats and misused trust relationships.
        Some tools can provide device “fingerprints” to determine whether a mobile phone has been rooted or otherwise compromised.
      </span>
    </div>
  </div>

  <br>
  <br>
  <br>

  <div class="cont2">
    <h2 class="heading">Application security challenges</h2>
    <div class="cont">
      <span class="paragraph">
        Part of the problem is that IT has to satisfy several different masters to secure their apps.
        They first have to keep up with the evolving security and application development tools market, but that is just the entry point.
        <br>
        <br>
        IT also has to anticipate the business needs as more enterprises dive deeper into digital products and their application portfolio needs evolve to more complex infrastructure.
        They also have to understand how SaaS services are constructed and secured. This has been an issue, as a recent survey of 500 IT managers has found the average level of software design knowledge has been lacking.
        The report states, “CIOs may find themselves in the hot seat with senior leadership as they are held accountable for reducing complexity, staying on budget and how quickly they are modernizing to keep up with business demands.”
        <br>
        <br>
        Finally, the responsibility for application security could be spread across several different teams within your IT operations: The network folks could be responsible for running the web app firewalls and other network-centric tools, the desktop folks could be responsible for running endpoint-oriented tests, and various development groups could have other concerns.
        This makes it hard to suggest one tool that will fit everyone’s needs, which is why the market has become so fragmented.
      </span>
    </div>
  </div>
  <br>
  <br>


  <!-- pull data through database start here  -->
  <?php
  include '../dbconnect.php';
  $sql = "SELECT * FROM `pages` where prno = '2';";
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
  <button class="previous-page"><a href="network security.php">&laquo; Previous Page</a></button>
  <button class="next-page"><a href="information security.php">Next Page &raquo;</a></button>
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
  <script src="../script/script.js"></script>
</body>

</html>