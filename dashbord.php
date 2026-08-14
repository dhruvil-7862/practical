<?php
session_start();
if(isset($_SESSION['email']));
header("location: login.php");
exit();
?>
<h2>welcome to dashbord</h2>
<p>welcome <?php echo $_SESSION['email']; ?></p>
<a href="logout.php">logout</a>
