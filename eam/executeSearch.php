<?php

    if (isset($_GET['q'])) {

        $searchTerm = $_GET['q'];

        echo '
            <div class="mySearchBookResultsCount">
                Βρέθηκαν <span class="mySearchBookCounter">10</span> αποτελέσματα για \''.$searchTerm.'\'.
            </div>
        ';

        echo '
            <div class="mySearchBookOneResult">
                <div class="book-image">
                    <img src="./150.png" alt="Image Placeholder">
                </div>
                <div class="book-title">
                    Διακριτά Μαθηματικά για Χημικούς
                </div>
                <div class="book-authors">
                    Συγγραφείς: Μάστορας Γιώργος, Σπάθας Μιχάλης
                </div>
                <div class="book-publisher">
                    Εκδόσεις: Αλχημεία
                </div>
                <div class="book-isbn">
                    ISBN: 123666123
                </div>
                <div class="book-comments">
                    <a href="#">Σχόλια(5)</a>
                </div>
                <div class="book-page">
                    <a href="./under_construction.php"> Σελίδα του Βιβλίου <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                </div>
            </div>

            <div class="mySearchBookOneResult">
                <div class="book-image">
                    <img src="./150.png" alt="Image Placeholder">
                </div>
                <div class="book-title">
                    Διακριτά Μαθηματικά για Χημικούς
                </div>
                <div class="book-authors">
                    Συγγραφείς: Μάστορας Γιώργος, Σπάθας Μιχάλης
                </div>
                <div class="book-publisher">
                    Εκδόσεις: Αλχημεία
                </div>
                <div class="book-isbn">
                    ISBN: 123666123
                </div>
                <div class="book-comments">
                    <a href="#">Σχόλια(5)</a>
                </div>
                <div class="book-page">
                    <a href="./under_construction.php"> Σελίδα του Βιβλίου <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                </div>
            </div>

            <div class="mySearchBookOneResult">
                <div class="book-image">
                    <img src="./150.png" alt="Image Placeholder">
                </div>
                <div class="book-title">
                    Διακριτά Μαθηματικά για Χημικούς
                </div>
                <div class="book-authors">
                    Συγγραφείς: Μάστορας Γιώργος, Σπάθας Μιχάλης
                </div>
                <div class="book-publisher">
                    Εκδόσεις: Αλχημεία
                </div>
                <div class="book-isbn">
                    ISBN: 123666123
                </div>
                <div class="book-comments">
                    <a href="#">Σχόλια(5)</a>
                </div>
                <div class="book-page">
                    <a href="./under_construction.php"> Σελίδα του Βιβλίου <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                </div>
            </div>

            <div class="mySearchBookOneResult">
                <div class="book-image">
                    <img src="./150.png" alt="Image Placeholder">
                </div>
                <div class="book-title">
                    Διακριτά Μαθηματικά για Χημικούς
                </div>
                <div class="book-authors">
                    Συγγραφείς: Μάστορας Γιώργος, Σπάθας Μιχάλης
                </div>
                <div class="book-publisher">
                    Εκδόσεις: Αλχημεία
                </div>
                <div class="book-isbn">
                    ISBN: 123666123
                </div>
                <div class="book-comments">
                    <a href="#">Σχόλια(5)</a>
                </div>
                <div class="book-page">
                    <a href="./under_construction.php"> Σελίδα του Βιβλίου <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                </div>
            </div>

            <div class="endOfResultsPlaceHolder">

            </div>
        ';

    }
    else {
        //do nothing
        // echo "You haven't search anything yet!";
        echo '
            <div class="placeholder"></div>
        ';
    }


?>
