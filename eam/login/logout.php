<?php
    session_start();
    unset($_SESSION['loggedin']);
    unset($_SESSION['username']);
    unset($_SESSION['userType']);
    header("Location: /index.php?logout");
?>
