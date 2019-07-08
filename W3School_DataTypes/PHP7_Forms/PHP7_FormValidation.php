<html>
<body>

<form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    NAME : <input type="text" name = "fname">
    <br>
    E-MAIL :  <input type = "text" name = "email">
    <br>
    <input type="submit">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {$name = $_REQUEST["fname"];}
if (empty($name)) {echo "Nevlozil si meno"; } else { echo "Vlozene meno je ". $name ;}

?>


</body>
</html>

<!--<html>-->
<!--<body>-->
<!--<form method="post" action="--><?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?><!--">-->
<!--    Name: <input type="text" name="fname">-->
<!--    <input type="submit">-->
<!--</form>-->
<!---->
<?php
//    if ($_SERVER["REQUEST_METHOD"] == "POST") {
//        // collect value of input field
//        $name = $_REQUEST['fname'];
//        if (empty($name)) {
//            echo "Name is empty";
//        } else {
//            echo $name;
//        }
//    }
////?>
<!--</body>-->
<!--</html>-->
