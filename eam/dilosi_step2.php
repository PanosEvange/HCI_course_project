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
              <li><a href="./dilosi_step1.php" title=""><em>Επιλογή Μαθημάτων</em></a></li>
              <li class="current"><a href="#" title=""><em>Επιλογή Συγγραμμάτων</em></a></li>
              <li><a href="#" title=""><em>Ολοκλήρωση Δήλωσης</em></a></li>
            </ul>
        </div>

        <div class="dilosi-step2-select-book">
            <h1 class="title">Τεχνητή Νοημοσύνη</h1>
            <fieldset id="group1">
                <div class="books-list-item">
                    <label class="dilosi-book-radio-button">
                      <input type="radio" checked="checked" name="group1">
                      <span class="checkmark"></span>
                    </label>
                    <div class="dilosi-book-title">
                        ΤΕΧΝΗΤΗ ΝΟΗΜΟΣΥΝΗ - ΕΚΔΟΣΕΙΣ ΠΑΝ/ΜΙΟΥ ΜΑΚΕΔΟΝΙΑΣ (13.4%)
                    </div>
                    <div class="dilosi-book-info">
                        <a href="./under_construction" title="more-info">Περισσότερες Πληροφορίες</a>
                    </div>
                    <div class="dilosi-book-comments">
                        <a href="#" title="comments">Σχόλια(2)</a>
                    </div>
                </div>
                <div class="books-list-item">
                    <label class="dilosi-book-radio-button">
                      <input type="radio" name="group1">
                      <span class="checkmark"></span>
                    </label>
                    <div class="dilosi-book-title">
                        ΤΕΧΝΗΤΗ ΝΟΗΜΟΣΥΝΗ: ΜΙΑ ΣΥΓΧΡΟΝΗ ΠΡΟΣΕΓΓΙΣΗ - ΕΚΔΟΣΕΙΣ ΚΛΕΙΔΑΡΙΘΜΟΣ (86.6%)
                    </div>
                    <div class="dilosi-book-info">
                        <a href="./under_construction" title="more-info">Περισσότερες Πληροφορίες</a>
                    </div>
                    <div class="dilosi-book-comments">
                        <a href="#" title="comments">Σχόλια(17)</a>
                    </div>
                </div>
            </fieldset>
        </div>

        <div class="dilosi-step2-select-book">
            <h1 class="title">Λειτουργικά Συστήματα</h1>
            <fieldset id="group2">
                <div class="books-list-item">
                    <label class="dilosi-book-radio-button">
                      <input type="radio" checked="checked" name="group2">
                      <span class="checkmark"></span>
                    </label>
                    <div class="dilosi-book-title">
                        ΛΕΙΤΟΥΡΓΙΚΑ ΣΥΣΤΗΜΑΤΑ - Χ. ΓΚΙΟΥΡΔΑ (39.2%)
                    </div>
                    <div class="dilosi-book-info">
                        <a href="./under_construction" title="more-info">Περισσότερες Πληροφορίες</a>
                    </div>
                    <div class="dilosi-book-comments">
                        <a href="#" title="comments">Σχόλια(4)</a>
                    </div>
                </div>
                <div class="books-list-item">
                    <label class="dilosi-book-radio-button">
                      <input type="radio" name="group2">
                      <span class="checkmark"></span>
                    </label>
                    <div class="dilosi-book-title">
                        ΣΥΓΧΡΟΝΑ ΛΕΙΤΟΥΡΓΙΚΑ ΣΥΣΤΗΜΑΤΑ - ΕΚΔΟΣΕΙΣ ΚΛΕΙΔΑΡΙΘΜΟΣ (60.8%)
                    </div>
                    <div class="dilosi-book-info">
                        <a href="./under_construction" title="more-info">Περισσότερες Πληροφορίες</a>
                    </div>
                    <div class="dilosi-book-comments">
                        <a href="#" title="comments">Σχόλια(9)</a>
                    </div>
                </div>
            </fieldset>
        </div>

        <div class="dilosi-step2-select-book">
            <h1 class="title">Γραφικά 1</h1>
            <fieldset id="group3">
                <div class="books-list-item">
                    <label class="dilosi-book-radio-button">
                      <input type="radio" checked="checked" name="group3">
                      <span class="checkmark"></span>
                    </label>
                    <div class="dilosi-book-title">
                        Γραφικά και Οπτικοποιήση - Εκδόσεις Συμμετρία (62.9%)
                    </div>
                    <div class="dilosi-book-info">
                        <a href="./under_construction" title="more-info">Περισσότερες Πληροφορίες</a>
                    </div>
                    <div class="dilosi-book-comments">
                        <a href="#" title="comments">Σχόλια(6)</a>
                    </div>
                </div>
                <div class="books-list-item">
                    <label class="dilosi-book-radio-button">
                      <input type="radio" name="group3">
                      <span class="checkmark"></span>
                    </label>
                    <div class="dilosi-book-title">
                        Γραφικά Αρχές και Αλγόριθμοι - Εκδόσεις Συμμετρία (37.1%)
                    </div>
                    <div class="dilosi-book-info">
                        <a href="./under_construction" title="more-info">Περισσότερες Πληροφορίες</a>
                    </div>
                    <div class="dilosi-book-comments">
                        <a href="#" title="comments">Σχόλια(4)</a>
                    </div>
                </div>
            </fieldset>
        </div>

        <div class="previous-step">
            <a class="btn" href="./dilosi_step1.php" title="dilosi_step1"><i class="fa fa-angle-left" aria-hidden="true"></i> Προηγούμενο Βήμα </a>
        </div>

        <div class="next-step">
            <a class="btn" href="./dilosi_step2.php" title="dilosi_step2">Επόμενο Βήμα <i class="fa fa-angle-right" aria-hidden="true"></i></a>
        </div>

        <?php include 'footer.php';?>

    </body>
</html>
