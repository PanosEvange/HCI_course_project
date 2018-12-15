<?php
    include 'login_db.php';
    // define variables and set to empty values
    $email = $pass = $passConf = $firstName = $lastName = $date = $id = $tax = $amka = $address = $phone = "";
    $succ = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $email = $_POST["email"];
        $pass = $_POST["password"];
        $passConf = $_POST["passwordConf"];
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $date = $_POST["date"];
        $id = $_POST["id"];
        $tax = $_POST["taxNum"];
        $amka = $_POST["amka"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];

        require_once 'login_db.php'; //db info

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = ("INSERT INTO Users (Email, Password, FirstName,
                                LastName, DateOfBirth, Phone, Address, UserType)
                                VALUES ('$email', '$pass', '$firstName',
                                    '$lastName', '$date', '$phone', '$address', 'Publisher')");

        if ($conn->query($sql) === TRUE) {
            $succ = "Επιτυχής καταχώρηση!";
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $last_id = $conn->insert_id;
        $sql = ("INSERT INTO `Publisher`(`idPublisher`, `IdNumber`, `TaxNumber`, `Amka`)
                            VALUES ($last_id, '$id', '$tax', '$amka');");
        if ($conn->query($sql) === TRUE) {
            $succ = "Επιτυχής καταχώρηση!";
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
?>
