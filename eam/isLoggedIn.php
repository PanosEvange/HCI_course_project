<?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        // User is logged in
        echo
        '
        <div class="login-area">
            <div class="user-info">
                <a href="./under_construction.php" >
        '
                . $_SESSION['username'] .
        '
                </span></a>
            </div>
            <div class="my-logout">
                <a href="./logout.php" >Αποσύνδεση</span></a>
            </div>
        </div>
        ';
    }
    else {
        // User is not logged in
        include 'login_options.php';
    }
?>
