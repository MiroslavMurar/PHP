<!DOCTYPE HTML>
<html>
<head>
<style>
    .error {color: #FF0000;}
</style>
</head>
<body>

<?php
$name = $email = $website = $comment = $gender ="";
$nameErr = $emailErr = $websiteErr = $commentErr = $genderErr ="";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if(empty($_REQUEST['name'])) {
        $nameErr = "Name is required";
    }else {$name = test_input($_REQUEST['name']);}

    if(empty($_REQUEST['email'])) {
            $emailErr = "E-mail is required";
        }else {$email = test_input($_REQUEST['email']);}

//    if(empty($_REQUEST['website'])) {
//                $nameErr = "Website is required";
//            }else {$website = test_input($_REQUEST['website']);}

    if (empty($_REQUEST["website"])) {
        $website = "";
    } else {
        $website = test_input($_REQUEST["website"]);
    }

//    $website = test_input($_REQUEST['website']);

//    if(empty($_REQUEST['comment'])) {
//                $commentErr = "Comment is required";
//            }else {$comment = test_input($_REQUEST['comment']);}


    if (empty($_REQUEST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_REQUEST["comment"]);
    }

    if(empty($_REQUEST['gender'])) {
                $genderErr = "Gender is required";
            }else {$gender = test_input($_REQUEST['gender']);}
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>


<form method = "post" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<h2> PHP Form Validation Example </h2>
    <p><span class="error">* required field</span></p>
    Name: <input type = "text" name = "name"> <span class = "error"> * <?php echo $nameErr; ?> </span>
    <br><br>
    E-mail : <input type = "text" name = "email"> <span class="error"> * <?php echo $emailErr; ?>  </span>
    <br><br>
    Website : <input type = "text " name = "website">
    <br><br>
    Comment : <textarea name = "commnet" rows="5" cols="40" > </textarea>
    <br><br>
    Gender:
    <input type = "radio" name = "gender" value = "male "> male
    <input type = "radio" name = "gender" value = "female "> female
    <input type = "radio" name = "gender" value = "other"> other
    <span class = "error"> * <?php echo $genderErr ; ?> </span>


    <br><br>
    <input type = "submit">

</form>

<?php
echo "<h2> Your INPUT </h2> ";
echo "<br>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";



?>





</body>
</html>



















<!--<!DOCTYPE HTML>-->
<!--<html>-->
<!--<head>-->
<!--    <style>-->
<!--        .error {color: #FF0000;}-->
<!--    </style>-->
<!--</head>-->
<!--<body>-->
<!---->
<?php
//// define variables and set to empty values
//$nameErr = $emailErr = $genderErr = $websiteErr = "";
//$name = $email = $gender = $comment = $website = "";
//
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    if (empty($_POST["name"])) {
//        $nameErr = "Name is required";
//    } else {
//        $name = test_input($_POST["name"]);
//    }
//
//    if (empty($_POST["email"])) {
//        $emailErr = "Email is required";
//    } else {
//        $email = test_input($_POST["email"]);
//    }
//
//    if (empty($_POST["website"])) {
//        $website = "";
//    } else {
//        $website = test_input($_POST["website"]);
//    }
//
//    if (empty($_POST["comment"])) {
//        $comment = "";
//    } else {
//        $comment = test_input($_POST["comment"]);
//    }
//
//    if (empty($_POST["gender"])) {
//        $genderErr = "Gender is required";
//    } else {
//        $gender = test_input($_POST["gender"]);
//    }
//}
//
//function test_input($data) {
//    $data = trim($data);
//    $data = stripslashes($data);
//    $data = htmlspecialchars($data);
//    return $data;
//}
//?>
<!---->
<!--<h2>PHP Form Validation Example</h2>-->
<!--<p><span class="error">* required field</span></p>-->
<!--<form method="post" action="--><?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?><!--">-->
<!--    Name: <input type="text" name="name">-->
<!--    <span class="error">* --><?php //echo $nameErr;?><!--</span>-->
<!--    <br><br>-->
<!--    E-mail: <input type="text" name="email">-->
<!--    <span class="error">* --><?php //echo $emailErr;?><!--</span>-->
<!--    <br><br>-->
<!--    Website: <input type="text" name="website">-->
<!--    <span class="error">--><?php //echo $websiteErr;?><!--</span>-->
<!--    <br><br>-->
<!--    Comment: <textarea name="comment" rows="5" cols="40"></textarea>-->
<!--    <br><br>-->
<!--    Gender:-->
<!--    <input type="radio" name="gender" value="female">Female-->
<!--    <input type="radio" name="gender" value="male">Male-->
<!--    <input type="radio" name="gender" value="other">Other-->
<!--    <span class="error">* --><?php //echo $genderErr;?><!--</span>-->
<!--    <br><br>-->
<!--    <input type="submit" name="submit" value="Submit">-->
<!--</form>-->
<!---->
<?php
//echo "<h2>Your Input:</h2>";
//echo $name;
//echo "<br>";
//echo $email;
//echo "<br>";
//echo $website;
//echo "<br>";
//echo $comment;
//echo "<br>";
//echo $gender;
//?>
<!---->
<!--</body>-->
<!--</html>-->
