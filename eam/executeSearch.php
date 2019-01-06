<?php

    include 'login_db.php';

    if (isset($_GET['q'])) {

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // $searchTermArray = explode("?", $_GET['q']);
        // $searchTerm = $searchTermArray[0];

        $searchTerm = $_GET['q'];

        //Do real escaping here

        $sql = "SELECT * FROM Books WHERE Name LIKE '%$searchTerm%'";
        $conditions = array();

        // if(isset($_GET['u'])) {
        //     $uni = $_GET['u'];
        //     $conditions[] = "Uni='$uni'";
        // }
        // if(isset($_GET['d'])) {
        //     $dept = $_GET['d'];
        //     $conditions[] = "dept='$dept'";
        // }
        // if(isset($_GET['s'])) {
        //     $semester = $_GET['s'];
        //     $conditions[] = "semester='$semester'";
        // }
        // if(isset($_GET['su'])) {
        //     $subject = $_GET['su'];
        //     $conditions[] = "subject='$subject'";
        // }

        if(isset($_GET['p'])) {
            $publisher = $_GET['p'];
            $conditions[] = "Publisher='$publisher'";
        }
        if(isset($_GET['a'])) {
            $author = $_GET['a'];
            $conditions[] = "Author='$author'";
        }
        if(isset($_GET['i'])) {
            $ISBN = $_GET['i'];
            $conditions[] = "ISBN='$ISBN'";
        }
        if(isset($_GET['y'])) {
            $year = $_GET['y'];
            $conditions[] = "PublishYear='$year'";
        }

        if (count($conditions) > 0) {
          $sql .= implode(' AND ', $conditions);
        }

        $result = $conn->query($sql);
        $rows = $result->num_rows;

        if ($rows > 0) {
            // If there were results for the query print them
            echo '
                <div class="mySearchBookResultsCount">
                Βρέθηκαν <span class="mySearchBookCounter">'.$rows.'</span> αποτελέσματα για \''.$searchTerm.'\'.
                </div>
            ';
            while ($rows != 0) {
                // We will only have 10 books in each page
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
