<!DOCTYPE html>
<html>
    <body>

<h1>The str_word_count() Function<h1>

<h2>dhruvil patel<h2>
       

        <?php
        echo "<h2>transport name<h2>";
        echo "patel transport <br>";
        echo "chudhary transport <br>";

      $text1 = "dhruvil patel";
      $text2 = "janak rami";

      echo "<h2>$text1<h2>";
      echo "<p> $text2<p>";

       print "google pixel 10<br>";
       print "i phone 17<br>";

       $x = true;
       var_dump($x);

       $y = "hello wrold!";
       var_dump($y);

       $cars =array ("creta","i10","KIA");
       var_dump($cars);

       $x = "hello wrold";
       $x = null;
       var_dump($x);


       $y = '5';
       var_dump($y);

       echo "<br>";

       $y= 'hello wrold'; 
       var_dump($y);

       $x = "dhruvil";
       echo "hello $x";

       echo strlen("hello wrold!");


       echo str_word_count("hello wrold");
        

       $text = "my car is a old but runig fast";
       var_dump(str_contains($text, "old" ));

       echo strpos ("hello world", "world");


       $txt = "dhruvil chudhary!";
       var_dump(str_starts_with($txt, "dhruvil"));

       $x = "dhruvil patel";
       echo strtoupper($x);

       $x = "dhruvil patel<br>";
       echo strtolower($x);

       $x = "hello world<br>";
       echo str_replace( "world", "dhruvil",$x);

       $x = "hello";
       $y = "world";
       $z = $x.$y;
       echo $z;

      $x = "dhruvil";
      echo substr($x, 5,7);
  
       $x = "my car is new but no sunruf";
       echo "$x";



      
        ?>

         <p>line breaks werw added for better readability.</p>
    </body>
</html>