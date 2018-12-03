<?php
    include 'login_db.php';
    // define variables and set to empty values
    $emailErr = $passErr = $passConfErr = $firstNameErr = $lastNameErr = $dateErr = $idErr = $amkaErr = $taxErr = $addressErr = $phoneErr = "";
    $email = $pass = $passConf = $firstName = $lastName = $date = $id = $amka = $tax = $address = $phone = "";
    $succ = "";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $stmt = $conn->prepare("INSERT INTO Publisher (Email, Password, LastName,
                            FirstName, DateOfBirth, IdNum, TaxNum, AMKA, Phone,
                             Address) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssss", $email, $pass, $firstName,
                        $lastName, $date, $id, $tax, $amka, $phone, $address);

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


        $stmt->execute();

        $succ = "Επιτυχής καταχώρηση!";

        $stmt->close();
        $conn->close();
    }
?>
