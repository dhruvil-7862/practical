<?php
if(mysqli_num_rows($result) > 0)
{
    echo "Login Successful";
}
else
{
    echo "Invalid Email or Password";
}
?>