
<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>


<?php
$servername = "database";
$username = "root";
$password = "pass";
$dbname = "Skuska001";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){die("invalid to connect".$conn->connect_error);}
$sql = "SELECT id, firstname, lastname, email FROM Skuska01";
$result = $conn->query($sql);

if($result->num_rows >0){
     echo "<table><tr><th>ID</th><th>Name</th><th>Lastname</th><th>email</th></tr>";
     while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td><td>" . $row["email"]. "</td></tr>";
    }
    echo "</table>";}
else {echo "0 results";}

/$conn->close();
//?>

</body>
</html>



<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--    <style>-->
<!--        table, th, td {-->
<!--            border: 1px solid black;-->
<!--        }-->
<!--    </style>-->
<!--</head>-->
<!--<body>-->
<!---->
<?php
//$servername = "database";
//$username = "root";
//$password = "pass";
//$dbname = "Skuska001";
//
//// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//
//$sql = "SELECT id, firstname, lastname, email FROM Skuska01";
//$result = $conn->query($sql);
//
//if ($result->num_rows > 0) {
//    echo "<table><tr><th>ID</th><th>Name</th><th>Lastname</th><th>email</th></tr>";
//    // output data of each row
//    while($row = $result->fetch_assoc()) {
//        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td><td>" . $row["email"]. "</td></tr>";
//    }
//    echo "</table>";
//} else {
//    echo "0 results";
//}
//
//$conn->close();
//?>
<!---->
<!--</body>-->
<!--</html>-->

