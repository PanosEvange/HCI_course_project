<?php

    include 'login_db.php';

    if (isset($_REQUEST['q'])) {

        $searchTerm = $_REQUEST["q"];

        echo "q is ".$searchTerm."<br>";

        if (isset($_REQUEST['u'])) {
            $x = $_REQUEST["u"];

            echo "u is ".$x."<br>";
        }
        if (isset($_REQUEST['p'])) {
            $x = $_REQUEST["p"];

            echo "p is ".$x."<br>";
        }
        if (isset($_REQUEST['d'])) {
            $x = $_REQUEST["d"];

            echo "d is ".$x."<br>";
        }
        if (isset($_REQUEST['a'])) {
            $x = $_REQUEST["a"];

            echo "a is ".$x."<br>";
        }
        if (isset($_REQUEST['s'])) {
            $x = $_REQUEST["s"];

            echo "s is ".$x."<br>";
        }
        if (isset($_REQUEST['i'])) {
            $x = $_REQUEST["i"];

            echo "i is ".$x."<br>";
        }
        if (isset($_REQUEST['su'])) {
            $x = $_REQUEST["su"];

            echo "su is ".$x."<br>";
        }
        if (isset($_REQUEST['y'])) {
            $x = $_REQUEST["y"];

            echo "y is ".$x."<br>";
        }


        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = ("SELECT * FROM Books WHERE Name LIKE '%$searchTerm%'");
        $result = $conn->query($sql);
        $rows = $result->num_rows;

        if ($rows > 0) {
            echo '
                <div class="mySearchBookResultsCount">
                Βρέθηκαν <span class="mySearchBookCounter">'.$rows.'</span> αποτελέσματα για \''.$searchTerm.'\'.
                </div>
            ';
            while ($rows != 0) {
                if ($rows > 10) {
                    $page_res = 10;
                    $rows = $rows - 10;
                } else {
                    $page_res = $rows;
                    $rows = 0;
                }
                for ($i=0; $i < $page_res; $i++) {
                    $row = $result->fetch_assoc();
                    // if (isset($_GET["myIsbn-filter"])) {
                    //     if ($row["ISBN"] != $_GET["myIsbn-filter"]) {
                    //         continue;
                    //     }
                    // }
                    echo '
                            <div class="mySearchBookOneResult">
                                <div class="book-image">
                                    <img src="./150.png" alt="Image Placeholder">
                                </div>
                                <div class="book-title">'.$row["Name"].'
                                </div>
                                <div class="book-authors">'.$row["Author"].'
                                </div>
                                <div class="book-publisher">
                                    Εκδόσεις: '.$row["Publisher"].'
                                </div>
                                <div class="book-isbn">
                                    ISBN: '.$row["ISBN"].'
                                </div>
                                <div class="book-comments">
                                    <a href="#">Σχόλια(5)</a>
                                </div>
                                <div class="book-page">
                                    <a href="./under_construction.php"> Σελίδα του Βιβλίου <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                                </div>
                            </div>
                        ';
                }
                break;
            }
        }
        else {
            echo '
                <div class="mySearchBookResultsCount">
                Δρν βρέθηκαν αποτελέσματα για \''.$searchTerm.'\'.
                </div>
            ';
        }

        echo '<div class="endOfResultsPlaceHolder">
                </div>
            ';

        $conn->close();

    }
    else {
        //do nothing
        echo '
            <div class="placeholder"></div>
        ';
    }


?>
