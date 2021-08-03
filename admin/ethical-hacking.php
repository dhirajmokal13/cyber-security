<?php
session_start();
if (!isset($_SESSION['loggedinadmin']) || $_SESSION['loggedinadmin'] != true) {
    header("location: ../index.php");
    exit;
}

include '../dbconnect.php';
$username = $_SESSION['username1'];
$name = $_SESSION['name'];
$aid = $_SESSION['aid'];
$showAlert = false;
$showError = false;
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script>
        if (window.history.replaceState) {

            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    <title>Manage Ethical-hacking</title>
</head>

<body>
    <?php include '_navbar.php'; ?>
    <h1 class="d-flex justify-content-center mt-3 mx-3 text-primary" style="font-family:arial">Manage Ethical-Hacking Here</h1>

    <!-- main container start here -->
    <div class="container my-3">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-intro-tab" data-toggle="tab" href="#nav-intro" role="tab" aria-controls="nav-intro" aria-selected="true">Introduction</a>
                <a class="nav-item nav-link" id="nav-ports-tab" data-toggle="tab" href="#nav-ports" role="tab" aria-controls="nav-ports" aria-selected="false">Ports & Protocols</a>
                <a class="nav-item nav-link" id="nav-virtualization-tab" data-toggle="tab" href="#nav-virtualization" role="tab" aria-controls="nav-virtualization" aria-selected="false">Virtualization & kali linux</a>
                <a class="nav-item nav-link" id="nav-foot-tab" data-toggle="tab" href="#nav-foot" role="tab" aria-controls="nav-foot" aria-selected="false">Footprinting</a>
                <a class="nav-item nav-link" id="nav-scanning-tab" data-toggle="tab" href="#nav-scanning" role="tab" aria-controls="nav-scanning" aria-selected="false">Scanning</a>
                <a class="nav-item nav-link" id="nav-hacksys-tab" data-toggle="tab" href="#nav-hacksys" role="tab" aria-controls="nav-hacksys" aria-selected="false">Hacking Into System</a>
                <a class="nav-item nav-link" id="nav-troback-tab" data-toggle="tab" href="#nav-troback" role="tab" aria-controls="nav-troback" aria-selected="false">Trojans & Backdoors</a>
                <a class="nav-item nav-link" id="nav-virworm-tab" data-toggle="tab" href="#nav-virworm" role="tab" aria-controls="nav-virworm" aria-selected="false">Viruses & Worms</a>
                <a class="nav-item nav-link" id="nav-soceng-tab" data-toggle="tab" href="#nav-soceng" role="tab" aria-controls="nav-soceng" aria-selected="false">Social Engineering</a>
                <a class="nav-item nav-link" id="nav-crypto-tab" data-toggle="tab" href="#nav-crypto" role="tab" aria-controls="nav-crypto" aria-selected="false">Cryptography</a>
                <a class="nav-item nav-link" id="nav-stegono-tab" data-toggle="tab" href="#nav-stegono" role="tab" aria-controls="nav-stegono" aria-selected="false">Stegonography</a>
                <a class="nav-item nav-link" id="nav-velnera-tab" data-toggle="tab" href="#nav-velnera" role="tab" aria-controls="nav-velnera" aria-selected="false">Velnerability Assessment</a>
                <a class="nav-item nav-link" id="nav-dark-tab" data-toggle="tab" href="#nav-dark" role="tab" aria-controls="nav-dark" aria-selected="false">Deep Web & Dark Web</a>
                <a class="nav-item nav-link" id="nav-dos-tab" data-toggle="tab" href="#nav-dos" role="tab" aria-controls="nav-dos" aria-selected="false">Denail of Service</a>
                <a class="nav-item nav-link" id="nav-pen-tab" data-toggle="tab" href="#nav-pen" role="tab" aria-controls="nav-pen" aria-selected="false">Penetration Testing</a>
                <a class="nav-item nav-link" id="nav-wire-tab" data-toggle="tab" href="#nav-wire" role="tab" aria-controls="nav-wire" aria-selected="false">Wireless Network Exploitation</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <!-- introduction to ethical hacking start here -->
            <div class="tab-pane fade show active mt-4" id="nav-intro" role="tabpanel" aria-labelledby="nav-intro-tab">
                <h1 class="display-5 mb-3 mt-6 text-secondary">Introduction To Ethical Hacking</h1>
                <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                    <div class="form-group">
                        <label for="title">Enter The Title Here</label>
                        <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title" placeholder="Enter The Title" required>
                    </div>
                    <div class="form-group">
                        <label for="paragraph">Paragraph</label>
                        <textarea class="form-control" id="paragraph" rows="7" name="paragraph" placeholder="Enter Paragraph Content here" required></textarea>
                    </div>
                    <input type="hidden" name="prno" value="7">
                    <button type="submit" class="btn btn-outline-primary" name="page2">Submit</button>
                </form>


                <h2 class="display-5 mb-3 text-success" style="margin-top: 1.7rem">Recently Added</h1>
                    <?php
                    $sql8 = "SELECT * FROM `pages` where prno = '7';";
                    $result8 = mysqli_query($conn, $sql8);

                    while ($row = mysqli_fetch_assoc($result8)) {
                        $title1 = $row['title'];
                        $paragraph1 = $row['paragraph'];
                        $pno = $row['pno'];

                        echo '
                    <div class="card mt-4">
                     <h5 class="card-header text-secondary">' . $title1 . '</h5>
                      <div class="card-body">
                       <p class="card-text">' . $paragraph1 . '</p>
                          <a href="delete.php?deletepage2=' . $pno . '" class="btn btn-outline-danger">Remove</a>
                          <a href="updatepost.php?updatepage=' . $pno . '" class="btn btn-outline-success">Edit</a>
                      </div>
                     </div>
                    ';
                    }
                    ?>
            </div>
            <!-- introduction to ethical hacking end here -->

            <!-- ports and protocols start here -->
            <div class="tab-pane fade mt-4" id="nav-ports" role="tabpanel" aria-labelledby="nav-ports-tab">
                <h1 class="display-5 mb-3 mt-6 text-secondary">Ports And Protocols</h1>
                <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                    <div class="form-group">
                        <label for="title">Enter The Title Here</label>
                        <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title" placeholder="Enter The Title" required>
                    </div>
                    <div class="form-group">
                        <label for="paragraph">Paragraph</label>
                        <textarea class="form-control" id="paragraph" rows="7" name="paragraph" placeholder="Enter Paragraph Content here" required></textarea>
                    </div>
                    <input type="hidden" name="prno" value="8">
                    <button type="submit" class="btn btn-outline-primary" name="page2">Submit</button>
                </form>


                <h2 class="display-5 mb-3 text-success" style="margin-top: 1.7rem">Recently Added</h1>
                    <?php
                    $sql8 = "SELECT * FROM `pages` where prno = '8';";
                    $result8 = mysqli_query($conn, $sql8);

                    while ($row = mysqli_fetch_assoc($result8)) {
                        $title1 = $row['title'];
                        $paragraph1 = $row['paragraph'];
                        $pno = $row['pno'];

                        echo '
                    <div class="card mt-4">
                     <h5 class="card-header text-secondary">' . $title1 . '</h5>
                      <div class="card-body">
                       <p class="card-text">' . $paragraph1 . '</p>
                          <a href="delete.php?deletepage2=' . $pno . '" class="btn btn-outline-danger">Remove</a>
                          <a href="updatepost.php?updatepage=' . $pno . '" class="btn btn-outline-success">Edit</a>
                      </div>
                     </div>
                    ';
                    }
                    ?>
            </div>
            <!-- ports and protocols end here -->

            <!-- virtualization and kali linux start here -->
            <div class="tab-pane fade mt-4" id="nav-virtualization" role="tabpanel" aria-labelledby="nav-virtualization-tab">
                <h1 class="display-5 mb-3 mt-6 text-secondary">Virtualization And kali Linux</h1>
                <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                    <div class="form-group">
                        <label for="title">Enter The Title Here</label>
                        <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title" placeholder="Enter The Title" required>
                    </div>
                    <div class="form-group">
                        <label for="paragraph">Paragraph</label>
                        <textarea class="form-control" id="paragraph" rows="7" name="paragraph" placeholder="Enter Paragraph Content here" required></textarea>
                    </div>
                    <input type="hidden" name="prno" value="9">
                    <button type="submit" class="btn btn-outline-primary" name="page2">Submit</button>
                </form>


                <h2 class="display-5 mb-3 text-success" style="margin-top: 1.7rem">Recently Added</h1>
                    <?php
                    $sql8 = "SELECT * FROM `pages` where prno = '9';";
                    $result8 = mysqli_query($conn, $sql8);

                    while ($row = mysqli_fetch_assoc($result8)) {
                        $title1 = $row['title'];
                        $paragraph1 = $row['paragraph'];
                        $pno = $row['pno'];

                        echo '
                    <div class="card mt-4">
                     <h5 class="card-header text-secondary">' . $title1 . '</h5>
                      <div class="card-body">
                       <p class="card-text">' . $paragraph1 . '</p>
                          <a href="delete.php?deletepage2=' . $pno . '" class="btn btn-outline-danger">Remove</a>
                          <a href="updatepost.php?updatepage=' . $pno . '" class="btn btn-outline-success">Edit</a>
                      </div>
                     </div>
                    ';
                    }
                    ?>
            </div>
            <!-- virtualization and kali linux end here -->

            <!-- footprinting start here -->
            <div class="tab-pane fade mt-4" id="nav-foot" role="tabpanel" aria-labelledby="nav-foot-tab">
                <h1 class="display-5 mb-3 mt-6 text-secondary">Footprinting</h1>
                <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                    <div class="form-group">
                        <label for="title">Enter The Title Here</label>
                        <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title" placeholder="Enter The Title" required>
                    </div>
                    <div class="form-group">
                        <label for="paragraph">Paragraph</label>
                        <textarea class="form-control" id="paragraph" rows="7" name="paragraph" placeholder="Enter Paragraph Content here" required></textarea>
                    </div>
                    <input type="hidden" name="prno" value="10">
                    <button type="submit" class="btn btn-outline-primary" name="page2">Submit</button>
                </form>


                <h2 class="display-5 mb-3 text-success" style="margin-top: 1.7rem">Recently Added</h1>
                    <?php
                    $sql8 = "SELECT * FROM `pages` where prno = '10';";
                    $result8 = mysqli_query($conn, $sql8);

                    while ($row = mysqli_fetch_assoc($result8)) {
                        $title1 = $row['title'];
                        $paragraph1 = $row['paragraph'];
                        $pno = $row['pno'];

                        echo '
                    <div class="card mt-4">
                     <h5 class="card-header text-secondary">' . $title1 . '</h5>
                      <div class="card-body">
                       <p class="card-text">' . $paragraph1 . '</p>
                          <a href="delete.php?deletepage2=' . $pno . '" class="btn btn-outline-danger">Remove</a>
                          <a href="updatepost.php?updatepage=' . $pno . '" class="btn btn-outline-success">Edit</a>
                      </div>
                     </div>
                    ';
                    }
                    ?>
            </div>
            <!-- footprinting end here -->

            <!-- scanning start here -->
            <div class="tab-pane fade mt-4" id="nav-scanning" role="tabpanel" aria-labelledby="nav-scanning-tab">
                <h1 class="display-5 mb-3 mt-6 text-secondary">Scanning</h1>
                <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                    <div class="form-group">
                        <label for="title">Enter The Title Here</label>
                        <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title" placeholder="Enter The Title" required>
                    </div>
                    <div class="form-group">
                        <label for="paragraph">Paragraph</label>
                        <textarea class="form-control" id="paragraph" rows="7" name="paragraph" placeholder="Enter Paragraph Content here" required></textarea>
                    </div>
                    <input type="hidden" name="prno" value="11">
                    <button type="submit" class="btn btn-outline-primary" name="page2">Submit</button>
                </form>


                <h2 class="display-5 mb-3 text-success" style="margin-top: 1.7rem">Recently Added</h1>
                    <?php
                    $sql8 = "SELECT * FROM `pages` where prno = '11';";
                    $result8 = mysqli_query($conn, $sql8);

                    while ($row = mysqli_fetch_assoc($result8)) {
                        $title1 = $row['title'];
                        $paragraph1 = $row['paragraph'];
                        $pno = $row['pno'];

                        echo '
                    <div class="card mt-4">
                     <h5 class="card-header text-secondary">' . $title1 . '</h5>
                      <div class="card-body">
                       <p class="card-text">' . $paragraph1 . '</p>
                          <a href="delete.php?deletepage2=' . $pno . '" class="btn btn-outline-danger">Remove</a>
                          <a href="updatepost.php?updatepage=' . $pno . '" class="btn btn-outline-success">Edit</a>
                      </div>
                     </div>
                    ';
                    }
                    ?>
            </div>
            <!-- scanning end here -->

            <!-- hacking into system start here -->
            <div class="tab-pane fade mt-4" id="nav-hacksys" role="tabpanel" aria-labelledby="nav-hacksys-tab">
                <h1 class="display-5 mb-3 mt-6 text-secondary">Hacking Into System</h1>
                <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                    <div class="form-group">
                        <label for="title">Enter The Title Here</label>
                        <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title" placeholder="Enter The Title" required>
                    </div>
                    <div class="form-group">
                        <label for="paragraph">Paragraph</label>
                        <textarea class="form-control" id="paragraph" rows="7" name="paragraph" placeholder="Enter Paragraph Content here" required></textarea>
                    </div>
                    <input type="hidden" name="prno" value="12">
                    <button type="submit" class="btn btn-outline-primary" name="page2">Submit</button>
                </form>


                <h2 class="display-5 mb-3 text-success" style="margin-top: 1.7rem">Recently Added</h1>
                    <?php
                    $sql8 = "SELECT * FROM `pages` where prno = '12';";
                    $result8 = mysqli_query($conn, $sql8);

                    while ($row = mysqli_fetch_assoc($result8)) {
                        $title1 = $row['title'];
                        $paragraph1 = $row['paragraph'];
                        $pno = $row['pno'];

                        echo '
                    <div class="card mt-4">
                     <h5 class="card-header text-secondary">' . $title1 . '</h5>
                      <div class="card-body">
                       <p class="card-text">' . $paragraph1 . '</p>
                          <a href="delete.php?deletepage2=' . $pno . '" class="btn btn-outline-danger">Remove</a>
                          <a href="updatepost.php?updatepage=' . $pno . '" class="btn btn-outline-success">Edit</a>
                      </div>
                     </div>
                    ';
                    }
                    ?>
            </div>
            <!-- hacking into system end here -->

            <!-- trojans and backdoors start here -->
            <div class="tab-pane fade mt-4" id="nav-troback" role="tabpanel" aria-labelledby="nav-troback-tab">
                <h1 class="display-5 mb-3 mt-6 text-secondary">Trojans and Backdoors</h1>
                <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                    <div class="form-group">
                        <label for="title">Enter The Title Here</label>
                        <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title" placeholder="Enter The Title" required>
                    </div>
                    <div class="form-group">
                        <label for="paragraph">Paragraph</label>
                        <textarea class="form-control" id="paragraph" rows="7" name="paragraph" placeholder="Enter Paragraph Content here" required></textarea>
                    </div>
                    <input type="hidden" name="prno" value="13">
                    <button type="submit" class="btn btn-outline-primary" name="page2">Submit</button>
                </form>


                <h2 class="display-5 mb-3 text-success" style="margin-top: 1.7rem">Recently Added</h1>
                    <?php
                    $sql8 = "SELECT * FROM `pages` where prno = '13';";
                    $result8 = mysqli_query($conn, $sql8);

                    while ($row = mysqli_fetch_assoc($result8)) {
                        $title1 = $row['title'];
                        $paragraph1 = $row['paragraph'];
                        $pno = $row['pno'];

                        echo '
                    <div class="card mt-4">
                     <h5 class="card-header text-secondary">' . $title1 . '</h5>
                      <div class="card-body">
                       <p class="card-text">' . $paragraph1 . '</p>
                          <a href="delete.php?deletepage2=' . $pno . '" class="btn btn-outline-danger">Remove</a>
                          <a href="updatepost.php?updatepage=' . $pno . '" class="btn btn-outline-success">Edit</a>
                      </div>
                     </div>
                    ';
                    }
                    ?>
            </div>
            <!-- trojans and backdoors end here -->

            <!-- viruses and worms start here -->
            <div class="tab-pane fade mt-4" id="nav-virworm" role="tabpanel" aria-labelledby="nav-virworm-tab">
                <h1 class="display-5 mb-3 mt-6 text-secondary">Viruses And Worms</h1>
                <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                    <div class="form-group">
                        <label for="title">Enter The Title Here</label>
                        <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title" placeholder="Enter The Title" required>
                    </div>
                    <div class="form-group">
                        <label for="paragraph">Paragraph</label>
                        <textarea class="form-control" id="paragraph" rows="7" name="paragraph" placeholder="Enter Paragraph Content here" required></textarea>
                    </div>
                    <input type="hidden" name="prno" value="14">
                    <button type="submit" class="btn btn-outline-primary" name="page2">Submit</button>
                </form>


                <h2 class="display-5 mb-3 text-success" style="margin-top: 1.7rem">Recently Added</h1>
                    <?php
                    $sql8 = "SELECT * FROM `pages` where prno = '14';";
                    $result8 = mysqli_query($conn, $sql8);

                    while ($row = mysqli_fetch_assoc($result8)) {
                        $title1 = $row['title'];
                        $paragraph1 = $row['paragraph'];
                        $pno = $row['pno'];

                        echo '
                    <div class="card mt-4">
                     <h5 class="card-header text-secondary">' . $title1 . '</h5>
                      <div class="card-body">
                       <p class="card-text">' . $paragraph1 . '</p>
                          <a href="delete.php?deletepage2=' . $pno . '" class="btn btn-outline-danger">Remove</a>
                          <a href="updatepost.php?updatepage=' . $pno . '" class="btn btn-outline-success">Edit</a>
                      </div>
                     </div>
                    ';
                    }
                    ?>
            </div>
            <!-- viruses and Worms end here -->
            
            <!-- social engineering start here -->
            <div class="tab-pane fade mt-4" id="nav-soceng" role="tabpanel" aria-labelledby="nav-soceng-tab">
            <h1 class="display-5 mb-3 mt-6 text-secondary">Social Engineering</h1>
                <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                    <div class="form-group">
                        <label for="title">Enter The Title Here</label>
                        <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title" placeholder="Enter The Title" required>
                    </div>
                    <div class="form-group">
                        <label for="paragraph">Paragraph</label>
                        <textarea class="form-control" id="paragraph" rows="7" name="paragraph" placeholder="Enter Paragraph Content here" required></textarea>
                    </div>
                    <input type="hidden" name="prno" value="15">
                    <button type="submit" class="btn btn-outline-primary" name="page2">Submit</button>
                </form>

                
                <h2 class="display-5 mb-3 text-success" style="margin-top: 1.7rem">Recently Added</h1>
                    <?php
                    $sql8 = "SELECT * FROM `pages` where prno = '15';";
                    $result8 = mysqli_query($conn, $sql8);

                    while ($row = mysqli_fetch_assoc($result8)) {
                        $title1 = $row['title'];
                        $paragraph1 = $row['paragraph'];
                        $pno = $row['pno'];

                        echo '
                    <div class="card mt-4">
                     <h5 class="card-header text-secondary">' . $title1 . '</h5>
                      <div class="card-body">
                       <p class="card-text">' . $paragraph1 . '</p>
                          <a href="delete.php?deletepage2=' . $pno . '" class="btn btn-outline-danger">Remove</a>
                          <a href="updatepost.php?updatepage=' . $pno . '" class="btn btn-outline-success">Edit</a>
                      </div>
                     </div>
                    ';
                    }
                    ?>
            </div>
            <!-- social engineering end here -->
            
            <!-- cryptography start here -->
            <div class="tab-pane fade mt-4" id="nav-crypto" role="tabpanel" aria-labelledby="nav-crypto-tab">
            <h1 class="display-5 mb-3 mt-6 text-secondary">Cryptography</h1>
                <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                    <div class="form-group">
                        <label for="title">Enter The Title Here</label>
                        <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title" placeholder="Enter The Title" required>
                    </div>
                    <div class="form-group">
                        <label for="paragraph">Paragraph</label>
                        <textarea class="form-control" id="paragraph" rows="7" name="paragraph" placeholder="Enter Paragraph Content here" required></textarea>
                    </div>
                    <input type="hidden" name="prno" value="16">
                    <button type="submit" class="btn btn-outline-primary" name="page2">Submit</button>
                </form>

                
                <h2 class="display-5 mb-3 text-success" style="margin-top: 1.7rem">Recently Added</h1>
                    <?php
                    $sql8 = "SELECT * FROM `pages` where prno = '16';";
                    $result8 = mysqli_query($conn, $sql8);

                    while ($row = mysqli_fetch_assoc($result8)) {
                        $title1 = $row['title'];
                        $paragraph1 = $row['paragraph'];
                        $pno = $row['pno'];

                        echo '
                    <div class="card mt-4">
                     <h5 class="card-header text-secondary">' . $title1 . '</h5>
                      <div class="card-body">
                       <p class="card-text">' . $paragraph1 . '</p>
                          <a href="delete.php?deletepage2=' . $pno . '" class="btn btn-outline-danger">Remove</a>
                          <a href="updatepost.php?updatepage=' . $pno . '" class="btn btn-outline-success">Edit</a>
                      </div>
                     </div>
                    ';
                    }
                    ?>
            </div>
            <!-- cryptography end here -->
            
            <!-- Stegonography start here -->
            <div class="tab-pane fade mt-4" id="nav-stegono" role="tabpanel" aria-labelledby="nav-stegono-tab">
            <h1 class="display-5 mb-3 mt-6 text-secondary">Stegonography</h1>
                <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                    <div class="form-group">
                        <label for="title">Enter The Title Here</label>
                        <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title" placeholder="Enter The Title" required>
                    </div>
                    <div class="form-group">
                        <label for="paragraph">Paragraph</label>
                        <textarea class="form-control" id="paragraph" rows="7" name="paragraph" placeholder="Enter Paragraph Content here" required></textarea>
                    </div>
                    <input type="hidden" name="prno" value="17">
                    <button type="submit" class="btn btn-outline-primary" name="page2">Submit</button>
                </form>

                
                <h2 class="display-5 mb-3 text-success" style="margin-top: 1.7rem">Recently Added</h1>
                    <?php
                    $sql8 = "SELECT * FROM `pages` where prno = '17';";
                    $result8 = mysqli_query($conn, $sql8);

                    while ($row = mysqli_fetch_assoc($result8)) {
                        $title1 = $row['title'];
                        $paragraph1 = $row['paragraph'];
                        $pno = $row['pno'];

                        echo '
                    <div class="card mt-4">
                     <h5 class="card-header text-secondary">' . $title1 . '</h5>
                      <div class="card-body">
                       <p class="card-text">' . $paragraph1 . '</p>
                          <a href="delete.php?deletepage2=' . $pno . '" class="btn btn-outline-danger">Remove</a>
                          <a href="updatepost.php?updatepage=' . $pno . '" class="btn btn-outline-success">Edit</a>
                      </div>
                     </div>
                    ';
                    }
                    ?>
            </div>
            <!-- Stegonography end here -->
            
            <!-- Velnerability assessment start here -->
            <div class="tab-pane fade mt-4" id="nav-velnera" role="tabpanel" aria-labelledby="nav-velnera-tab">
            <h1 class="display-5 mb-3 mt-6 text-secondary">Velnerability Assessment</h1>
                <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                    <div class="form-group">
                        <label for="title">Enter The Title Here</label>
                        <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title" placeholder="Enter The Title" required>
                    </div>
                    <div class="form-group">
                        <label for="paragraph">Paragraph</label>
                        <textarea class="form-control" id="paragraph" rows="7" name="paragraph" placeholder="Enter Paragraph Content here" required></textarea>
                    </div>
                    <input type="hidden" name="prno" value="18">
                    <button type="submit" class="btn btn-outline-primary" name="page2">Submit</button>
                </form>

                
                <h2 class="display-5 mb-3 text-success" style="margin-top: 1.7rem">Recently Added</h1>
                    <?php
                    $sql8 = "SELECT * FROM `pages` where prno = '18';";
                    $result8 = mysqli_query($conn, $sql8);

                    while ($row = mysqli_fetch_assoc($result8)) {
                        $title1 = $row['title'];
                        $paragraph1 = $row['paragraph'];
                        $pno = $row['pno'];

                        echo '
                    <div class="card mt-4">
                     <h5 class="card-header text-secondary">' . $title1 . '</h5>
                      <div class="card-body">
                       <p class="card-text">' . $paragraph1 . '</p>
                          <a href="delete.php?deletepage2=' . $pno . '" class="btn btn-outline-danger">Remove</a>
                          <a href="updatepost.php?updatepage=' . $pno . '" class="btn btn-outline-success">Edit</a>
                      </div>
                     </div>
                    ';
                    }
                    ?>
            </div>
            <!-- velenerability assessment end here -->
            
            <!-- deep web and dark web start here -->
            <div class="tab-pane fade mt-4" id="nav-dark" role="tabpanel" aria-labelledby="nav-dark-tab">
            <h1 class="display-5 mb-3 mt-6 text-secondary">Deep Web And Dark Web</h1>
                <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                    <div class="form-group">
                        <label for="title">Enter The Title Here</label>
                        <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title" placeholder="Enter The Title" required>
                    </div>
                    <div class="form-group">
                        <label for="paragraph">Paragraph</label>
                        <textarea class="form-control" id="paragraph" rows="7" name="paragraph" placeholder="Enter Paragraph Content here" required></textarea>
                    </div>
                    <input type="hidden" name="prno" value="19">
                    <button type="submit" class="btn btn-outline-primary" name="page2">Submit</button>
                </form>

                
                <h2 class="display-5 mb-3 text-success" style="margin-top: 1.7rem">Recently Added</h1>
                    <?php
                    $sql8 = "SELECT * FROM `pages` where prno = '19';";
                    $result8 = mysqli_query($conn, $sql8);

                    while ($row = mysqli_fetch_assoc($result8)) {
                        $title1 = $row['title'];
                        $paragraph1 = $row['paragraph'];
                        $pno = $row['pno'];

                        echo '
                    <div class="card mt-4">
                     <h5 class="card-header text-secondary">' . $title1 . '</h5>
                      <div class="card-body">
                       <p class="card-text">' . $paragraph1 . '</p>
                          <a href="delete.php?deletepage2=' . $pno . '" class="btn btn-outline-danger">Remove</a>
                          <a href="updatepost.php?updatepage=' . $pno . '" class="btn btn-outline-success">Edit</a>
                      </div>
                     </div>
                    ';
                    }
                    ?>
            </div>
            <!-- deep web and dark web end here -->

            <!-- denail of service start here -->
            <div class="tab-pane fade mt-4" id="nav-dos" role="tabpanel" aria-labelledby="nav-dos-tab">
            <h1 class="display-5 mb-3 mt-6 text-secondary">Denail Of Service (D.O.S)</h1>
                <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                    <div class="form-group">
                        <label for="title">Enter The Title Here</label>
                        <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title" placeholder="Enter The Title" required>
                    </div>
                    <div class="form-group">
                        <label for="paragraph">Paragraph</label>
                        <textarea class="form-control" id="paragraph" rows="7" name="paragraph" placeholder="Enter Paragraph Content here" required></textarea>
                    </div>
                    <input type="hidden" name="prno" value="20">
                    <button type="submit" class="btn btn-outline-primary" name="page2">Submit</button>
                </form>

                
                <h2 class="display-5 mb-3 text-success" style="margin-top: 1.7rem">Recently Added</h1>
                    <?php
                    $sql8 = "SELECT * FROM `pages` where prno = '20';";
                    $result8 = mysqli_query($conn, $sql8);

                    while ($row = mysqli_fetch_assoc($result8)) {
                        $title1 = $row['title'];
                        $paragraph1 = $row['paragraph'];
                        $pno = $row['pno'];

                        echo '
                    <div class="card mt-4">
                     <h5 class="card-header text-secondary">' . $title1 . '</h5>
                      <div class="card-body">
                       <p class="card-text">' . $paragraph1 . '</p>
                          <a href="delete.php?deletepage2=' . $pno . '" class="btn btn-outline-danger">Remove</a>
                          <a href="updatepost.php?updatepage=' . $pno . '" class="btn btn-outline-success">Edit</a>
                      </div>
                     </div>
                    ';
                    }
                    ?>
            </div>
            <!-- denail of service end here -->
            
            <!-- pentesting start here -->
            <div class="tab-pane fade mt-4" id="nav-pen" role="tabpanel" aria-labelledby="nav-pen-tab">
            <h1 class="display-5 mb-3 mt-6 text-secondary">Penetration Testing</h1>
                <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                    <div class="form-group">
                        <label for="title">Enter The Title Here</label>
                        <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title" placeholder="Enter The Title" required>
                    </div>
                    <div class="form-group">
                        <label for="paragraph">Paragraph</label>
                        <textarea class="form-control" id="paragraph" rows="7" name="paragraph" placeholder="Enter Paragraph Content here" required></textarea>
                    </div>
                    <input type="hidden" name="prno" value="21">
                    <button type="submit" class="btn btn-outline-primary" name="page2">Submit</button>
                </form>

                
                <h2 class="display-5 mb-3 text-success" style="margin-top: 1.7rem">Recently Added</h1>
                    <?php
                    $sql8 = "SELECT * FROM `pages` where prno = '21';";
                    $result8 = mysqli_query($conn, $sql8);

                    while ($row = mysqli_fetch_assoc($result8)) {
                        $title1 = $row['title'];
                        $paragraph1 = $row['paragraph'];
                        $pno = $row['pno'];

                        echo '
                    <div class="card mt-4">
                     <h5 class="card-header text-secondary">' . $title1 . '</h5>
                      <div class="card-body">
                       <p class="card-text">' . $paragraph1 . '</p>
                          <a href="delete.php?deletepage2=' . $pno . '" class="btn btn-outline-danger">Remove</a>
                          <a href="updatepost.php?updatepage=' . $pno . '" class="btn btn-outline-success">Edit</a>
                      </div>
                     </div>
                    ';
                    }
                    ?>
            </div>
            <!-- pentesting end here -->

            <!-- wireless network exploitation start here -->
            <div class="tab-pane fade mt-4" id="nav-wire" role="tabpanel" aria-labelledby="nav-wire-tab">
            <h1 class="display-5 mb-3 mt-6 text-secondary">Wireless Network Exploitation</h1>
                <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                    <div class="form-group">
                        <label for="title">Enter The Title Here</label>
                        <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title" placeholder="Enter The Title" required>
                    </div>
                    <div class="form-group">
                        <label for="paragraph">Paragraph</label>
                        <textarea class="form-control" id="paragraph" rows="7" name="paragraph" placeholder="Enter Paragraph Content here" required></textarea>
                    </div>
                    <input type="hidden" name="prno" value="22">
                    <button type="submit" class="btn btn-outline-primary" name="page2">Submit</button>
                </form>

                
                <h2 class="display-5 mb-3 text-success" style="margin-top: 1.7rem">Recently Added</h1>
                    <?php
                    $sql8 = "SELECT * FROM `pages` where prno = '22';";
                    $result8 = mysqli_query($conn, $sql8);

                    while ($row = mysqli_fetch_assoc($result8)) {
                        $title1 = $row['title'];
                        $paragraph1 = $row['paragraph'];
                        $pno = $row['pno'];

                        echo '
                    <div class="card mt-4">
                     <h5 class="card-header text-secondary">' . $title1 . '</h5>
                      <div class="card-body">
                       <p class="card-text">' . $paragraph1 . '</p>
                          <a href="delete.php?deletepage2=' . $pno . '" class="btn btn-outline-danger">Remove</a>
                          <a href="updatepost.php?updatepage=' . $pno . '" class="btn btn-outline-success">Edit</a>
                      </div>
                     </div>
                    ';
                    }
                    ?>
            </div>
            <!-- wireless network exploitation end here -->
        </div>
    </div>
    <!-- main container end here   -->

    <!-- footer start here -->
    <?php
    include '_footer.php';
    ?>
    <!-- footer end here -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>


<?php
if (isset($_POST['page2'])) {
    $title = $_POST['title'];
    $sign = array("&", "'", "/", '"', " ");
    $symbol = array("&amp;", "&apos;", "&sol;", '&quot;',"&nbsp;");
    $title = str_replace("<", "&lt;", $title);
    $title = str_replace(">", "&gt;", $title);
    $title = str_replace($sign, $symbol, $title);

    $paragraph = $_POST['paragraph'];
    $paragraph = str_replace("<", "&lt;", $paragraph);
    $paragraph = str_replace(">", "&gt;", $paragraph);
    $paragraph = str_replace($sign, $symbol, $paragraph);
    $prno = $_POST['prno'];

    $sql4 = "INSERT INTO `pages` (`title`, `paragraph`, `prno`, `idate`) VALUES ('$title', '$paragraph', '$prno', current_timestamp());";
    $result4 = mysqli_query($conn, $sql4);
    if ($result4) {
        $showAlert = ' successfully Added';
    } else {
        $showError = ' unsuccessful to Add';
    }
}
?>


<?php
if ($showAlert) {
    echo '<div class="alert alert-success alert-dismissible fade show position-absolute" role="alert" style="top:58px; width: 100%;">
   <strong>Succesful </strong>' . $showAlert . '                     
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>
    ';
}
?>

<?php
if ($showError) {
    echo '<div class="alert alert-warning alert-dismissible fade show position-absolute" role="alert" style="top: 58px; width: 100%;">
  <strong>!Error</strong>' . $showError . '
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    ';
}
?>