<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="./vendor/fontawesome-free-5.5.0-web/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css">

        <!-- Bootstrap core CSS -->
        <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Bootstrap core JavaScript -->
        <script src="./vendor/jquery/jquery.min.js"></script>
        <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <link href="./vendor/select2-4.0.6-rc.1/dist/css/select2.css" rel="stylesheet">
        <script src="./vendor/select2-4.0.6-rc.1/dist/js/select2.js"></script>

        <script src="./vendor/bootstrap-datepicker-1.6.4-dist/js/bootstrap-datepicker.min.js"></script>
        <link href="./vendor/bootstrap-datepicker-1.6.4-dist/css/bootstrap-datepicker.standalone.css" rel="stylesheet">

        <script src="main.js"></script>
        <title> New Eudoxus </title>
    </head>
    <body>

        <?php include 'header.php';?>

        <div class="below-nav-bar">
            <div class="my-breadcrumb">
                <ul class="breadcrumb">
                  <li><a href="./index.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                  <li>Εγγραφή</li>
                </ul>
            </div>

            <?php include 'isLoggedIn.php';?>

        </div>

        <div class="groups-option-registration">
            <div class="student-reg-opt">
                <a href="./registration_form_student.php" class="btn"><i class="fa fa-graduation-cap" aria-hidden="true"></i><br/>Εγγραφή<br/>Φοιτητή</a>
            </div>
            <div class="secret-reg-opt">
                <a href="./registration_form_secret.php" class="btn"><i class="fa fa-graduation-cap" aria-hidden="true"></i><br/>Εγγραφή<br/>Γραμματείας</a>
            </div>
            <div class="publisher-reg-opt">
                <a href="./registration_form_publisher.php" class="btn"><i class="fa fa-graduation-cap" aria-hidden="true"></i><br/>Εγγραφή<br/>Εκδότη</a>
            </div>
            <div class="library-reg-opt">
                <a href="./under_construction.php" class="btn"><i class="fa fa-graduation-cap" aria-hidden="true"></i><br/>Εγγραφή<br/>Βιβλιοθήκης</a>
            </div>
        </div>



        <?php include 'footer.php';?>

    </body>
</html>
