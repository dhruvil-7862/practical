<?php
include 'db.php';

if (isset($_POST['create'])) {

$email = trim($_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$check = "SELECT * FROM users WHERE email = ?";
$stmt = mysqli_prepare($conn, $check);
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
echo "Email already exists!";
} else {

$sql = "INSERT INTO users (email, password) VALUES (?, ?)";
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
mysqli_stmt_bind_param($stmt, "ss", $email, $password);

if (mysqli_stmt_execute($stmt)) {
echo "Registration Successful!";
                
} else {
echo "Registration Failed!";
}

mysqli_stmt_close($stmt);
        }
    }
}

mysqli_close($conn);


?>
<!DOCTYPE html>
<html>
    <head>
   <title>register</title>
    </head>
    <body>
      <h2>create register form</h2>

      <form method="post">
         <input type="email" name="email" placeholder="Enter Email"><br><br>

    <input type="password" name="password" placeholder="Enter Password"><br><br>

    <button type="submit" name="create">Register</button>

      </form>
    </body>
</html>