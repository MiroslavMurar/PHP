<?php
//echo $_SERVER['PHP_SELF'];
//echo "<br>";
//echo $_SERVER['SERVER_NAME'];
//echo "<br>";
//echo $_SERVER['HTTP_HOST'];
//echo "<br>";
//echo $_SERVER['HTTP_REFERER'];
//echo "<br>";
//echo $_SERVER['HTTP_USER_AGENT'];
//echo "<br>";
//echo $_SERVER['SCRIPT_NAME'];
//echo "<br>";
//echo "<br>";
//echo "<br>";
//
//?>



<html>
<body>

<form method = "post" action = "<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name = "fname">
    <input type = "submit">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_REQUEST['fname'];
    if(empty($name)){
        echo "Name is empty";
    }else {
        echo "Name is $name";
    }
}

?>

</body>
</html>








<!---->
<!--<html>-->
<!--<body>-->
<!---->
<!--<form method="post" action="--><?php //echo $_SERVER['PHP_SELF'];?><!--">-->
<!--  Name: <input type="text" name="fname">-->
<!--  <input type="submit">-->
<!--</form>-->
<!---->
<?php
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    // collect value of input field
//    $name = $_REQUEST['fname'];
//    if (empty($name)) {
//        echo "Name is empty";
//    } else {
//        echo $name;
//    }
//}
//?>
<!---->
<!--</body>-->
<!--</html>-->