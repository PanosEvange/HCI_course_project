<?php
    session_start();
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        if ( isset($_SESSION['userType']) ){
            if( $_SESSION['userType'] === "Student" ){
                include 'my_profile_student.php';
            }
            else if( $_SESSION['userType'] === "SomethingElse" ){
                include 'my_profile_secretary.php';
            }
            else if( $_SESSION['userType'] === "SomethingElse2" ){
                include 'my_profile_publisher.php';
            }
            else{
                echo "AHAHHAA you are noob!!!!";
            }

        }
        else{
            echo "OMG something terrible happened!!!!";
        }

    }
    else{ //maybe display content but at disable mode
        echo "OMG you are not logged in!!!!";
    }
?>
