<?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        if (isset($_SESSION['userType'])){
            if( $_SESSION['userType'] == 'Student' ){
                echo
                '
                <div id="accordion" class="student-user-options user-options">
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
                      <a class="card-link" data-toggle="collapse" id="user-options-whole-area-icon" href="#collapseOne">
                        Οι επιλογές μου   <i id="user-options-icon" class="fa fa-angle-down" aria-hidden="true"></i>
                      </a>
                    </div>
                  </div>
                </div>
                ';
            }
            else if( $_SESSION['userType'] == 'Secretary' ){
                echo
                '
                <div id="accordion" class="secretary-user-options user-options">
                  <div class="card">
                      <div id="collapseOne" class="collapse" data-parent="#accordion">
                        <div class="card-body user-options-buttons">
                            <a href="./under_construction.php" class="btn" >Διαχείριση Συγγραμμάτων</a>
                            <a href="./under_construction.php" class="btn my-ml" >Επεξεργασία <br> Προγράμματος Σπουδών</a>
                            <a href="./secretary_app.php" class="btn my-ml" >Εφαρμογή Γραμματείας</a>
                            <a href="./under_construction.php" class="btn my-ml" ><span class="my-content">Πληροφορίες <br> για Γραμματείς</a>
                        </div>
                      </div>
                    <div class="card-header">
                      <a class="card-link" data-toggle="collapse" id="user-options-whole-area-icon" href="#collapseOne">
                        Οι επιλογές μου   <i id="user-options-icon" class="fa fa-angle-down" aria-hidden="true"></i>
                      </a>
                    </div>
                  </div>
                </div>
                ';
            }
            else if( $_SESSION['userType'] == 'Publisher' ){
                echo
                '
                <div id="accordion" class="publisher-user-options user-options">
                  <div class="card">
                      <div id="collapseOne" class="collapse" data-parent="#accordion">
                        <div class="card-body user-options-buttons">
                            <a href="./under_construction.php" class="btn" >Προσθήκη Συγγράμματος</a>
                            <a href="./under_construction.php" class="btn my-ml" >Διαχείριση <br> Σημείων Διανομής</a>
                            <a href="./under_construction.php" class="btn my-ml" >Εφαρμογή Εκδοτών</a>
                            <a href="./under_construction.php" class="btn my-ml" ><span class="my-content">Πληροφορίες <br> για Εκδότες</a>
                        </div>
                      </div>
                    <div class="card-header">
                      <a class="card-link" data-toggle="collapse" id="user-options-whole-area-icon" href="#collapseOne">
                        Οι επιλογές μου   <i id="user-options-icon" class="fa fa-angle-down" aria-hidden="true"></i>
                      </a>
                    </div>
                  </div>
                </div>
                ';
            }

        }

        // User is logged in

    }
    else {
        // User is not logged in
    }
?>
