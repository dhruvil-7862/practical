<!DOCTYPE html>
<html>
    <body>
    
        <?php

        class car{
            public $color;
            public $model;
            public function
            _construct($color,$model){
          $this->color = $color;
          $this->model = $model;
         }
       
        
          public function message(){
            return "my car is a" . $this->color  . "" . $this-> model . "!";
          }


        }

        $mycar = new Car("red","volvo"); 
        var_dump($mycar);
     ?>
     
    </body>
</html>