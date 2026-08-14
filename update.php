<?php
include 'db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM employee WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update']))
{
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $address = trim($_POST['address']);
    $mobile = trim($_POST['mobile']);
    $birth = trim($_POST['birth']);
    $email = trim($_POST['email']);
    $salary = trim($_POST['salary']);
    $roll = trim($_POST['roll']);
    $gender = trim($_POST['gender']);
    $photo = $_FILES['photo']['name'];
    $temp = $_FILES['photo']['tmp_name'];

    $sql = "UPDATE employee SET
            fname='$fname',
            lname='$lname',
            address='$address',
            mobile='$mobile',
            birth='$birth',
            email='$email',
            salary='$salary',
            roll='$roll',
            gender='$gender',
            photo='$photo'
            WHERE id='$id'";

    $result = mysqli_query($conn, $sql);

    if($result)
    {
        header("Location: display.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Employee</title>
</head>
<body>

<form method="post" enctype="multipart/form-data">

search:
<input type="text" name="search" placeholder="Search Employee">
    <input type="submit" value="Search"><br>

First Name:
<input type="text" name="fname" value="<?php echo $row['fname']; ?>"><br><br>

Last Name:
<input type="text" name="lname" value="<?php echo $row['lname']; ?>"><br><br>

Address:
<input type="text" name="address" value="<?php echo $row['address']; ?>"><br><br>

Mobile Number:
<input type="text" name="mobile" value="<?php echo $row['mobile']; ?>"><br><br>

Birth Date:
<input type="date" name="birth" value="<?php echo $row['birth']; ?>"><br><br>

Email:
<input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>

Salary:
<input type="text" name="salary" value="<?php echo $row['salary']; ?>"><br><br>

Roll Number:
<input type="text" name="roll" value="<?php echo $row['roll']; ?>"><br><br>

<select name="gender">
    <option value="Male" <?php if($row['gender'] == "Male") echo "selected"; ?>>
        Male
    </option>

    <option value="Female" <?php if($row['gender'] == "Female") echo "selected"; ?>>
        Female
    </option>

    
</select>

<br><br>

Current Photo:<br>
<img src="uploads/<?php echo $row['photo']; ?>" width="100" height="100"><br><br>

Change Photo:
<input type="file" name="photo"><br><br>

<input type="submit" name="update" value="Update">

</form>

</body>
</html>