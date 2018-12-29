<?php

    function printResults($rows, $result, $searchTerm='') {
        $pageLimit = 3;

        if ($rows > 0) {
            if ($searchTerm != '') {
                echo '
                    <div class="mySearchBookResultsCount">
                    Βρέθηκαν <span class="mySearchBookCounter">'.$rows.'</span> αποτελέσματα για \''.$searchTerm.'\'.
                    </div>';
            } else {
                echo '
                    <div class="mySearchBookResultsCount">
                    Βρέθηκαν <span class="mySearchBookCounter">'.$rows.'</span> αποτελέσματα
                    </div>';
            }

            while ($rows != 0) {

                if ($rows > $pageLimit) {
                    $page_res = $pageLimit;
                    $rows = $rows - $pageLimit;
                } else {
                    $page_res = $rows;
                    $rows = 0;
                }

                echo '
                    <div id="overlay" class="loading-overlay"><div id="text" class="overlay-content">Loading.....</div></div>
                    <div class="searchResults-pagination-container">';
                for ($i=0; $i < $page_res; $i++) {
                    $row = $result->fetch_assoc();
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
                            </div>';
                }

                // End of searchResults-pagination-container
                echo '</div>';

                if ($rows > $pageLimit) { /* Put pagination button */
                    echo '
                        <div class="more-button-pagination">
                            <span class="btn" tabindex="1" id="more-button-pagination-id"> <span class="btn-content" >Περισσότερα</span> </span>
                        </div>';
                }

                break;
            }
        }
        else {
            echo '
                <div class="mySearchBookResultsCount">
                Δρν βρέθηκαν αποτελέσματα για \''.$searchTerm.'\'.
                </div>';
        }

        echo '<div class="endOfResultsPlaceHolder">
                </div>';
    }

    function executeSearchWithArg($conn) {
        $searchTerm = $_REQUEST["q"];
        echo "q is ".$searchTerm."<br>";
        $sql = ("SELECT * FROM Books b WHERE LOWER(b.Name) LIKE LOWER('%$searchTerm%')");

        $conditions = array();

        if (isset($_REQUEST['u'])) {
            $x = $_REQUEST["u"];
            $conditions[] = "LOWER(sb.UniversityName) LIKE LOWER('%$x%')";

            echo "u is ".$x."<br>";
        }

        if (isset($_REQUEST['d'])) {
            $x = $_REQUEST["d"];
            $conditions[] = "LOWER(sb.DepartmentName) LIKE LOWER('%$x%')";

            echo "d is ".$x."<br>";
        }

        if (isset($_REQUEST['s'])) {
            $x = $_REQUEST["s"];
            $conditions[] = "LOWER(sb.Semester) = LOWER('$x')";

            echo "s is ".$x."<br>";
        }

        if (isset($_REQUEST['su'])) {
            $x = $_REQUEST["su"];
            $conditions[] = "LOWER(sb.SubjectName) LIKE LOWER('%$x%')";

            echo "su is ".$x."<br>";
        }

        if (count($conditions) > 0) {
            $sql = ("SELECT DISTINCT b.Name, b.Publisher, b.Author, b.ISBN
                 FROM Books b, SubjectBook sb WHERE LOWER(b.Name) LIKE LOWER('%$searchTerm%') AND ");
            $sql .= implode(' AND ', $conditions);
        }
        $conditions = array();

        if (isset($_REQUEST['p'])) {
            $x = $_REQUEST["p"];
            $conditions[] = "LOWER(b.Publisher) LIKE LOWER('%$x%')";

            echo "p is ".$x."<br>";
        }

        if (isset($_REQUEST['a'])) {
            $x = $_REQUEST["a"];
            $conditions[] = "LOWER(b.Author) LIKE LOWER('%$x%')";

            echo "a is ".$x."<br>";
        }

        if (isset($_REQUEST['i'])) {
            $x = $_REQUEST["i"];
            $conditions[] = "LOWER(b.ISBN) LIKE LOWER('%$x%')";

            echo "i is ".$x."<br>";
        }

        if (isset($_REQUEST['y'])) {
            $x = $_REQUEST["y"];
            $conditions[] = "LOWER(b.PublishYear) LIKE LOWER('%$x%')";

            echo "y is ".$x."<br>";
        }

        if (count($conditions) > 0) {
            $sql .= " AND " . implode(' AND ', $conditions);
        }

        $result = $conn->query($sql);
        echo "sql = '$sql' <br>";
        $rows = $result->num_rows;
        echo "rows is ".$rows."<br>";

        printResults($rows, $result, $searchTerm);
    }

    function executeSearchWithoutArg($conn) {
        $sql = ("SELECT * FROM Books b WHERE ");

        $conditions = array();
        $flag = false;

        if (isset($_REQUEST['u'])) {
            $x = $_REQUEST["u"];
            $conditions[] = "LOWER(sb.UniversityName) LIKE LOWER('%$x%')";

            echo "u is ".$x."<br>";
        }

        if (isset($_REQUEST['d'])) {
            $x = $_REQUEST["d"];
            $conditions[] = "LOWER(sb.DepartmentName) LIKE LOWER('%$x%')";

            echo "d is ".$x."<br>";
        }

        if (isset($_REQUEST['s'])) {
            $x = $_REQUEST["s"];
            $conditions[] = "LOWER(sb.Semester) = LOWER('$x')";

            echo "s is ".$x."<br>";
        }

        if (isset($_REQUEST['su'])) {
            $x = $_REQUEST["su"];
            $conditions[] = "LOWER(sb.SubjectName) LIKE LOWER('%$x%')";

            echo "su is ".$x."<br>";
        }

        if (count($conditions) > 0) {
            $sql = ("SELECT DISTINCT b.Name, b.Publisher, b.Author, b.ISBN
                 FROM Books b, SubjectBook sb WHERE ");
            $sql .= implode(' AND ', $conditions);
            $flag = true;
        }
        $conditions = array();

        if (isset($_REQUEST['p'])) {
            $x = $_REQUEST["p"];
            $conditions[] = "LOWER(b.Publisher) LIKE LOWER('%$x%')";

            echo "p is ".$x."<br>";
        }

        if (isset($_REQUEST['a'])) {
            $x = $_REQUEST["a"];
            $conditions[] = "LOWER(b.Author) LIKE LOWER('%$x%')";

            echo "a is ".$x."<br>";
        }

        if (isset($_REQUEST['i'])) {
            $x = $_REQUEST["i"];
            $conditions[] = "LOWER(b.ISBN) LIKE LOWER('%$x%')";

            echo "i is ".$x."<br>";
        }

        if (isset($_REQUEST['y'])) {
            $x = $_REQUEST["y"];
            $conditions[] = "LOWER(b.PublishYear) LIKE LOWER('%$x%')";

            echo "y is ".$x."<br>";
        }

        if (count($conditions) > 0) {
            $sql .= " AND " . implode(' AND ', $conditions);
            $flag = true;
        }

        if ($flag == true) {
            $result = $conn->query($sql);
            echo "sql = '$sql' <br>";
            $rows = $result->num_rows;
            echo "rows is ".$rows."<br>";

            printResults($rows, $result);
        } else {
            //do nothing
            echo '<div class="placeholder"><p></p></div>';
        }
    }

// main like
    include 'login_db.php';
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if (!$conn->set_charset("utf8")) {
        // printf("Error loading character set utf8: %s<br>", $conn->error);
        exit();
    } else {
        // printf("Current character set: %s<br>", $conn->character_set_name());
    }

    if (isset($_REQUEST['q'])) {
       executeSearchWithArg($conn); 
    }
    else {
        executeSearchWithoutArg($conn);
    }
    
    $conn->close();
?>
