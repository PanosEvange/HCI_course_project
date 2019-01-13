<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="/vendor/fontawesome-free-5.5.0-web/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/style.css">

        <!-- Bootstrap core CSS -->
        <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Bootstrap core JavaScript -->
        <script src="/vendor/jquery/jquery.min.js"></script>
        <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <link href="/vendor/select2-4.0.6-rc.1/dist/css/select2.css" rel="stylesheet">
        <script src="/vendor/select2-4.0.6-rc.1/dist/js/select2.js"></script>

        <script src="/vendor/bootstrap-datepicker-1.6.4-dist/js/bootstrap-datepicker.min.js"></script>
        <link href="/vendor/bootstrap-datepicker-1.6.4-dist/css/bootstrap-datepicker.standalone.css" rel="stylesheet">

        <link href="/vendor/jquery-ui-1.12.1.custom/jquery-ui.min.css" rel="stylesheet">
        <script src="/vendor/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>

        <script src="/js/main.js"></script>
        <title> New Eudoxus </title>
    </head>
    <body>

        <?php
            $path = $_SERVER['DOCUMENT_ROOT'];
            $path .= "/common/header.php";
            include $path;
        ?>

        <?php
            $path = $_SERVER['DOCUMENT_ROOT'];
            $path .= "/common/userOptions.php";
            include $path;
        ?>

            <div class="secretary-app-step2 my-breadcrumb">
                <ul class="breadcrumb">
                  <li><a href="/index.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                  <li><a href="/secretary/secretary_app.php">Εφαρμογή Γραμματείας</a></li>
                  <li><a href="/secretary/secretary_edit_books.php">Επεξεργασία Συγγραμμάτων Για Μαθήματα</a></li>
                  <li>Διακριτά Μαθηματικά 1</li>
                </ul>
            </div>

        <div class="secretary-step2-subject-info">
            <div class="subject-info-to-edit-title">
                <b>Μάθημα:</b>   Διακριτά Μαθηματικά 1
            </div>
            <div class="subject-info-to-edit-professor">
                <b>Καθηγητής:</b> Ιάκωβος Χριστόπουλος
            </div>
            <div class="subject-info-to-edit-semister">
                <b>Εξάμηνο:</b> 3ο
            </div>
        </div>

        <div class="add-book-secretary-step2">
            <a href="/common/under_construction.php" class="btn">Προσθήκη Συγγράμματος</a>
        </div>

        <div class="editBookResult">
            <div class="editBookResult-image">
                <img src="/images/150.png" alt="Image Placeholder">
            </div>
            <div class="editBookResult-title">
                Διακριτά Μαθηματικά για Χημικούς
            </div>
            <div class="editBookResult-authors">
                Συγγραφείς: Γιώργος Παπαδόπουλος, Δημήτρης Ανδρέου
            </div>
            <div class="editBookResult-remove">
                <a href="#" id="remove-book-1"> Αφαίρεση Βιβλίου από το Μάθημα </a>
            </div>
        </div>

        <div class="editBookResult">
            <div class="editBookResult-image">
                <img src="/images/150.png" alt="Image Placeholder">
            </div>
            <div class="editBookResult-title">
                Διακριτά Μαθηματικά για Φυσικούς
            </div>
            <div class="editBookResult-authors">
                Συγγραφείς: Ιωάννου Ονούφριος
            </div>
            <div class="editBookResult-remove">
                <a href="#" id="remove-book-2"> Αφαίρεση Βιβλίου από το Μάθημα </a>
            </div>
        </div>

        <div class="editBookResult">
            <div class="editBookResult-image">
                <img src="/images/150.png" alt="Image Placeholder">
            </div>
            <div class="editBookResult-title">
                Διακριτά Μαθηματικά μια Εισαγωγή
            </div>
            <div class="editBookResult-authors">
                Συγγραφείς: Χαρούμενη Ελπινίκη
            </div>
            <div class="editBookResult-remove">
                <a href="#" id="remove-book-3"> Αφαίρεση Βιβλίου από το Μάθημα </a>
            </div>
        </div>

        <div class="editBooks-step2-placeholder">

        </div>

        <!-- Modal -->
        <div class="modal fade" id="removeBookModal1" tabindex="-1" role="dialog" aria-labelledby="removeBookModal1-Title" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="removeBookModal1-LongTitle">Επιβεβαίωση</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Είστε σίγουροι ότι θέλετε να αφαιρέσετε το σύγγραμμα "Διακριτά Μαθηματικά για Χημικούς" για το μάθημα <i>Διακριτά Μαθηματικά 1</i>;
              </div>
              <div class="modal-footer">
                <button type="button" id="success-remove-book" class="yes-button btn btn-primary" >Ναι</button>
                <button type="button" class="no-button btn btn-secondary" data-dismiss="modal">Όχι</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="removeBookModal2" tabindex="-1" role="dialog" aria-labelledby="removeBookModal2-Title" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="removeBookModal2-LongTitle">Επιβεβαίωση</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Είστε σίγουροι ότι θέλετε να αφαιρέσετε το σύγγραμμα "Διακριτά Μαθηματικά για Φυσικούς" για το μάθημα <i>Διακριτά Μαθηματικά 1</i>;
              </div>
              <div class="modal-footer">
                <button type="button" id="success-remove-book" class="yes-button btn btn-primary" >Ναι</button>
                <button type="button" class="no-button btn btn-secondary" data-dismiss="modal">Όχι</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="removeBookModal3" tabindex="-1" role="dialog" aria-labelledby="removeBookModal3-Title" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="removeBookModal3-LongTitle">Επιβεβαίωση</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Είστε σίγουροι ότι θέλετε να αφαιρέσετε το σύγγραμμα "Διακριτά Μαθηματικά μια Εισαγωγή" για το μάθημα <i>Διακριτά Μαθηματικά 1</i>;
              </div>
              <div class="modal-footer">
                <button type="button" id="success-remove-book" class="yes-button btn btn-primary" >Ναι</button>
                <button type="button" class="no-button btn btn-secondary" data-dismiss="modal">Όχι</button>
              </div>
            </div>
          </div>
        </div>

        <?php
            $path = $_SERVER['DOCUMENT_ROOT'];
            $path .= "/common/footer.php";
            include $path;
        ?>

    </body>
</html>
