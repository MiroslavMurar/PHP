
<?php

// suppose we are using a path like = www/myfiles/script.js

const FILE = "www/myfiles/script.js";

// print file name
echo pathinfo(FILE,PATHINFO_FILENAME)."\n";
echo "<br>";
// print file extension
echo pathinfo(FILE,PATHINFO_EXTENSION)."\n";
echo "<br>";
// print file Full name
echo pathinfo(FILE,PATHINFO_BASENAME)."\n";
echo "<br>";
// print file directory name
echo pathinfo(FILE,PATHINFO_DIRNAME)."\n";
echo "<br>";