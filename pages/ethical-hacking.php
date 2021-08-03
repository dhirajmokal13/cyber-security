<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
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
  <title>Ethical hacking</title>
  <link rel="stylesheet" href="../css/my_account.css">
  <link rel="stylesheet" href="../css/ethical_hacking.css">
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


    a.update,
    a.certificate,
    a.delete {
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
    <!--slide navbar start here-->
    <span style="font-size:30px;cursor:pointer;line-height:32px;" onclick="openNav()" class="side-nav">&#9776;</span>
    <!--slide navbar end here-->
    <label class="logo">
      Ethical-Hacking</label>
    <ul>
      <li><a class="nav" href="../Home.php">Home</a></li>
      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">CyberSecurity</a>
        <div class="dropdown-content">
          <a href="network security.php">Network Security</a>
          <a href="application security.php">Application Security</a>
          <a href="information security.php">Information Security</a>
          <a href="operational security.php">Operational Security</a>
          <a href="disaster ricovery and business continuity.php">Disaster Ricovery & Business Continuity</a>
          <a href="indian cyber laws.php">Indian cyber Laws</a>
        </div>
      </li>
      <li><a href="ethical-hacking.php" class="nav active">E-Hacking</a></li>
      <li><a href="../Home.php#contact" class="nav">Contact</a></li>
      <li><a href="../Home.php#About" class="nav">About us</a></li>
      <li><a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="nav">My Account</a></li>
    </ul>
  </nav>
  <!--menu end-->

  <!-- introduction to ethical hacking start here -->

  <div id="intro_to_ethical_hacking" class="tabcontent">
    <div id="main">
      <h1 class="heading">Introduction To Ethical-Hacking</h1>
      <p>Hacking Simply Refers To "Gaining Unauthorized Access Into A System" Or We Can Also Say that main aim of Hacking is " To compromise the Security of a system in order to gain Access into it"</p>
      <p>In India Hackers are Treated as Criminals by those who Are Not Familiar With Working Of A Hacker. They Only See -ve Side Of Hacker. That's why India have less Hackers As Compared to other developing and Developed countries.</p>
      <p>In India, ETHICAL HACKERS are also known as INFORMATION SECURITY EXPERT or CYBER SECURITY Analyst.</p>

      <span class="pt">Types Of Hackers:</span>

      <span class="type">1. White Hat Hackers:</span>
      <p>Hackers Who works defensively. They perform hacking and security checks with authority.
        they are known for security expert.
      </p>

      <span class="type">2. Black Hat Hacker:</span>
      <p>Hackers who works offensively.they believe in Breaking the security without any permission or authority.
        they are known as milicious hackers.
      </p>

      <span class="type">3. Grey Hat Hackers:</span>
      <p>Hackers who is like a coin, two sided.they works both offensive and defensive work.
        generally benefit oriented.
      </p>

      <span class="pt">Phases of Hacking:</span>

      <span class="type">1. Reconnaissance:</span>
      <p>In this phase,Attackers find information about Target.It can be done actively or passively.
        It brings us closer to the target by giving some sensitive information about target.
      </p>

      <span class="type">2. Scanning:</span>
      <p>In this phase, Attacker find much more information about Target.
        Attacker can perform port scanning or various assessments in order to get sensitive information about target.
      </p>

      <span class="type">3. Gaining Access:</span>
      <p>In this phase, Attacker actually performs HACK.
        Using the information or vulnerability found by previous phases, attacker takes advantage and perform exploit to gain access.
      </p>

      <span class="type">4. Maintaining Access:</span>
      <p>In this phase, Attacker installs backdoors or Trojans in order to maintain access into the target system.</p>

      <span class="pt">All these phases are interdependent on each other:</span>
      <p>Cyber Laws in India When Internet was developed,
        the founding fathers of Internet hardly had any inclination that Internet could transform itself into an
        all pervading revolution which could be misused for criminal activities and which required regulation. Today, there are many disturbing things happening in cyberspace.
        Due to the anonymous nature of the Internet, it is possible to engage into a variety of criminal activities
        with impunity and people with intelligence, have been grossly misusing this aspect of the Internet to perpetuate criminal activities in cyberspace.
      </p>

      <!-- pull data through database start here  -->
      <?php
      include '../dbconnect.php';
      $sql = "SELECT * FROM `pages` where prno = '7';";
      $result = mysqli_query($conn, $sql);


      while ($row = mysqli_fetch_assoc($result)) {

        $title1 = $row['title'];
        $paragraph1 = $row['paragraph'];
        $pno = $row['pno'];

        echo '<span class="pt">' . $title1 . '</span>
  <p>' . $paragraph1 . '</p>
 ';
      }

      ?>

      <!-- pull data through database end here  -->

    </div>
  </div>

  <!-- introduction to ethical hacking end here -->


  <!-- ports and protocols start here -->
  <div id="ports_and_protocols" class="tabcontent">
    <div id="main">
      <h1 class="heading">Ports & Protocols</h1>
      <span class="pt">Ports:</span>
      <p>A port is logical access channel between two devices which helps in thier communication.
        A port is used to transfer data.
      </p>
      <span class="pt">There are total 65535 ports:</span>
      <span class="type">1.Well Known Ports: <strong>0 to 1023.</strong></span>
      <span class="type">2.Registered Ports: <strong>1024 to 49151.</strong></span>
      <span class="type">3.Dynamic/Private Ports: <strong>49152 to 65535.</strong></span>

      <span class="pt">Some useful ports are:</span>
      <table>
        <tr>
          <th>Ports Name.</th>
          <th>Port Number.</th>
        </tr>

        <tr>
          <td>ftp</td>
          <td>21/tcp</td>
        </tr>

        <tr>
          <td>Ssh</td>
          <td>22/tcp</td>
        </tr>

        <tr>
          <td>telnet</td>
          <td>23/tcp</td>
        </tr>

        <tr>
          <td>Stmp</td>
          <td>25/tcp</td>
        </tr>

        <tr>
          <td>http</td>
          <td>80/tcp</td>
        </tr>

        <tr>
          <td>Kerberos</td>
          <td>88/tcp</td>
        </tr>

        <tr>
          <td>Pop3</td>
          <td>110/tcp</td>
        </tr>

        <tr>
          <td>Imap</td>
          <td>143/tcp</td>
        </tr>

        <tr>
          <td>https</td>
          <td>443/tcp</td>
        </tr>

        <tr>
          <td>Ftps-data</td>
          <td>989/tcp</td>
        </tr>

        <tr>
          <td>Ftps</td>
          <td>990/tcp</td>
        </tr>

        <tr>
          <td>Telnets</td>
          <td>992/tcp</td>
        </tr>

        <tr>
          <td>Imaps</td>
          <td>993/tcp</td>
        </tr>

        <tr>
          <td>Pop3s</td>
          <td>995/tcp</td>
        </tr>

        <tr>
          <td>Ldap</td>
          <td>389/tcp</td>
        </tr>

      </table>
      <span class="pt">Protocols:</span>
      <p>Protocols is simply a set of rules which defines a standard way for exchanging information over network.</p>

      <span class="pt">Most Commonly used protocols are:</span>
      <span class="type">1.Transmission Control Protocol (TCP):</span>
      <p>
        TCP is one of the core part of IPS (internet protocol suite). Other one component is IP. TCP stands for Transmission control protocol.
        TCP provides the facility to exchange the information or data directly between two hosts. Many major internet applications like e-mail, file transfer etc.
        rely upon TCP. This protocol contains variety of flags like SYN, ACK, RST, FIN etc.
      </p>

      <span class="type">2.Internet Protocol (IP):</span>
      <p>
        Internet Protocol is other core part of IPS. IP is the main communication protocol with is used for exchanging packets over inter-network using IPS.
        IP is used to deliver packets from source to destination.
      </p>
      <p>Internet protocol is responsible for establishment of internet.</p>

      <span class="type">3.User Datagram Protocol (UDP):</span>
      <p>User datagram protocol (UDP) does not contain any flag.
        UDP allows computer application to send messages over internet protocol (IP). In UDP, data or messages are considered as DATAGRAM. UDP was designed by David P. Reed in 1980.
      </p>
      <p>In UDP, simple transmission model is used and there is no hand-shaking method is used which results into unreliability, duplication and missing of the information without notice.</p>
      <p> Data on the internet is generally organized into standard TCP or UDP packets. A packet is bunch of information.</p>
      <p>Different services use different ports to exchange the information</p>

      <!-- pull data through database start here  -->
      <?php
      $sql = "SELECT * FROM `pages` where prno = '8';";
      $result = mysqli_query($conn, $sql);


      while ($row = mysqli_fetch_assoc($result)) {

        $title1 = $row['title'];
        $paragraph1 = $row['paragraph'];
        $pno = $row['pno'];

        echo '<span class="pt">' . $title1 . '</span>
  <p>' . $paragraph1 . '</p>
 ';
      }

      ?>

      <!-- pull data through database end here  -->

    </div>
  </div>
  <!-- ports and protocols end here -->

  <!-- Virtualization and kali linux start here -->
  <div id="Virtualization_and_kali_linux" class="tabcontent">
    <div id="main">
      <h1 class="heading">Virtualization And Kali Linux</h1>
      <span class="pt">Virtualization:</span>
      <p>Virtualization is software technology by which it is possible to run multiple operating system on the same device or server at the same time.
        it is one of the effcient way and reduce costs of multiple system setup.
      </p>
      <p>Virtualization is very helpful when you need to demonstrate something between two operating systems. For Ex.
        A malware target a windows machine can be run parallel to the attacker linux machine and it will be much easier to analyze the behavior.</p>
      <span class="pt">Virtualization software:</span>
      <p>Special software is developed for Virtualization.These software are design to run multiple operating system at the same instant on the same system.</p>
      <span class="type">Some Commonly Used Virtualization software:</span>
      <span class="point">1.VmWare Workstation :(Download : <a href="https://www.vmware.com/in/products/workstation-pro/workstation-pro-evaluation.html">VmWare Workstation</a>)</span>
      <span class="point">2.Virtual Box :(Download : <a href="https://www.virtualbox.org/wiki/Downloads">Virtual Box</a>)</span>
      <span class="type">Using VmWare Workstation:</span>
      <span class="point">1.Download and install VmWare Workstation.</span>
      <span class="point">2.Open VmWare Workstation & Click on "Create Virtual Machine."</span>
      <span class="point">3.Choose the image file of operating system or application.</span>
      <span class="point">4.Choose the name of operating system or application and select it's version.</span>
      <span class="point">5.Provide Hard-drive space for virtual machine(min.required:20GB) and click on finish.</span>
      <span class="point">6.Virtual Machine is ready to use. start from the home screen of VmWare Workstation.</span>

      <span class="pt">Kali Linux</span>
      <p>Kali Linux is a linux based operating sytem which is powerful and most popular hacking os itself. It is used to perform penetration testing and Velnerability assessment.</p>
      <p>Kali linux is derived from backtrack distribution. Kali linux is developed by offensive Security.</p>
      <span class="point">1.Contains more than 300 of pre-installed penetration testing scripts and programs.</span>
      <span class="point">2.NetHunter is specially designed for android device.</span>

      <span class="type">Some of the included tools are</span>
      <span class="point">Wireshark</span>
      <span class="point">Metasploit Framework</span>
      <span class="point">Burp Suit</span>
      <span class="point">Social Engineering Toolkit</span>
      <span class="point">Armitage</span>
      <span class="point">Nmap</span>
      <span class="point">Kismet</span>
      <span class="point">Aircrack</span>
      <span class="point">hping3</span>
      <span class="point">and many more powerful tools. </span>

      <!-- pull data through database start here  -->
      <?php
      $sql = "SELECT * FROM `pages` where prno = '9';";
      $result = mysqli_query($conn, $sql);


      while ($row = mysqli_fetch_assoc($result)) {

        $title1 = $row['title'];
        $paragraph1 = $row['paragraph'];
        $pno = $row['pno'];

        echo '<span class="pt">' . $title1 . '</span>
  <p>' . $paragraph1 . '</p>
 ';
      }

      ?>

      <!-- pull data through database end here  -->


    </div>
  </div>
  <!-- Virtualization and kali linux end here -->

  <!-- footprinting start here -->
  <div id="footprinting" class="tabcontent">
    <div id="main">
      <h1 class="heading">Footprinting</h1>
      <span class="pt">Introduction</span>
      <p>Footprinting is the first phase in hacking. In this collection of information took place.
        Information which is generally available may contain sensitive information.using footprinting Attackers
        can collect information like emails,contacts,domain name information and using social Engineeringeven more sensetive data.
      </p>
      <p>
        Footprinting is necessary step, the infomation gathered in this step is used further exploit or hack the target.In this module,
        various aspects of footprinting would be covered.
      </p>

      <span class="pt">Types</span>
      <span class="type">1.Internal Footprinting</span>
      <p>Footprinting performed inside the network is known as internal footprinting ,attack may access internal network
        or is directly or indirectly connected to the internal network.</p>

      <span class="point">
        <bold>Following attacks or mechanism can be used for internal footprinting:</bold>
      </span>
      <span class="point">A. Dumpster Diving:</span>
      <p>Looking for sensitive information in garbage or dumps is known as dumpster diving.
        Sometimes, attacker may find a piece of paper or some important documents from which sensitive information can be retrieved.
        When penetration testing or hacking is performed each and every possible aspect of gathering information is taken into consideration.
      </p>
      <span class="point">B. Shoulder Surfing:</span>
      <p>
        Looking at shoulder or guessing the password by viewing a person typing or indirectly seeking into his hand movement to get password.
        Sometimes it provides quite sensitive information.
      </p>
      <span class="point">C. Private Websites:</span>
      <p>
        If attacker found any private websites of the target, it became treasure for him as he can gain bunch of sensitive information like employee and client details etc.
      </p>

      <span class="type">2. External Footprinting:</span>
      <p>
        When attacker is not connected to the target network, in order to gather information, external footprinting is used.
        Generally, External Footprinting provides huge number of information about the data.
        There are lots of ways and possibilities to gather the information from outside of network.
      </p>
      <span class="point">
        <bold>Following attacks or mechanism can be used for External footprinting:</bold>
      </span>
      <span class="point">1. Website:</span>
      <p>
        Website of the target may contain some sensitive information or may be vulnerable.
        From the website, attacker can easily get the contact details like e-mails and phone numbers.
        Using phone numbers, attacker can simply call and perform social engineering in order to gain sensitive information.
        Besides, attacker can also perform social engineering over emails.
      </p>
      <span class="point">2. Google:</span>
      <p>
        Google is one of the biggest search engine and helping hand for a hacker.
        Sometimes simply googling about target can give much sensitive information like admin contents or about target profiles over social media.
        Google help both actively and passively in gaining sensitive information.
        For ex, if you google for XYZ, you may get his picture, his address, about upcoming events or more of sensitive information about the target.
      </p>
      <span class="point">3. Whois:</span>
      <p>
        Whois is a tool (both application and web application level) which is used to gather information about target domain like name server, domain records, admin contacts and other relative information.
      </p>
      <p>
        Whois is one the major information provider and this information is used in writing penetration testing reports. It is great database which is contains records of every domain name.
      </p>
      <p>
        <a href="https://whois.domaintools.com/">www.whois.sc </a>is one of the popular site to check whois information.
      </p>

      <span class="pt">Footprinting using tools</span>
      <span class="point">1. Ping:</span>
      <p>
        ping is command line tool used to check target live or not. Only if taget is live, further exploitation can be done.
      </p>

      <span class="type">Using ping in command line(CMD):</span>
      <p>A. Open Command Prompt(CMD) in windows(press win+R and type cmd).</p>
      <p>B. Type " ping target " (replace target with IP or Website or target).
        eg: ping www.xyz.abc or ping 127.0.0.1 </p>
      <p>
        C. Packets will be transferred between attacker and target. 0% loss indicates ping command completed and packets are successfuly transferred.
      </p>
      <p>
        D. TTL stands for Time ton live and generally 4 packets are transferred between attackers and target but it can be increased.
      </p>
      <p>
        E. To understand more about ping command, type ping -h or ping /? In terminal. It will help for ping command.
        it can be used in linux as well.
      </p>

      <span class="point">2. nsLookup:</span>
      <p>nsLookup is a command line tool used togather information about name server and target.</p>
      <span class="type">Using nsLookup in command line(CMD):</span>
      <p>
        1. Open Command Prompt(CMD) in windows(press win+R and type cmd).
      </p>
      <p>2. Type " nslookup target " (replace target with IP or Website or target).
        eg: nslookup www.xyz.abc or ping 127.0.0.1 </p>
      <p>3. To access interactive mode type nslookup and hit enter.</p>
      <p>4. You can gather information (shown in picture).</p>
      <p>5. To understand more about ping command, type nslookup -h or nslookup /? in terminal.
        It will help for ping command. It can be used in linux as well.
      </p>
      <p>
        6. You can change for Looking up mail servers, SOA and different services(mail server is shown in picture, for more check help command).
      </p>


      <!-- pull data through database start here  -->
      <?php
      $sql = "SELECT * FROM `pages` where prno = '10';";
      $result = mysqli_query($conn, $sql);


      while ($row = mysqli_fetch_assoc($result)) {

        $title1 = $row['title'];
        $paragraph1 = $row['paragraph'];
        $pno = $row['pno'];

        echo '<span class="pt">' . $title1 . '</span>
  <p>' . $paragraph1 . '</p>
 ';
      }

      ?>

      <!-- pull data through database end here  -->

    </div>
  </div>
  <!-- footprinting end here -->

  <!-- scanning start here -->
  <div id="scanning" class="tabcontent">
    <div id="main">
      <h1 class="heading">Scanning</h1>
      <span class="pt">Introduction</span>
      <p>Scanning is phase of information gathering in which attacker gather more advanced information about the target like open ports and services running, operating system of the target, etc.</p>
      <p>Generally this phase gives us vulnerable point about the target. Information gathered by scanning is very important in performing actual HACK.
        It is important phase which help in gaining access into the system. In scanning, Port scanning, Os fingerprinting, DNS enumerating, etc. will be covered.
      </p>
      <p><strong>Attacker &#x21E8; </strong> OSI Layer(Layer 3 & 4) <strong> &#x21E8; Target Network</strong>
      </p>
      <p>
        Between attacker and target the core OSI module layers, layer 3 which is Ipv4, ipv6 and icmp and layer 4 which is TCP and UDP is present.
        Transmission over a network is done through these layers. It is compulsory to understand the working of layer 3 and layer 4 of OSI module if attacker wish to penetrate over network layer.
      </p>

      <span class="pt">Basics Of Scanning</span>
      <span class="point">1. Connectivity of Host:</span>
      <p>To check whether the host is live or not, ping command is used (already covered in previous Section), only if the host is up attacker can further perform the exploits.
      </p>
      <span class="point">2. Port scanning:</span>
      <p>Port scanning is used to check for open ports and services running on them. Sometimes there are many ports open on the target system and some vulnerable services are running over them.
        It becomes easy to exploit into target system if we can list the vulnerable ports.</p>
      <span class="pt">Basic techniques of scanning:</span>
      <span class="point">1. Ping swap:</span>
      <p>Ping sweep is scanning a range of ip address one by one to check whether the target ip is alive or not.
        in this technique a range of ip address is defined in the same ping command just like ping 123.43.23.45/24, the whole range of ip address is scanned until or unless live target is found.
        This technique is mainly used when there is no specified target and hence targets the whole network to get live target.</p>
      <span class="point">Transmission Control Protocol(TCP):</span>
      <p>tcp contains flag, sniffing into tcp flags can provide information to a greater extent.
        there are following flags present in tcp.
      </p>
      <p><b>A. SYN: </b> Synchronize, initiates the connection between two systems.</p>
      <p><b>B. FIN: </b> finish, indicates that Transmission is finished.</p>
      <p><b>C. ACK: </b> Acknowledgement, establish the connection.</p>
      <p><b>D. RST: </b> Reset,used for resetting the connection established.</p>
      <p><b>E. URG: </b> Urgent,gives packet a priority to process immediately.</p>
      <p><b>F. PSH: </b> push, instructs the target to with buffer data immediately.</p>

      <span class="point">3. 3-Way handshake mechanism:</span>
      <p>3-way handshake is used for successful transmission of information or successful connection establishment.
        3-way Handshake process :</p>
      <p>The system A will initiate a connection request to the server via a packer with only SYN FLAG.</p>
      <p>Server will reply back with packet having both SYN & ACK flag set.</p>
      <p>Now the client responds back to the server with a single ACK packet.</p>
      <p>If the above steps are completed without any problem or complication, then a TCP connection will be established b/w the client and server.</p>

      <span class="pt">Scannig using tools</span>
      <span class="type">Some of important scannig tools are demonstrate below:</span>
      <span class="point"><b>A. Nmap:</b></span>
      <p>Nmap is a powerful network mapping tool. It is mainly used to perform port scanning and os fingerprinting.
        Open Kali Linux terminal and type nmap -h. it will show the help window of Nmap.</p>
      <span class="point">1. port scannig using Nmap.</span>
      <p>1. Open terminal in kali linux, type " ifconfig". It will show your internet address and mac address, to specifically check for Ethernet interface type " ifconfig eth0 ".</p>
      <p>2. Open new terminal, type " nmap -h ". It will open nmap help screen (as shown in screenshot).</p>
      <p>3. Name command structure is : nmap [scan type] [target] [target specification]
        For scanning the ports: nmap -sT [target] (for TCP Scan).</p>
      <p>4. To check how nmap works, Etherape and Wireshark are used.</p>
      <p>5. To install the etherape, open new terminal and type apt-get install etherape". Input Y for the additional space.</p>
      <p>6. Open a terminal and type "wireshark". Wireshark windows will opens, now select the layers on which analysis has to take place. Click on start capturing. (shown in the pictures.)</p>
      <p>7. Open a terminal and type "Etherape". Once the packets starts exchanging, the network traffic will be illustrated in etherape. (see in picture.)</p>
      <p> 8. Nmap will list all the ports open and this information is used to exploit the vulnerable ports.</p>
      <span class="point">2. OS fingerprinting using Nmap:</span>
      <p>1. Open terminal in kali linux, type " ifconfig". It will show your internet address and mac address, to specifically check for Ethernet interface type " ifconfig eth0 ".</p>
      <p>2. Open new terminal, type " nmap -h ". It will open nmap help screen (as shown in picture).</p>
      <p>3. Name command structure is nmap [scan type] [target] [target specification]</p>
      <p>4. For OS Figerprinting : nmap -O [target].</p>
      <p>5. Nmap will list all the open ports along with the operating system running on target machine. It may be range or operating system like xp spl - sp3 or specified os. (shown in image)</p>

      <span class="point"><b>B. Dnsenum:</b></span>
      <p>Dnsenum is one of the powerful dns enumeration tool, pre-installed in kali linux.</p>
      <span class="point">Enumerating DNS using dnsenum:</span>
      <p>1. Open terminal in kali linux and type "dnsenum -h ". Help screen will be shown up.</p>
      <p>2. Command for performing enumeration is " dnsenum [target]"</p>
      <p>3. For ex: dnsenum www.xyz.abc</p>
      <p>4. Details of dns will be enumerated as shown in picture.</p>
      <p>5. There are many information gathering tools which are pre installed in kali linux. (to check working of any tool, just type "[tool name] -h" or "[tool name] /?").</p>

      <span class="point"><b>C. Hping3:</b></span>
      <p>Hping 3 is a powerful tool which is pre-installed in kali linux. Hping is a used for advanced pinging, packet crafting, flooding the target by dos and many other uses.
        To take the overview of hping tool, open terminal in kali linux and type "hping3-h ". it will open help screen of hping tool. There are many options for performing various attacks. (shown in picture)
      </p>
      <span class="point">Performing a flag scan using hping3:</span>
      <p>1. Open terminal in kali linux and type "wireshark". wireshark will be opened and choose interface on which packet sniffing is to be performed. Click on Start Capture and minimize the window.</p>
      <p>2. Open new terminal and type "hping -S [target]".</p>
      <p>3. Once the command is completed, maximize the wireshark window and analyse the packets, all the captured packets will be SYN Packet. (shown in picture.)</p>
      <p>4. Practise for various attack vectors of hping3. It is one of the important tools which is also useful in later stages.</p>

      <!-- pull data through database start here  -->
      <?php
      $sql = "SELECT * FROM `pages` where prno = '11';";
      $result = mysqli_query($conn, $sql);


      while ($row = mysqli_fetch_assoc($result)) {

        $title1 = $row['title'];
        $paragraph1 = $row['paragraph'];
        $pno = $row['pno'];

        echo '<span class="pt">' . $title1 . '</span>
  <p>' . $paragraph1 . '</p>
 ';
      }

      ?>

      <!-- pull data through database end here  -->

    </div>
  </div>
  <!-- scanning end here -->

  <!-- hacking into system start here -->
  <div id="hacking_into_system" class="tabcontent">
    <div id="main">
      <h1 class="heading">Hacking Into System</h1>
      <span class="pt">System Hacking</span>
      <p>
        In the phase of system hacking, attacker actually performs HACK, This is exploitation phase of hacking.
        Information gathered from previous phases is required to perform hack. From the various phases like scanning and footprinting, attacker gathers information about target and finds the vulnerability.
        Now using the same vulnerability, in phase of system hacking, attacker performs the actual HACK.
      </p>
      <p>
        In system hacking, we perform cracking system passwords in order to escalate the privileges.
      </p>

      <span class="pt">Password Cracking</span>
      <span class="type">password Cracking attacks are following type:</span>
      <span class="point">1. Passive Online Cracking:</span>
      <p>In the passive online cracking, attacker tries to authenticate into system by cracking the passwords using bruteforce, dictionary attacks or rainbow tables.</p>
      <p>This method is quite complex and time consuming. Also there is no surety of getting the password cracked.</p>
      <span class="point">2. Active online Cracking:</span>
      <p>In active online cracking, attacker generally guesses the passwords in order to gain access into the system. </p>
      <p>Generally, bad passwords and open authentication points are vulnerable to active online cracking. Although it consumes a lot of time and is less efficient way.</p>
      <span class="point">3. Offline Attack:</span>
      <p>In offline attacks, attacker tries to exploit Lan manager hash (LM Hash), LM hashes are much vulnerable because of the short length and short key they use. Offline attacks are also take much time to crack the passwords.</p>
      <p>Generally in offline attacks, attacker performs dictionary, hybrid or brute force attacks.</p>
      <span class="point">Non-electric media attacks:</span>
      <p>In this, password cracking took place with using any technical medium.</p>
      <p>Generally, shoulder surfing, dumpster diving and social engineering is used to gain passwords and sensitive information.</p>
      <p>Hardware key loggers can also be used to sniff each and every typo by the keybord. This is Commonly used non-electric media attacks.</p>

      <span class="pt">Default password databases:</span>
      <p>There are many websites which contains databases of default usernames,passwords,ports and various information of networking or other devices.</p>
      <p>Sometimes, default password provides the access into target system. From the attacker's point of view each and every possibilities should be cover.</p>
      <span class="type">Some of the websites which contains default password database are:</span>
      <span class="point">1. <a href="http://www.defaultpassword.us/">www.defaultpassword.com</a></span>
      <span class="point">2. <a href="https://cirt.net/passwords">cirt.net/passwords</a></span>

      <span class="pt">Manual Password Cracking:</span>
      <p>1. Ping the target network to check whether it is live or not. ultimately choose a valid target.</p>
      <p>2. Make a list of all possible passwords (easily available online).</p>
      <p>3. Define the priority of each password on the basis of the key defined.</p>
      <p>4. Try to get access using password, in case of failure, again try with different password.</p>

      <span class="pt">Automated Password Cracking:</span>
      <p>automated password cracking uses algorithms to crack passwords. Automated password cracking provides attacker an ease and is quite faster than manual password cracking.</p>
      <span class="point"><b>A. Dictionary Attack:</b></span>
      <p>1. In the dictionary attack, firstly the encryption algorithm used is found.</p>
      <p>2. The encrypted password is than obtained.</p>
      <p>3. From the lists of passwords, each password is encrypted using the same encryption algorithm and matched with original encrypted password (obtained in step 2).</p>
      <p>4. It matches each encrypted password with original encrypted password, until the match is found.</p>
      <p>5. If match is found, it show the password, else the procedure is repeated again.</p>
      <p>Attack speed is around 250-300 words per second.</p>

      <span class="point"><b>B. Lan Manager Hash:</b></span>
      <p>LM Hash is a algorithm by which the passwords are encrypted.</p>
      <span class="point">Algorithm of LM HASH:</span>
      <p>1. Suppose the password created is 234567xyzabcd_.</p>
      <p>2. Firstly, all the characters are converted into uppercase letters, i.e. 234567XYZABCD_.</p>
      <p>3. If the password is less than 14 characters in length, null is added until the length of 14.</p>
      <p>4. Now the password is split into half, i.e. 234567X and YZABCD_.</p>
      <p>5. Each half is separately encrypted and the result is concatenated.</p>
      <p>6. Now to crack the alpha-numeric part (first half), it take more than 20hours. Whereas it takes less than 5 minutes to crack the alphabetic part (second half).</p>

      <span class="point">C. Salting:</span>
      <p>Salting is a prevention mechanism for the passwords. It disables or prevents deriving of passwords from the lists of passwords.
        In salting, the two different hashes may contain same passwords, hence the representation differs.</p>

      <span class="pt">Process Of System Hacking:</span>
      <span class="point"><b>A. Privilege Escalation:</b></span>
      <p>In this, when the user gained access to the target system by any user account, next requirement is to gain access into administrative account or to gain higher privileges than that of administrator.
        This process is known as privilege escalation.</p>
      <span class="point"><b>B. Executing Applications to maintain access :</b></span>
      <p>Once the privileges are successfully escalated, attacker executes applications like backdoors or Trojans to maintain his access into the system.
        This is one of the important phase where attacker needs to be careful, else he might get caught.</p>

      <span class="pt">Keyloggers</span>
      <p>Keyloggers are specially designer software or hardware which are used to track keystroke activities of the target system.
        Keylogger may also track every activity of the target system depending upon the keylogger's construction.</p>
      <span class="type">Keyloggers are two types:</span>
      <span class="point">1.Software Based Keyloggers:</span>
      <p>Software based keyloggers are installed into target system They have ability to run into background without getting caught by antiviruses.
        They track every keystroke typed and anonymously send all the data to the attacker on a fixed interval of time.</p>
      <span class="point">2.Hardawre Based Keyloggers:</span>
      <p>Generally, a hardware is connected between keyboard and cpu, this intermediate hardware device tracks every keystroke typed and save them into proper log files, which is accessible by the attacker.</p>
      <p>Generally software based keyloggers are used. Hence it is not safe to use untrusted system, there may be chances of keyloggers installed.
        Any sensitive information might get transferred to the attacker without target's knowledge.</p>

      <span class="pt">Using Refog Keylogger:</span>
      <p>1. Download refog keylogger from following link:</p>
      <p>2. Install it into the target system and allows it to run in Background.</p>
      <p>3. Tick the details which should be tracked by the keylogger like keystroke, websites visited, etc.</p>
      <p>4. Provide the email to which attacker need to receive the data stored by keylogger (paid version only.) (Refog keylogger shown in the screenshot).</p>

      <span class="pt">Spywares:</span>
      <p>Spywares are specially designed programs which are used to track each and every activity of the target system.</p>
      <p>A spyware is evolution of keylogger. The main purpose of keylogger is to track keystroke whereas spyware tracks each and every activity.</p>
      <span class="type">A spyware can track following activity:</span>
      <span class="point"><strong>1. Processes running on the target system.</strong></span>
      <span class="point"><strong>2. Keystrokes typed</strong></span>
      <span class="point"><strong>3. Applications opened</strong></span>
      <span class="point"><strong>4. Websites visited</strong></span>
      <span class="point"><strong>5. Chats and IM information</strong></span>
      <span class="point"><strong>6. Email conversations, Etc.</strong></span>
      <span class="type">Anti-keyloggers and anti-spywares are used to detect the presence of keyloggers and spywares.</span>
      <span class="point"><strong>C. Hiding into target system :</strong></span>

      <span class="pt">Rootkits</span>
      <p>Rootkits are kernal level program which is have able to hide themselves. They can remotely traces the activities hiding themselves into target system. </p>
      <p>During the installation, a rootkit replaces some operating system utilities with its own modified versions of the same utilities in order to efficiently hide itself.</p>
      <p>A rootkit allows an attacker to maintain hidden and anonymous access into the system. Hence the attacker is able to plot the viruses the target system.</p>
      <p>Once the target system is infected, it's not easy to get rid of it. Rootkits are invisible inside the system and aren't easily swiped out.</p>
      <span class="point"><strong>D. Clearing the tracks:</strong></span>
      <p>once the attacker maintained the administrative level access into the target system. The target may try to detect the presence of the attacker.
        When attacker is done with his work inside the target system, he leaves the target system after installing a back door for future access.</p>
      <p> Before leaving the system, attacker needs to cover all the tracks to not get caught.</p>
      <span class="type">Several precautions are performed by the attacker</span>
      <span class="type">1. Clearing Audit policy</span>
      <p>Once the attacker gain administrative privileges of target system, first step performed is disabling the audit manager.</p>
      <p>1. Open command Prompt (run in administrative mode).</p>
      <p>2 Type auditpol exe /clear (shown in screenshot).</p>
      <p>Before leaving the system restore the audit policy by some backup files from the command line. (cmd>auditpol.exe /restore).</p>

      <!-- pull data through database start here  -->
      <?php
      $sql = "SELECT * FROM `pages` where prno = '12';";
      $result = mysqli_query($conn, $sql);


      while ($row = mysqli_fetch_assoc($result)) {

        $title1 = $row['title'];
        $paragraph1 = $row['paragraph'];
        $pno = $row['pno'];

        echo '<span class="pt">' . $title1 . '</span>
  <p>' . $paragraph1 . '</p>
 ';
      }

      ?>

      <!-- pull data through database end here  -->

    </div>
  </div>
  <!-- hacking into system end here  -->

  <!-- Trojans and Backdoors start-->
  <div id="trojans_and_backdoors" class="tabcontent">
    <div id="main">
      <h1 class="heading">Trojans And Backdoors</h1>

      <!-- pull data through database start here  -->
      <?php
      $sql = "SELECT * FROM `pages` where prno = '13';";
      $result = mysqli_query($conn, $sql);
      $noResult13 = true;

      while ($row = mysqli_fetch_assoc($result)) {

        $title1 = $row['title'];
        $paragraph1 = $row['paragraph'];
        $pno = $row['pno'];
        $noResult13 = false;

        echo '<span class="pt">' . $title1 . '</span>
  <p>' . $paragraph1 . '</p>
 ';
      }

      if ($noResult13) {
        echo '<span class="pt">Coming Soon...</span>';
      }

      ?>

      <!-- pull data through database end here  -->

    </div>
  </div>
  <!-- Trojans and Backdoors end -->

  <!-- viruses and worms start here -->
  <div id="viruses_and_worms" class="tabcontent">
    <div id="main">
      <h1 class="heading">Viruses And Worms</h1>

      <!-- pull data through database start here  -->
      <?php
      $sql = "SELECT * FROM `pages` where prno = '14';";
      $result = mysqli_query($conn, $sql);
      $noResult14 = true;

      while ($row = mysqli_fetch_assoc($result)) {

        $title1 = $row['title'];
        $paragraph1 = $row['paragraph'];
        $pno = $row['pno'];
        $noResult14 = false;

        echo '<span class="pt">' . $title1 . '</span>
  <p>' . $paragraph1 . '</p>
 ';
      }

      if ($noResult14) {
        echo '<span class="pt">Coming Soon...</span>';
      }

      ?>

      <!-- pull data through database end here  -->


    </div>
  </div>
  <!-- viruses and worms end here -->

  <!-- Social engineering Start here -->
  <div id="social_engineering" class="tabcontent">
    <div id="main">
      <h1 class="heading">Social Engineering</h1>

      <!-- pull data through database start here  -->
      <?php
      $sql = "SELECT * FROM `pages` where prno = '15';";
      $result = mysqli_query($conn, $sql);
      $noResult15 = true;

      while ($row = mysqli_fetch_assoc($result)) {

        $title1 = $row['title'];
        $paragraph1 = $row['paragraph'];
        $pno = $row['pno'];
        $noResult15 = false;

        echo '<span class="pt">' . $title1 . '</span>
  <p>' . $paragraph1 . '</p>
 ';
      }

      if ($noResult15) {
        echo '<span class="pt">Coming Soon...</span>';
      }

      ?>

      <!-- pull data through database end here  -->


    </div>
  </div>
  <!-- Social engeering end here -->

  <!-- cryptography start here -->
  <div id="cryptography" class="tabcontent">
    <div id="main">
      <h1 class="heading">Cryptography</h1>

      <!-- pull data through database start here  -->
      <?php
      $sql = "SELECT * FROM `pages` where prno = '16';";
      $result = mysqli_query($conn, $sql);
      $noResult16 = true;

      while ($row = mysqli_fetch_assoc($result)) {

        $title1 = $row['title'];
        $paragraph1 = $row['paragraph'];
        $pno = $row['pno'];
        $noResult16 = false;

        echo '<span class="pt">' . $title1 . '</span>
  <p>' . $paragraph1 . '</p>
 ';
      }

      if ($noResult16) {
        echo '<span class="pt">Coming Soon...</span>';
      }

      ?>

      <!-- pull data through database end here  -->


    </div>
  </div>
  <!-- cryptography end here -->

  <!-- stegonography start here -->
  <div id="stegonography" class="tabcontent">
    <div id="main">
      <h1 class="heading">Stegonography</h1>

      <!-- pull data through database start here  -->
      <?php
      $sql = "SELECT * FROM `pages` where prno = '17';";
      $result = mysqli_query($conn, $sql);
      $noResult17 = true;

      while ($row = mysqli_fetch_assoc($result)) {

        $title1 = $row['title'];
        $paragraph1 = $row['paragraph'];
        $pno = $row['pno'];
        $noResult17 = false;

        echo '<span class="pt">' . $title1 . '</span>
  <p>' . $paragraph1 . '</p>
 ';
      }

      if ($noResult17) {
        echo '<span class="pt">Coming Soon...</span>';
      }

      ?>

      <!-- pull data through database end here  -->


    </div>
  </div>
  <!-- stegonography end here -->

  <!-- Velnerability Assessment Start here -->
  <div id="velnerability_assessment" class="tabcontent">
    <div id="main">
      <h1 class="heading">Velnerability Assessment</h1>

      <!-- pull data through database start here  -->
      <?php
      $sql = "SELECT * FROM `pages` where prno = '18';";
      $result = mysqli_query($conn, $sql);
      $noResult18 = true;

      while ($row = mysqli_fetch_assoc($result)) {

        $title1 = $row['title'];
        $paragraph1 = $row['paragraph'];
        $pno = $row['pno'];
        $noResult18 = false;

        echo '<span class="pt">' . $title1 . '</span>
  <p>' . $paragraph1 . '</p>
 ';
      }

      if ($noResult18) {
        echo '<span class="pt">Coming Soon...</span>';
      }

      ?>

      <!-- pull data through database end here  -->


    </div>
  </div>
  <!-- Velnerability Assessment end here -->

  <!-- Deep Web & Dark Web Start here -->
  <div id="deep_web_and_dark_web" class="tabcontent">
    <div id="main">
      <h1 class="heading">Deep Web And Dark Web</h1>

      <!-- pull data through database start here  -->
      <?php
      $sql = "SELECT * FROM `pages` where prno = '19';";
      $result = mysqli_query($conn, $sql);
      $noResult19 = true;

      while ($row = mysqli_fetch_assoc($result)) {

        $title1 = $row['title'];
        $paragraph1 = $row['paragraph'];
        $pno = $row['pno'];
        $noResult19 = false;

        echo '<span class="pt">' . $title1 . '</span>
  <p>' . $paragraph1 . '</p>
 ';
      }

      if ($noResult19) {
        echo '<span class="pt">Coming Soon...</span>';
      }

      ?>

      <!-- pull data through database end here  -->


    </div>
  </div>
  <!-- Deep web & Dark web end here -->

  <!-- Denial Of Service Start here -->
  <div id="denial_of_service" class="tabcontent">
    <div id="main">
      <h1 class="heading">Denial Of Service(DOS).</h1>

      <!-- pull data through database start here  -->
      <?php
      $sql = "SELECT * FROM `pages` where prno = '20';";
      $result = mysqli_query($conn, $sql);
      $noResult20 = true;

      while ($row = mysqli_fetch_assoc($result)) {

        $title1 = $row['title'];
        $paragraph1 = $row['paragraph'];
        $pno = $row['pno'];
        $noResult20 = false;

        echo '<span class="pt">' . $title1 . '</span>
  <p>' . $paragraph1 . '</p>
 ';
      }

      if ($noResult20) {
        echo '<span class="pt">Coming Soon...</span>';
      }

      ?>

      <!-- pull data through database end here  -->


    </div>
  </div>
  <!-- Denial Of Service end here -->

  <!-- penetration testing start here -->
  <div id="penetration_testing" class="tabcontent">
    <div id="main">
      <h1 class="heading">Penetration Testing.</h1>

      <!-- pull data through database start here  -->
      <?php
      $sql = "SELECT * FROM `pages` where prno = '21';";
      $result = mysqli_query($conn, $sql);
      $noResult21 = true;

      while ($row = mysqli_fetch_assoc($result)) {

        $title1 = $row['title'];
        $paragraph1 = $row['paragraph'];
        $pno = $row['pno'];
        $noResult21 = false;

        echo '<span class="pt">' . $title1 . '</span>
  <p>' . $paragraph1 . '</p>
 ';
      }

      if ($noResult21) {
        echo '<span class="pt">Coming Soon...</span>';
      }

      ?>

      <!-- pull data through database end here  -->


    </div>
  </div>
  <!-- penetration testing end here -->

  <!-- wireless network exploitation start here -->
  <div id="wireless_network_exploitation" class="tabcontent">
    <div id="main">
      <h1 class="heading">Wireless Network Exploitation</h1>

      <!-- pull data through database start here  -->
      <?php
      $sql = "SELECT * FROM `pages` where prno = '22';";
      $result = mysqli_query($conn, $sql);
      $noResult22 = true;

      while ($row = mysqli_fetch_assoc($result)) {

        $title1 = $row['title'];
        $paragraph1 = $row['paragraph'];
        $pno = $row['pno'];
        $noResult22 = false;

        echo '<span class="pt">' . $title1 . '</span>
  <p>' . $paragraph1 . '</p>
 ';
      }

      if ($noResult22) {
        echo '<span class="pt">Coming Soon...</span>';
      }

      ?>

      <!-- pull data through database end here  -->


    </div>
  </div>
  <!-- wireless network exploitation end here -->


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

        <h4 class="user"><span class="user-symbol">&#9962; Address: </span> <?php print_r($_SESSION['address']); ?></h4>

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

  <!--slide navbar start-->
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtnn" onclick="closeNav()">&times;</a>
    <button class="accordion">Introduction to Ethical-Hacking</button>
    <div class="panel">
      <a href="#" class="parts" onclick="openTab(event, 'intro_to_ethical_hacking')" id="defaultOpen">Introduction to Ethical-Hacking.</a>
      <a href="#" class="parts" onclick="openTab(event, 'ports_and_protocols')">Ports & Protocols.</a>
      <a href="#" class="parts" onclick="openTab(event, 'Virtualization_and_kali_linux')">Virtualization & Kali Linux.</a>
      <a href="#" class="parts" onclick="openTab(event, 'footprinting')">Footprinting.</a>
      <a href="#" class="parts" onclick="openTab(event, 'scanning')">Scanning.</a>
    </div>

    <button class="accordion">Performing A Hacking</button>
    <div class="panel">
      <a href="#" class="parts" onclick="openTab(event, 'hacking_into_system')">Hacking Into System.</a>
      <a href="#" class="parts" onclick="openTab(event, 'trojans_and_backdoors')">Trojans & Backdoors.</a>
      <a href="#" class="parts" onclick="openTab(event, 'viruses_and_worms')">Viruses & Worms.</a>
      <a href="#" class="parts" onclick="openTab(event, 'social_engineering')">Social Engineering.</a>
      <a href="#" class="parts" onclick="openTab(event, 'cryptography')">Cryptography.</a>
      <a href="#" class="parts" onclick="openTab(event, 'stegonography')">Stegonography.</a>
      <a href="#" class="parts" onclick="openTab(event, 'velnerability_assessment')">Velnerability Assessment.</a>
      <a href="#" class="parts" onclick="openTab(event, 'deep_web_and_dark_web')">Deep Web & Dark Web.</a>
    </div>

    <button class="accordion">Advance Hacking</button>
    <div class="panel">
      <a href="#" class="parts" onclick="openTab(event, 'denial_of_service')">Denial of Service.</a>
      <a href="#" class="parts" onclick="openTab(event, 'penetration_testing')">Penetration Testing.</a>
      <a href="#" class="parts" onclick="openTab(event, 'wireless_network_exploitation')">wireless network exploitation.</a>
    </div>
  </div>
  <!--slide navbar end-->
  <footer>
    <h4 class="footer"><span class="copyright-symbol"> &#169; </span> All Rights Reserved By Dhiraj Mokal & Nachiket Lokhande.</h4>
  </footer>
  <!--javascript start-->
  <script src="../script/script.js"></script>
  <!--javacript end-->
</body>

</html>