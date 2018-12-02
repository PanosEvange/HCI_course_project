<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

        <!-- Bootstrap core CSS -->
        <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Bootstrap core JavaScript -->
        <script src="./vendor/jquery/jquery.min.js"></script>
        <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="main.js"></script>
        <title> New Eudoxus </title>
    </head>
    <body>

        <?php include 'header.php';?>


        <div class="below-nav-bar">
            <div class="my-breadcrumb">
                <ul class="breadcrumb">
                  <li><a href="./index.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                </ul>
            </div>

            <?php
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                    // User is logged in
                    echo
                    '
                    <div class="login-area">
                        <div class="user-info">
                            <a href="./under_construction.php" >
                    '
                            . $_SESSION['username'] .
                    '
                            </span></a>
                        </div>
                        <div class="my-logout">
                            <a href="./under_construction.php" >Αποσύνδεση</span></a>
                        </div>
                    </div>
                    ';
                }
                else {
                    // User is not logged in
                    include 'login_options.php';
                }
            ?>

        </div>


            <div class="main-content mr-auto ml-auto">
                <div class="my-section student-area">
                  <div class="title-area">
                    <h5><i class="fa fa-graduation-cap" aria-hidden="true"></i>Φοιτητής</h5>
                  </div>
                  <div class="button-area">
                          <a href="./under_construction.php" class="btn section-button" >Δήλωση Συγγραμμάτων</span></a>
                          <a href="./under_construction.php" class="btn section-button" >Ανταλλαγή Συγγραμμάτων</a>
                          <a href="./under_construction.php" class="btn section-button" >Εφαρμογή Φοιτητών</a>
                          <a href="./under_construction.php" class="btn section-button" ><span class="my-content">Πληροφορίες <br> για Φοιτητές</a>
                  </div>
                </div>
                <div class="my-section secretary-area">
                    <div class="title-area">
                      <h5><i class="fa fa-graduation-cap" aria-hidden="true"></i>Γραμματεία</h5>
                    </div>
                    <div class="button-area">
                            <a href="./under_construction.php" class="btn section-button" >Δήλωση Συγγραμμάτων</span></a>
                            <a href="./under_construction.php" class="btn section-button" >Ανταλλαγή Συγγραμμάτων</a>
                            <a href="./under_construction.php" class="btn section-button" >Εφαρμογή Φοιτητών</a>
                            <a href="./under_construction.php" class="btn section-button" ><span class="my-content">Πληροφορίες <br> για Φοιτητές</a>
                    </div>
                </div>
                <div class="my-section publisher-area">
                    <div class="title-area">
                      <h5><i class="fa fa-graduation-cap" aria-hidden="true"></i>Γραμματεία</h5>
                    </div>
                    <div class="button-area">
                            <a href="./under_construction.php" class="btn section-button" >Δήλωση Συγγραμμάτων</span></a>
                            <a href="./under_construction.php" class="btn section-button" >Ανταλλαγή Συγγραμμάτων</a>
                            <a href="./under_construction.php" class="btn section-button" >Εφαρμογή Φοιτητών</a>
                            <a href="./under_construction.php" class="btn section-button" ><span class="my-content">Πληροφορίες <br> για Φοιτητές</a>
                    </div>
                </div>
                <div class="my-section library-area">
                    <div class="title-area">
                      <h5><i class="fa fa-graduation-cap" aria-hidden="true"></i>Γραμματεία</h5>
                    </div>
                    <div class="button-area">
                            <a href="./under_construction.php" class="btn section-button" >Δήλωση Συγγραμμάτων</span></a>
                            <a href="./under_construction.php" class="btn section-button" >Ανταλλαγή Συγγραμμάτων</a>
                            <a href="./under_construction.php" class="btn section-button" >Εφαρμογή Φοιτητών</a>
                            <a href="./under_construction.php" class="btn section-button" ><span class="my-content">Πληροφορίες <br> για Φοιτητές</a>
                    </div>
                </div>
            </div>

            <div class="my-announcement mr-auto ml-auto">
                Anouncements
            </div>

        <?php include 'footer.php';?>

    </body>
</html>
