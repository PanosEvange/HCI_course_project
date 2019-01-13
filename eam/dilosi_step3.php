<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="./vendor/fontawesome-free-5.5.0-web/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="./css/style.css">

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

        <script src="./js/main.js"></script>
        <title> New Eudoxus </title>
    </head>
    <body>

        <?php include 'header.php';?>

        <?php include 'userOptions.php';?>

        <div class="my-breadcrumb">
            <ul class="breadcrumb">
              <li><a href="./index.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
              <li><a href="./student_app.php">Εφαρμογή Φοιτητών</a></li>
              <li>Δήλωση Συγγραμμάτων</li>
            </ul>
        </div>


        <div class="dilosi-steps-breadcrumb">
            <ul class="steps steps-3">
              <li><a href="./dilosi_step1.php" title=""><em>Επιλογή Μαθημάτων</em></a></li>
              <li><a href="./dilosi_step2.php" title=""><em>Επιλογή Συγγραμμάτων</em></a></li>
              <li class="current"><a href="#" title=""><em>Ολοκλήρωση Δήλωσης</em></a></li>
            </ul>
        </div>

        <div class="dilosi-step3-select-delivery">
            <h1 class="title">Τεχνητή Νοημοσύνη</h1>
            <div class="books-list-final-info">
                <div class="books-list-final-title">
                    Σύγγραμμα: ΤΕΧΝΗΤΗ ΝΟΗΜΟΣΥΝΗ: ΜΙΑ ΣΥΓΧΡΟΝΗ ΠΡΟΣΕΓΓΙΣΗ
                </div>
                <div class="books-list-final-middle">
                    <div class="books-list-final-comments">
                        <a href="./under_construction.php" title="more-info">Περισσότερες Πληροφορίες</a>
                        | <a href="#" title="comments">Σχόλια(17)</a>
                    </div>
                    <div class="books-list-final-delivery">
                        <div class="my-select-title-books-list-final-delivery">
                            Τρόπος Παραλαβής:
                        </div>
                        <div class="my-select-books-list-final-delivery my-select-books-list-final-delivery-1">
                            <select id="books-list-final-delivery-select1" onchange="deliverySelect1()">
                                <option value="" selected disabled hidden>Επιλέξτε Τρόπο</option>
                                <option value="publisher">Από σημείο διανομής του εκδότη</option>
                                <option value="library">Από Πανεπιστημιακή Βιβλιοθήκη</option>
                                <option value="home">Παράδοση στο σπίτι</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="books-list-final-hours">
                    Ωράριο: 11:00-17:00 Δευτέρα-Παρασκευή <br/>
                    Διεύθυνση: Ακαδημίας 42, Αθήνα 106 72 <br/>
                    <a href="./under_construction.php" title="map">Εμφάνιση στο χάρτη</a>
                </div>
            </div>
        </div>

        <div class="dilosi-step3-select-delivery">
            <h1 class="title">Λειτουργικά Συστήματα</h1>
            <div class="books-list-final-info">
                <div class="books-list-final-title">
                    Σύγγραμμα: ΛΕΙΤΟΥΡΓΙΚΑ ΣΥΣΤΗΜΑΤΑ
                </div>
                <div class="books-list-final-middle">
                    <div class="books-list-final-comments">
                        <a href="./under_construction.php" title="more-info">Περισσότερες Πληροφορίες</a>
                        | <a href="#" title="comments">Σχόλια(4)</a>
                    </div>
                    <div class="books-list-final-delivery">
                        <div class="my-select-title-books-list-final-delivery">
                            Τρόπος Παραλαβής:
                        </div>
                        <div class="my-select-books-list-final-delivery my-select-books-list-final-delivery-2">
                            <select id="books-list-final-delivery-select2" onchange="deliverySelect2()">
                                <option value="" selected disabled hidden>Επιλέξτε Τρόπο</option>
                                <option value="publisher">Από σημείο διανομής του εκδότη</option>
                                <option value="library">Από Πανεπιστημιακή Βιβλιοθήκη</option>
                                <option value="home">Παράδοση στο σπίτι</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="books-list-final-hours">
                    Ωράριο: 08:30-19:00 Δευτέρα-Παρασκευή <br/>
                    Διεύθυνση: Ακαδημίας 75, Αθήνα 106 72 <br/>
                    <a href="./under_construction.php" title="map">Εμφάνιση στο χάρτη</a>
                </div>
            </div>
        </div>

        <div class="dilosi-step3-select-delivery">
            <h1 class="title">Γραφικά 1</h1>
            <div class="books-list-final-info">
                <div class="books-list-final-title">
                    Σύγγραμμα: Γραφικά και Οπτικοποίηση
                </div>
                <div class="books-list-final-middle">
                    <div class="books-list-final-comments">
                        <a href="./under_construction.php" title="more-info">Περισσότερες Πληροφορίες</a>
                        | <a href="#" title="comments">Σχόλια(6)</a>
                    </div>
                    <div class="books-list-final-delivery">
                        <div class="my-select-title-books-list-final-delivery">
                            Τρόπος Παραλαβής:
                        </div>
                        <div class="my-select-books-list-final-delivery my-select-books-list-final-delivery-3">
                            <select id="books-list-final-delivery-select3" onchange="deliverySelect3()">
                                <option value="" selected disabled hidden>Επιλέξτε Τρόπο</option>
                                <option value="publisher">Από σημείο διανομής του εκδότη</option>
                                <option value="library">Από Πανεπιστημιακή Βιβλιοθήκη</option>
                                <option value="home">Παράδοση στο σπίτι</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="books-list-final-hours">
                    Ωράριο: 09:00-16:00 Δευτέρα-Παρασκευή <br/>
                    Διεύθυνση: Ιωάννου Θεολόγου 80, Ζωγράφου 157 73 <br/>
                    <a href="./under_construction.php" title="map">Εμφάνιση στο χάρτη</a>
                </div>
            </div>
        </div>

        <div class="dilosi-step3-notifications">
            <div class="poria-dilosis">
                Ενημέρωση για την πορεία της δήλωσης: <br/>
                <input type="checkbox" name="SMS" value="SMS"> Μέσω SMS<br>
                <input type="checkbox" name="e-mail" value="e-mail"> Μέσω e-mail<br>
            </div>
            <div class="availability">
                Ενημέρωση για την διαθεσιμότητα συγγραμμάτων: <br/>
                <input type="checkbox" name="SMS" value="SMS"> Μέσω SMS<br>
                <input type="checkbox" name="e-mail" value="e-mail"> Μέσω e-mail<br>
            </div>
        </div>
        <div class="previous-step">
            <a class="btn" href="./dilosi_step2.php" title="dilosi_step1"><i class="fa fa-angle-left" aria-hidden="true"></i> Προηγούμενο Βήμα </a>
        </div>

        <div class="next-step">
            <a class="btn" href="./student_app.php?succesfulDilosi" title="complete">Ολοκλήρωση Δήλωσης <i class="fa fa-angle-right" aria-hidden="true"></i></a>
        </div>

        <?php include 'footer.php';?>

    </body>
</html>
