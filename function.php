<!DOCTYPE html>
<html>
    <body>
        <?php
        function mymessage(){
            echo "hello wrold";
        }
        mymessage();
        echo "<br>";
        function familyname($fname,$year){
            echo "$fname refsnes.born in $year<br>";
        }
        familyname("patel","1975");
        familyname("jaat","1955");
        familyname("chudhary","1992");
        echo "<br>";

        function setheight($height = 80){
        echo "the height is: $height.<br>";
        }

        setheight(380);
        setheight();
        echo "<br>";

        function sum($x,$y){

            $z=$x+$y;
            return $z;
          }
          echo "5 + 10=" .sum(5,10)."<br>";
          echo "11 + 8=" .sum(11,8)."<br>";
          echo "7 + 16=" .sum(7,16);
          echo "<br>";
           
          function myfamily($lastname, ...$firstname) {
            $txt = "";
            $len=count($firstname);
            for ($i = 0; $i < $len; $i++ ) {
              $txt = $txt."Hi, $firstname[$i] $lastname.<br>";  

            }
            return $txt;

          }
          $a = myfamily("patel","janak" ,"dhnraj","dhruvil");
          echo $a;
          echo "<br>";
          ?>
         
        

    </body>
</html>