<!DOCTYPE html>
<html>
    <body>
        <?php
        $a=5;
        $b=5.32;
        $c="hello";
        $d=true;
        $e=null;

        $a= (string) $a;
        $b= (string) $b;
        $c= (string) $c;
        $d= (string) $d;
        $e= (string) $d;

        $a= (int) $a;
        $b= (int) $b;
        $c= (int) $c;
        $d= (int) $d;
        $e= (int) $d;

        $a= (float) $a;
        $b= (float) $b;
        $c= (float) $c;
        $d= (float) $d;
        $e= (float) $d;

        $a= (bool) $a;
        $b= (bool) $b;
        $c= (bool) $c;
        $d= (bool) $d;
        $e= (bool) $d;
        
        $a= (array) $a;
        $b= (array) $b;
        $c= (array) $c;
        $d= (array) $d;
        $e= (array) $d;

        $a= (object) $a;
        $b= (object) $b;
        $c= (object) $c;
        $d= (object) $d;
        $e= (object) $d;

        $a= (NULL); 
        $b= (NULL);
        $c= (NULL);
        $d= (NULL);
        $e= (NULL);

        var_dump($a);
        var_dump($b);
        var_dump($c);
        var_dump($d);
        var_dump($e);


        ?>
 <p> my car is a old but runig is fast</p>
    </body>
</html>