<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

print_r($_SESSION);
echo "<br>";

// destroy the session
session_destroy();
print_r($_SESSION);
echo "<br>";

die;
?>

</body>
</html>