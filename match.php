<!DOCTYPE html>
<html>
    <!DOCTYPE html>
<html>
<body>

<?php
$favcolor = "red";

$text = match($favcolor) {
  "red" => "Your favorite color is red!",
  "blue" => "Your favorite color is blue!",
  "green" => "Your favorite color is green!",
  default => "Your favorite color is neither red, blue, nor green!",
}; 

echo "<br>";

$d = 3;

$text = match($d) {
  1, 2, 3, 4, 5 => "The week feels so long!",
  6, 0 => "Weekends are best!",
  default => "Invalid day",
};

echo $text;

echo $text;
?>
 
</body>
</html>

</html>