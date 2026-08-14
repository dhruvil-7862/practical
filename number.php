<!DOCTYPE html>>
<html>
    <body>
        <?php

        $a=50;
        $b=3.5;
        $c="4";

        var_dump($a);
        echo "<br>";
        var_dump($b);
        echo "<br>";
        var_dump($c);
        echo "<br>";

        $x = 56.23;
        var_dump(is_int($x));

        $y = 25.36;
        var_dump(is_int($y));

        $x = 30.33;
        var_dump(is_infinite($x));

        $x=acos(5);
        var_dump($x);

        var_dump(is_nan($x));

        $x=525;
        var_dump(is_numeric($x));
        $y=3.2;
        var_dump(is_numeric($y));
        $z=25;
        var_dump(is_numeric($z));

        $x= "2536";
        echo intval($x);
        echo "<br>";
        $y="5263";
        echo intval($y);
             ?>

    </body>
</html>