<?php
namespace myArea;

class Fruits {
  public function myValue(){
    return Fruits::class;
  }
}
?>





<!DOCTYPE html>
<html>
    <body>
  


    <h2>The __CLASS__ Constant</h2>
    <h2>The ClassName::class Constant</h2>
<p>This constant returns the class name and name of the namespace (if any):</p>


        <p>This constant returns the class name:</p>
        <?php
        class creta{
            public function myvalue(){
                return __CLASS__;
            }
        }
        $kiwi =  new creta();
        echo $kiwi->myvalue();
        echo "<br>";
        echo __DIR__;
        echo "<br>";
        echo __FILE__;
        echo "<br>";
           function mystatement(){
            return __FUNCTION__;
             }
             echo mystatement();

             echo "<br>";
             echo __FILE__;
             echo "<br>";
           $kiwi =  new fruits();
           echo  $kiwi->myvalue();
        ?>
    </body>
</html>