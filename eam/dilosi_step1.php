<?php
session_start();
?>
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

        <link href="./vendor/jquery-ui-1.12.1.custom/jquery-ui.min.css" rel="stylesheet">
        <script src="./vendor/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>

        <script src="main.js"></script>
        <title> New Eudoxus </title>
    </head>
    <body>

        <?php include 'header.php';?>

        <?php include 'userOptions.php';?>

        <div class="below-nav-bar">
            <div class="my-breadcrumb">
                <ul class="breadcrumb">
                  <li><a href="./index.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                  <li><a href="./student_app.php">Εφαρμογή Φοιτητών</a></li>
                  <li>Δήλωση Συγγραμμάτων</li>
                </ul>
            </div>

            <?php include 'isLoggedIn.php';?>

        </div>

        <div class="dilosi-steps-breadcrumb">
            <ul class="steps steps-3">
              <li class="current"><a href="#" title=""><em>Επιλογή Μαθημάτων</em></a></li>
              <li><a href="#" title=""><em>Επιλογή Συγγραμμάτων</em></a></li>
              <li><a href="#" title=""><em>Ολοκλήρωση Δήλωσης</em></a></li>
            </ul>
        </div>

        <div class="dilosi-step1-select-subjects">
            <h1 class="title">Επιλέξτε τα μαθήματα για τα οποία επιθυμείτε σύγγραμμα:</h1>
            <ul class="subjects-list">
              <li>
                  <label class="label-my-checkbox">Τεχνητή Νοημοσύνη
                      <input type="checkbox" name="subject1" value="subject1">
                      <span class="checkmark"></span>
                  </label>
              </li>
              <li>
                  <label class="label-my-checkbox">Λειτουργικά Συστήματα
                      <input type="checkbox" name="subject2" value="subject2">
                      <span class="checkmark"></span>
                  </label>
              </li>
              <li>
                  <label class="label-my-checkbox">Παράλληλα Συστήματα
                      <input type="checkbox" name="subject3" value="subject3">
                      <span class="checkmark"></span>
                  </label>
              </li>
              <li>
                  <label class="label-my-checkbox">Γραφικά 1
                      <input type="checkbox" name="subject4" value="subject4">
                      <span class="checkmark"></span>
                  </label>
              </li>
              <li>
                  <label class="label-my-checkbox">Αρχές Γλωσσών Προγραμματισμού
                      <input type="checkbox" name="subject5" value="subject5">
                      <span class="checkmark"></span>
                  </label>
              </li>
              <li>
                  <label class="label-my-checkbox">Αριθμητική Ανάλυση
                      <input type="checkbox" name="subject6" value="subject6">
                      <span class="checkmark"></span>
                  </label>
              </li>
            </ul>
        </div>

        <div class="next-step">
            <a class="btn" href="./dilosi_step2.php" title="dilosi_step2">Επόμενο Βήμα <i class="fa fa-angle-right" aria-hidden="true"></i></a>
        </div>

        <?php include 'footer.php';?>

    </body>
</html>