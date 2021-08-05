<?php
if (!(isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || 
   $_SERVER['HTTPS'] == 1) ||  
   isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&   
   $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'))
{
   $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
   header('HTTP/1.1 301 Moved Permanently');
   header('Location: ' . $redirect);
   exit();
}


session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
	header('location: index.php');
	exit;
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/my_account.css">
	<style>
		/* delete update and certificate start here */
		div.some {
			display: flex;
			font-family: arial;
		}

		h4.update,
		h4.delete,
		h4.certificate {
			display: inline-flex;
			padding: 6px 10px;
			background-color: #a23b3b;
			margin: 4px 10px;
			border-radius: 5px;
		}

		h4.update:hover,
		h4.delete:hover,
		h4.certificate:hover,
		h4.update:focus,
		h4.delete:focus,
		h4.certificate:focus {
			background-color: red;
		}

		a.update,
		a.certificate,
		a.delete {
			background-color: transparent;
			color: white;
		}

		/* delete update and certificate end here */
	</style>
</head>
<title>Home of cyber security</title>

<body>
	<!--menu start-->
	<nav id="mydiv">
		<label class="logo">Cyber Security</label>
		<ul>
			<li><a class="nav active" href="#">Home</a></li>
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">CyberSecurity</a>
				<div class="dropdown-content">
					<a href="pages/network security.php">Network Security</a>
					<a href="pages/application security.php">Application Security</a>
					<a href="pages/information security.php">Information Security</a>
					<a href="pages/operational security.php">Operational Security</a>
					<a href="pages/disaster ricovery and business continuity.php">Disaster Ricovery & Business Continuity</a>
					<a href="pages/indian cyber laws.php">Indian cyber Laws</a>
				</div>
			</li>
			<li><a href="pages/ethical-hacking.php" class="nav">E-Hacking</a></li>
			<li><a href="#contact" class="nav">Contact</a></li>
			<li><a href="forum.php" class="nav">Forum</a></li>
			<li><a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="nav">My Account</a></li>
		</ul>
	</nav>
	<!--menu end-->
	<!--introduction start-->
	<div class="an">
		<span class="name">Cyber</span> Security
		<br>
		<p class="me">Let's Protect Yourself</p>
	</div>
	<!--introduction end-->

	<!--content start here-->
	<div class="intro">
		<span class="about">
			<span class="intro-title">Intruduction to cybersecurity:</span>
			<br><br>
			"Cybersecurity is primarily about people, processes, and technologies working together to encompass the full range of threat reduction, vulnerability reduction, deterrence, international engagement, incident response, resiliency, and recovery policies and activities, including computer network operations, information assurance, law enforcement, etc."<br>
			Cybersecurity is the protection of Internet-connected systems, including hardware, software, and data from cyber attacks. It is made up of two words one is cyber and other is security.<br> Cyber is related to the technology which contains systems, network and programs or data. Whereas security related to the protection which includes systems security, network security and application and information security.<br>
			It is the body of technologies, processes, and practices designed to protect networks, devices, programs, and data from attack, theft, damage, modification or unauthorized access. It may also be referred to as information technology security.
			<img src="css/image/network-security/network-security 4.png" class="cyber-intro">
			<br>
			We can also define cybersecurity as the set of principles and practices designed to protect our computing resources and online information against threats. Due to the heavy dependency on computers in a modern industry that store and transmit an abundance of confidential and essential information about the people, cybersecurity is a critical function and needed insurance of many businesses.
		</span>
		<br>
		<br><br>
		<span class="about">
			<span class="intro-title">Why cybersecurity is important?</span>
			<br>
			<br>
			We live in a digital era which understands that our private information is more vulnerable than ever before. We all live in a world which is networked together, from internet banking to government infrastructure, where data is stored on computers and other devices. A portion of that data can be sensitive information, whether that be intellectual property, financial data, personal information, or other types of data for which unauthorized access or exposure could have negative consequences.
			<br>
			Cyber-attack is now an international concern and has given many concerns that hacks and other security attacks could endanger the global economy. Organizations transmit sensitive data across networks and to other devices in the course of doing businesses, and cybersecurity describes to protect that information and the systems used to process or store it.
			<br>
			As the volume of cyber-attacks grows, companies and organizations, especially those that deal information related to national security, health, or financial records, need to take steps to protect their sensitive business and personal information.
		</span>
	</div>
	<!--content end here-->
	<br>
	<!--about us section start-->
	<div class="about" id="About">
		<h3 class="head">About</h3>
		<br>
		<span class="about">
			" Our aim is make you aware about cybercrime. Today's cybercrimes dangarous.
			cyber attacks are happen between indivisuals ,corporate. "
		</span>
				<div class="card1">
					<img src="css/image/nachiket.jpg" class="card">
					<h3 class="int">Nachiket Lokhande</h3>
					<h4 class="designation">CEO & Founder</h4>
					<span class="about2">"My aim is make world crime free."</span>
				</div>

			
				<div class="card1">
					<img src="css/image/avatar.png" class="card">
					<h3 class="int">Another Member</h3>
					<h4 class="designation">Designer & Developer</h4>
					<span class="about2">"Make designs and creative work."</span>
				</div>
			

			
				<div class="card1">
					<img src="css/image/dhiraj.jpg" class="card">
					<h3 class="int">Dhiraj Mokal</h3>
					<h4 class="designation">CTO</h4>
					<span class="about2">"aware people about cybercrimes."</span>
				</div>
			

	</div>
	<!--about us section end-->
	<br>
	<br>
	<br>
	<!--contact start-->
	<form class="contact" action="contact.php" method="post">
		<div class="contact" id="contact">
			<br>
			<h3 class="head"><label for="name" style="cursor:pointer">Name</label></h3>
			<input type="text" name="name" placeholder="Enter your Name" class="cont" id="name" required>
			<br>
			<br>
			<h3 class="head"><label for="email" style="cursor:pointer">Email Id</label></h3>
			<input type="email" name="email" placeholder="Enter email id" class="cont" id="email" required>
			<br>
			<br>
			<h3 class="head"><label for="phone" style="cursor:pointer">Mobile Number</label></h3>
			<input type="text" name="phone" placeholder="Enter mobile number" max="13" class="cont" id="phone" required>
			<br>
			<br>
			<h3 class="head"><label for="comment" style="cursor:pointer">Comment</label></h3>
			<textarea id="comment" name="comment" placeholder="Enter Your Querry" required> </textarea>
			<br>
			<button type="submit" class="con">Submit</button>
			<button type="reset" class="con">Reset</button>
		</div>
	</form>
	<!--contact end-->

	<br><br>
	<!--footer start-->
	<div class="footer">

		<h4> <span class="copyright-symbol"> &#169;</span>All rights Reserved by Dhiraj Mokal</h4>
	</div>
	<!--footer end-->

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
					<h4 class="update"><a href="update.php" class="update"> Update Account </a> </h4>
					<h4 class="delete"><a href="delete.php" class="delete"> Delete Account </a> </h4>
					<h4 class="certificate"><a href="pages/certificate/test.php" class="certificate"> Get Certificate </a> </h4>
				</div>
				<hr>
				<h4 class="logout"><a href="logout.php" class="logout"> Logout </a> </h4>

			</div>
		</form>
	</div>
	<!--login form end-->

	<!--javascript start-->
	<script src="script/script.js"></script>
	<!--javacript end-->
</body>

</html>
