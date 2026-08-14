<?php
session_start();
include 'db.php';

if (isset($_POST['login'])) {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $sql = "SELECT * FROM users WHERE email=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_assoc($result);
        echo "Entered Password: " . $password . "<br>";
echo "Database Hash: " . $row['password'] . "<br>";

if (password_verify($password, $row['password'])) {
    echo "Password Match";
} else {
    echo "Password Not Match";
}

        if (password_verify($password, $row['password'])) {

            $_SESSION['email'] = $email;

            echo "Login Successful<br><br>";
            echo "<a href='logout.php'>Logout</a>";

        } else {
            echo "Invalid Email or Password";
        }

    } else {
        echo "Invalid Email or Password";
    }
}


?>

<form method="post">
    Email:
    <input type="email" name="email" required><br><br>

    Password:
    <input type="password" name="password" required><br><br>

    <input type="submit" name="login" value="Login">
</form>