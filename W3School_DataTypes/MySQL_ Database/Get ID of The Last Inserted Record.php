<?php
$server = "database";
$username = "root";
$password = "pass";
$dbname = "Skuska001";

$conn = new mysqli($server, $username, $password, $dbname);

if($conn->connect_error) {die ("Fail to connect: ". $conn->connect_error);}

$sql = "INSERT INTO Skuska01 (firstname, lastname, email) VALUES ('firstskuska', 'lastskuska', 'skuska@gmail.com');";

if($conn->query($sql)){
    $last_id = $conn->insert_id;
    echo"Inserted id is:".($last_id-1);
}else {echo"Error".$conn->error;}

$conn->close();

?>



<?php
//$servername = "database";
//$username = "root";
//$password = "pass";
//$dbname = "myDB";
//
//// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//
//$sql = "INSERT INTO MyGuests (firstname, lastname, email)
//VALUES ('John', 'Doe', 'john@example.com')";
//
//if ($conn->query($sql) === TRUE) {
//    $last_id = $conn->insert_id;
//    echo "New record created successfully. Last inserted ID is: " . $last_id;
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}
//
//$conn->close();
//?><!-- -->