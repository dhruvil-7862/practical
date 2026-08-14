<!DOCTYPE html>
<html>
    <body>
        <?php
        $x = 10;
$y = 20;

function test() {
    echo $GLOBALS['x'];
    echo "<br>";
    echo $GLOBALS['y'];
}
test();

$a = "dhruvil";
$a = "dhruvil111";

echo $a;

        ?>
    </body>
</html>