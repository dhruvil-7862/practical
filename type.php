<!DOCTYPE html>
<html>
    <body>
        <?php
        class car {
       public $color;
        public $model;
        public function __construct($color,$model) {
         $this->color = $color;
         $this->model = $model;
         }
         public function message(){
         return "my car is a ". $this->color." ".$this->model . "!";
        }
     }
        $mycar = new car("creta","i10");
        var_dump($mycar);
        ?>
</body>
</html>