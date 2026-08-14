<!DOCTYPE html>
<html>
    <body>
     <?php
     $favcolor="black";
     switch($favcolor){
        case "black";
        echo "your favorite color is a black";
        case "blue";
        echo "your favroite color is a blue";
        break;
        case "white";
        echo "ypur favroite color is a white";
        break;
        default:
        echo "your favorite color is a nither black,blueand white!";
      }
       echo "<br>";
      $d = 4;

        switch ($d){
        case 6:
        echo "to day is a sunday";
        break;
        case 0:
        echo "to day is holiday";
        break;
        default:
        echo "loking forward to the weekend"; 
        }
      echo "<br>";
        $d = 3;
        switch ($d) {
            case 1:
            case 2:
            case 3:
            case 4:
            case 5: 
                echo "the week feels so long";
                break;
                case 6:
                case 0:
                    echo "weekands are best";
                    break;
                    default;
                    echo "somthing went wrong";    

        }

     ?>   
    </body>
</html>