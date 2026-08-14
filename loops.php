<!DOCTYPE html>
<html>
    <body>
       <?php
       $i = 0;

       do{
             $i++;
        if($i==4)continue;
        echo $i;

       } while ($i< 5);

       echo"<br>";

       for($x=0; $x<10; ){
        $x++;
        if($x==4){
            continue;
        }
       echo "the number is: $x <br> ";

      

       }
         echo"<br>";
       $colors=array("red","black","green","blue");
       foreach ($colors as &$x){
        if($x =="green") $x = "pink";
     

      }
      echo"<br>";
       $members=array("peter"=>"30", "ben"=>"20", "joe"=>40);
       foreach($members as $key=> $value){
        echo "$key :$value <br>";

       
       }
           var_dump($colors);

       echo"<br>";
       class car{
        public $model;
        public $color;
        public function __construct($model,$color){
            $this->model=$model;
            $this->color=$color;

        }

       }

       
       $mycar = new car ("creta" ,"balck");

       foreach ($mycar as $x=>$y ){
        echo "$x:$y <br>";
       }
       
       ?>
       
    </body>
</html>