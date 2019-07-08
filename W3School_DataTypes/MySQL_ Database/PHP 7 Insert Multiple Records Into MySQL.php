<?php
$servername = "database";
$username = "root";
$password = "pass";
$dbname = "Skuska001";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){die("Invalid to connect: ". $conn->connect_error);}

$sql = "INSERT INTO Skuska01 (firstname, lastname, email) 
VALUES ('Daniel', 'Svitok', 'svitok@gmail.com');";
$sql .= "INSERT INTO Skuska01 (firstname, lastname, email)
 VALUES ('Daniela', 'Svitokova', 'svitokova@gmail.com');";
if($conn->multi_query($sql) === TRUE) {echo "Multiple records created";}else {echo "Records NOT created".$conn->error;}

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
//VALUES ('John', 'Doe', 'john@example.com');";
//$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
//VALUES ('Mary', 'Moe', 'mary@example.com');";
//$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
//VALUES ('Julie', 'Dooley', 'julie@example.com')";
//
//if ($conn->multi_query($sql) === TRUE) {
//    echo "New records created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}
//
//$conn->close();
//?><!-- -->