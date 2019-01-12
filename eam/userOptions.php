<?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        if (isset($_SESSION['userType'])){
            if( $_SESSION['userType'] == 'Student' ){
                echo
                '
                <div class="student-user-options user-options">
                        <div class="user-options-buttons">
                            <a href="./dilosi_step1.php" class="btn"> Δήλωση Συγγραμμάτων </a>
                            <a href="./under_construction.php" class="btn my-ml"> Ανταλλαγή Συγγραμμάτων </a>
                            <a href="./student_app.php" class="btn my-ml"> Εφαρμογή Φοιτητών </a>
                            <a href="./student_info.php" class="btn my-ml"> Πληροφορίες για Φοιτητές </a>
                        </div>
                </div>
                ';
            }
            else if( $_SESSION['userType'] == 'Secretary' ){
                echo
                '
                <div class="secretary-user-options user-options">
                    <div class="user-options-buttons">
                        <a href="./secretary_edit_books.php" class="btn" >Διαχείριση Συγγραμμάτων</a>
                        <a href="./under_construction.php" class="btn my-ml" >Επεξεργασία <br> Προγράμματος Σπουδών</a>
                        <a href="./secretary_app.php" class="btn my-ml" >Εφαρμογή Γραμματείας</a>
                        <a href="./secretary_info.php" class="btn my-ml" ><span class="my-content">Πληροφορίες <br> για Γραμματείς</a>
                    </div>
                </div>
                ';
            }
            else if( $_SESSION['userType'] == 'Publisher' ){
                echo
                '
                <div class="publisher-user-options user-options">
                    <div class="user-options-buttons">
                        <a href="./under_construction.php" class="btn" >Προσθήκη Συγγράμματος</a>
                        <a href="./under_construction.php" class="btn my-ml" >Διαχείριση <br> Σημείων Διανομής</a>
                        <a href="./under_construction.php" class="btn my-ml" >Εφαρμογή Εκδοτών</a>
                        <a href="./under_construction.php" class="btn my-ml" ><span class="my-content">Πληροφορίες <br> για Εκδότες</a>
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
