<!DOCTYPE html>
<html>
<body>

<h1>Global Scope</h1>

<?php


$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
$x = 5; // global scope

function myTest() {
    global $x;
    echo "Variable x inside function is: $x<br>";
}

myTest();

echo "Variable x outside function is: $x<br>";
?>

</body>
</html>