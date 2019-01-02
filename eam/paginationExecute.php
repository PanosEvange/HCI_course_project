<?php

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'executeSearch.php';
        include 'login_db.php';
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if (!$conn->set_charset("utf8")) {
            // printf("Error loading character set utf8: %s<br>", $conn->error);
            exit();
        }

        if (isset($_REQUEST['q'])) {
            $result = executeSearchWithArg($conn);
        }
        else {
            $result = executeSearchWithoutArg($conn);
        }

        $finalResult = new \stdClass();

        // page limit
        $finalResult->totalNum = 3; 

        $allEntries = array();

        $counter = 0;

        $rows = $result->num_rows;

        for ($i=0; $i < $rows; $i++) { 
            $row = $result->fetch_assoc();
            $entry = new \stdClass();
            $entry->Name = '$row["Name"]';
            $entry->Author = '$row["Author"]';
            $entry->Publisher = '$row["Publisher"]';
            $entry->ISBN = '$row["ISBN"]';
            $allEntries[$counter] = $entry;
            $counter ++;
        }

        $conn->close();

        $finalResult->entriesArray = $allEntries;

        $myJSON = json_encode($finalResult);

        header('Content-type: application/json');
        echo $myJSON;
   }
?>
