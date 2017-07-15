<!DOCTYPE html>
<html>
<body>

<?php
echo "<h1>The SWITCH statement says:</h1>";
// __ switch dynamic message __
$time = date("H");

switch ($time) {
    case "$time" < 10:
        echo "Have a good morning!";
        break;
    case "$time" < 20:
        echo "Have a good day!";
        break;
    default:
        echo "Have a good night!";
}
// ----------------------------------------
echo "<hr />";
echo "<h1>The IF statement says:</h1>";
// __ if dynamic message __
$time = date("H");

if ($time < "10") {
    echo "Have a good morning!";
} elseif ($time < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

?>
 
</body>
</html>
