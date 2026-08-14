<!DOCTYPE html>
<html>
<body>

<?php  
class Abc
{
    protected $name = "hello user";
}

class Xyz extends Abc
{
    public function show()
    {
        echo $this->name; // allowed
    }
}

$obj = new Xyz();
echo $obj->show();
?>  

</body>
</html>
