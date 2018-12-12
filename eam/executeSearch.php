<?php

    include 'login_db.php';

    if (isset($_GET['q'])) {
        $searchTerm = $_GET['q'];

        // $uni = $_POST['uni'];
        // $dept = $_POST['dept'];
        // $semester = $_POST['semester'];
        // $class = $_POST['class'];
        // $publisher = $_POST['publisher'];
        // $author = $_POST['author'];
        // $ISBN = $_POST['ISBN'];
        // $year = $_POST['year'];

        //Do real escaping here

        // $query = "SELECT * FROM Books WHERE Name LIKE '%$searchTerm%'";
        // $conditions = array();

        // if(! empty($uni)) {
        //   $conditions[] = "uni='$uni'";
        // }
        // if(! empty($dept)) {
        //   $conditions[] = "dept='$dept'";
        // }
        // if(! empty($semester)) {
        //   $conditions[] = "semester='$semester'";
        // }
        // if(! empty($class)) {
        //   $conditions[] = "class='$class'";
        // }
        // if(! empty($publisher)) {
        //   $conditions[] = "Publisher='$publisher'";
        // }
        // if(! empty($author)) {
        //   $conditions[] = "Author='$author'";
        // }
        // if(! empty($ISBN)) {
        //   $conditions[] = "ISBN='$ISBN'";
        // }
        // if(! empty($year)) {
        //   $conditions[] = "PublishYear='$year'";
        // }
        //
        // if (count($conditions) > 0) {
        //   $sql .= implode(' AND ', $conditions);
        // }


        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = ("SELECT * FROM Books WHERE Name LIKE '%$searchTerm%'");
        $result = $conn->query($sql);
        $rows = $result->num_rows;

        if ($rows > 0) {
            // If there was results for the query print them
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
