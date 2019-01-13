<?php

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        sleep (1);

        $finalResult = new \stdClass();

        $finalResult->totalNum = 2;

        $allEntries = array();

        $counter = 0;

        $entry = new \stdClass();
        $entry->Name = "TestName1";
        $entry->Author = "TestAuthor1";
        $entry->Publisher = "TestPublisher1";
        $entry->ISBN = "TestISBN1";
        $allEntries[$counter] = $entry;
        $counter ++;

        $entry = new \stdClass();
        $entry->Name = "TestName2";
        $entry->Author = "TestAuthor2";
        $entry->Publisher = "TestPublisher2";
        $entry->ISBN = "TestISBN2";
        $allEntries[$counter] = $entry;
        $counter ++;

        $finalResult->entriesArray = $allEntries;

        $myJSON = json_encode($finalResult);

        header('Content-type: application/json');
        echo $myJSON;
   }
?>
