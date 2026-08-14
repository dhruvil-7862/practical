<?php
include 'db.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['submit'])) {

    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $address = trim($_POST['address']);
    $mobile = trim($_POST['mobile']);
    $birth = trim($_POST['birth']);
    $email = trim($_POST['email']);
    $salary = trim($_POST['salary']);
    $roll = trim($_POST['roll']);
    $gender = trim($_POST['gender']);

    $photo = basename($_FILES['photo']['name']);

    // Validation
    if (empty($fname)) {
        echo "First name is required";
    } elseif (empty($lname)) {
        echo "Last name is required";
    } elseif (empty($address)) {
        echo "Address is required";
    } elseif (!preg_match("/^[0-9]{10}$/", $mobile)) {
        echo "Mobile number must be 10 digits";
    } elseif (empty($birth)) {
        echo "Birth date is required";
    } elseif (empty($email)) {
        echo "Email is required";
    } elseif (empty($salary)) {
        echo "Salary is required";
    } elseif (empty($roll)) {
        echo "Roll number is required";
    } elseif (empty($gender)) {
        echo "Gender is required";
    } elseif (empty($photo)) {
        echo "Please select a photo";
    } else {

        $uploadDir = __DIR__ . '/uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        $targetFile = $uploadDir . $photo;
        if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetFile)) {
            // uploaded
        } else {
            echo "Photo upload failed";
            exit;
        }

        $sql = "INSERT INTO employee
            (fname,lname,address,mobile,birth,email,salary,roll,gender,photo)
            VALUES
            ('$fname','$lname','$address','$mobile','$birth','$email','$salary','$roll','$gender','$photo')";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("Location: display.php");
            exit();
        } else {
            echo "Error : " . mysqli_error($conn);
        }
    }
}
?>