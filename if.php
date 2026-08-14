<!DOCTYPE html>
<html>
    <body>
        <?php
        if (4>3);
        echo "have nice car";
        $t = 19;
        if ($t===19){
            echo "<br>";
            echo "my new watch is vary samrt";

             $a=5;
             echo "<br>";

             if($a==2 || $a==3 || $a==4 || $a==5 || $a==6 || $a==7){
                echo "$a is a number between 3 and 6";
             }
echo "<br>";


             $a=60;
             $b=50;
             $c=30;
             if($a > $b  &&   $a > $c){
             echo "both coditons are true";
             }
             $t = date("h");

          if ($t < "20"){
          echo "have good watch";
          }else{
            echo  "have good time";

            
            
          }
        }
         echo "<br>";

        $a=13;
            $b=$a<10 ? "hello": "good bye";
            echo $b;
             echo "<br>";
             $a=14;
             if($a>10){
                echo "above 10";
                if($a>20){
                    echo " and also above 20";
                }else{
                    echo "but not about  20";
                }  

             }
        ?>
    </body>
</html>