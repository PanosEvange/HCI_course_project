<?php

// // Database configuration
// $dbHost     = 'localhost';
// $dbUsername = 'root';
// $dbPassword = 'root';
// $dbName     = 'codexworld';
//
// // Connect with the database
// $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Get search term
$searchTerm = $_GET['term'];

// Get matched data from skills table
// $query = $db->query("SELECT * FROM skills WHERE skill LIKE '%".$searchTerm."%' AND status = '1' ORDER BY skill ASC");

// Generate skills data array
$skillData = array();

include 'login_db.php';
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (!$conn->set_charset("utf8")) {
    // printf("Error loading character set utf8: %s<br>", $conn->error);
    exit();
}

$sql = ("SELECT * FROM Books b WHERE LOWER(b.Name) LIKE LOWER('%$searchTerm%')");

$result = $conn->query($sql);
$rows = $result->num_rows;

for ($i=0; $i < $rows; $i++) {
    $row = $result->fetch_assoc();
    $data['id'] = $row['Name'];
    $data['value'] = $row['Name'];
	array_push($skillData, $data);
}


// $data['id'] = $searchTerm."test1";
// $data['value'] = $searchTerm."test1";
// array_push($skillData, $data);

// $data['id'] = $searchTerm."test2";
// $data['value'] = $searchTerm."test2";
// array_push($skillData, $data);

// $data['id'] = $searchTerm."test3";
// $data['value'] = $searchTerm."test3";
// array_push($skillData, $data);

// if($query->num_rows > 0){
//     while($row = $query->fetch_assoc()){
//         $data['id'] = $row['id'];
//         $data['value'] = $row['skill'];
//         array_push($skillData, $data);
//     }
// }

// Return results as json encoded array
echo json_encode($skillData);

?>
