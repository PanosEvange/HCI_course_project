<?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        // User is logged in
        echo
        '
        <div id="accordion" class="user-options">
          <div class="card">
              <div id="collapseOne" class="collapse" data-parent="#accordion">
                <div class="card-body user-options-buttons">
                    <a href="./under_construction.php" class="btn"> Δήλωση Συγγραμμάτων </a>
                    <a href="./under_construction.php" class="btn my-ml"> Ανταλλαγή Συγγραμμάτων </a>
                    <a href="./student_app.php" class="btn my-ml"> Εφαρμογή Φοιτητών </a>
                    <a href="./under_construction.php" class="btn my-ml"> Πληροφορίες για Φοιτητές </a>
                </div>
              </div>
            <div class="card-header">
              <a class="card-link" data-toggle="collapse" href="#collapseOne">
                Οι επιλογές μου   <i class="fa fa-angle-down" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        ';
    }
    else {
        // User is not logged in
    }
?>
