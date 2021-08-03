<?php
echo'<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
<a class="navbar-brand" href="#">Admin Panel</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavDropdown">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="admin.php">Contact<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="users.php">Users</a>
    </li>
<li class="nav-item">
      <a class="nav-link" href="logged.php">Logged</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="registration.php">New Account</a>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="manageaccount" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Manage Website
      </a>
      <div class="dropdown-menu" aria-labelledby="manageaccount">
        <a class="dropdown-item text-success bg-white" href="cyber-security.php">Cyber Security</a>
        <a class="dropdown-item text-success bg-white" href="ethical-hacking.php">Ethical Hacking</a>
      </div>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        My Account
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item text-success bg-white" href="#" title="Username">'.$username.'</a>
        <a class="dropdown-item text-success bg-white" href="#" title="Name">'.$name.'</a>
        <a class="dropdown-item text-danger bg-white" href="../logout.php">Logout</a>
      </div>
    </li>
  </ul>
</div>
</nav>';
?>