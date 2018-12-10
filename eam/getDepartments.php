<?php
    $q = $_GET['q'];

    //connect to database and use $q
    include 'login_db.php';

    require_once 'login_db.php'; //db info

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = ("SELECT * FROM  Department WHERE UniversityName = '$q'");
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<option value="'.$row["DepartmentName"].'">'.$row["DepartmentName"].'</option>';
        }
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
