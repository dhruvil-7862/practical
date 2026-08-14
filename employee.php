<!DOCTYPE html>
<html>
    <head>
        <h2>📝 Employee Registration</h2>
        <link rel="stylesheet"href="style.css">
        <style>
        .error
        {
            content: "*";
            color: red;
        }
        </style>
    </head>

    <body>
        <div class="container">
        <form id="empfrm" method="POST" action="insert_dynamic.php" enctype="multipart/form-data">
            Fast name:
            <input type="text" id="fname" name="fname"><br><br>
            Last name:
            <input type="text" id="lname" name="lname"><br><br>
            Address:
            <input type="text" id="address" name="address"><br><br>
            Mobile number:
            <input type="tel" id="mobile" name="mobile"><br><br>
            Birth date:
            <input type="date" id="birth" name="birth"><br><br>
            Email:
            <input type="text" id="email" name="email"><br><br>
            Salary:
            <input type="number" id="salary" name="salary"><br><br>
            Roll number:
            <input type="number" id="roll" name="roll"><br><br>
            Gender:
            <select name="gender">
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            </select>
            <br><br>
            Photo:
            <input type="file" name="photo"><br><br>
            <input type="submit" value="submit" name="submit">

            <?php
            if (isset($_GET['id'])) {
            ?>
                <input type="submit" name="update" value="Update">
            <?php
            } else 
            ?>
                
        </form>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.20.0/dist/jquery.validate.min.js"></script>

<script>
$(document).ready(function () {

    $("#empfrm").validate({
       
        
           


        rules: {
            fname: {
                required: true,
                minlength: 5
            },
            lname: {
                required: true,
                minlength: 5
            },
            address: {
                required: true,
                minlength: 10
            },
            mobile: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 10
            },
            birth: {
                required: true,
                date: true
            },
            email: {
                required: true,
                email: true
            },
            salary: {
                required: true,
                digits: true
            },
            roll: {
                required: true,
                digits: true,
                min: 1
            },
            gender: {
                required: true
            },
            photo: {
                required: true,
                extension: "jpg|jpeg|png"
            }
        },

        messages: {
            fname: {
                required: "Please enter first name",
                minlength: "Minimum 5 characters required"
            },
            lname: {
                required: "Please enter last name",
                minlength: "Minimum 5 characters required"
            },
            address: {
                required: "Please enter address",
                minlength: "Minimum 10 characters required"
            },
            mobile: {
                required: "Please enter mobile number",
                digits: "Only digits allowed",
                minlength: "Mobile number must be 10 digits",
                maxlength: "Mobile number must be 10 digits"
            },
            birth: {
                required: "Please select birth date"
            },
            email: {
                required: "Please enter email",
                email: "Enter a valid email address"
            },
            salary: {
                required: "Please enter salary",
                digits: "Only digits allowed"
            },
            roll: {
                required: "Please enter roll number",
                digits: "Only digits allowed",
                min: "Roll number must be greater than 0"
            },
            gender: {
                required: "Please select gender"
            },
            photo: {
                required: "Please select a photo",
                extension: "Only JPG, JPEG and PNG files are allowed"
            }
        }
        
 
    });

});
</script>
    </body>
    </div>
   
</html>