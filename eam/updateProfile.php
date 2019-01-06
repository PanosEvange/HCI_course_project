<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

    if (isset($_SESSION['userType']) ) {

        if( $_SESSION['userType'] == 'Student' ){
            $toReturn = "Student";
        }
        else if( $_SESSION['userType'] == 'Secretary' ){

        }
        else if( $_SESSION['userType'] == 'Publisher' ){

        }

        if (isset($_SESSION['userType']) ) {
            $userName = $_SESSION['username'];
        }

        $toReturn = $toReturn." ".$userName;

        if (isset($_REQUEST['newEmail'])) {
            $newPassword = $_REQUEST["newEmail"];
            //$toReturn = $toReturn." newEmail";
            // Update Email
        }

        if (isset($_REQUEST['newPassword'])) {
            $newPassword = $_REQUEST["newPassword"];
            //$toReturn = $toReturn." newPassword";
            // Update password
        }

        if (isset($_REQUEST['newPhone'])) {
            $newPassword = $_REQUEST["newPhone"];
            //$toReturn = $toReturn." newPhone";
            // Update phone
        }

        if (isset($_REQUEST['newAddress'])) {
            $newPassword = $_REQUEST["newAddress"];
            //$toReturn = $toReturn." newAddress";
            // Update address
        }

        if (isset($_REQUEST['newAddressNum'])) {
            $newPassword = $_REQUEST["newAddressNum"];
            //$toReturn = $toReturn." newAddressNum";
            // Update addressNum
        }

        if (isset($_REQUEST['newDimos'])) {
            $newPassword = $_REQUEST["newDimos"];
            //$toReturn = $toReturn." newDimos";
            // Update Dimos
        }

        if (isset($_REQUEST['newPostalCode'])) {
            $newPassword = $_REQUEST["newPostalCode"];
            //$toReturn = $toReturn." newPostalCode";
            // Update Postal Code
        }

        //echo $toReturn;
        echo 1;
    }
}
else{
    echo 0;
}

?>
