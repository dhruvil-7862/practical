<?php
include 'db.php';

$search = '';
if (isset($_GET['search'])) {
    $search = mysqli_real_escape_string($conn, $_GET['search']);
    $sql = "SELECT * FROM employee
            WHERE fname LIKE '%$search%'
            OR lname LIKE '%$search%'
            OR email LIKE '%$search%'";
} else {
    $sql = "SELECT * FROM employee";
}

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Display</title>
</head>
<body>

    <a href="employee.php">
        <button type="button">Create</button>
    </a>

    <br><br>

    <form method="GET">
        <input type="text" name="search" placeholder="Search Employee" value="<?php echo htmlspecialchars($search); ?>">
        <input type="submit" value="Search">
    </form>

    <br><br>
        <div class="table-container>
        <table border="1">
</table>

        </div>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Mobile Number</th>
            <th>Birth Date</th>
            <th>Email</th>
            <th>Salary</th>
            <th>Roll Number</th>
            <th>Gender</th>
            <th>Photo</th>
            <th>Action</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo htmlspecialchars($row['fname']); ?></td>
            <td><?php echo htmlspecialchars($row['lname']); ?></td>
            <td><?php echo htmlspecialchars($row['address']); ?></td>
            <td><?php echo htmlspecialchars($row['mobile']); ?></td>
            <td><?php echo htmlspecialchars($row['birth']); ?></td>
            <td><?php echo htmlspecialchars($row['email']); ?></td>
            <td><?php echo htmlspecialchars($row['salary']); ?></td>
            <td><?php echo htmlspecialchars($row['roll']); ?></td>
            <td><?php echo htmlspecialchars($row['gender']); ?></td>
            <td>
                <?php
                if (!empty($row['photo'])) {
                    $photoFile = 'uploads/' . basename($row['photo']);
                    if (file_exists($photoFile)) {
                        echo '<img src="' . htmlspecialchars($photoFile) . '" alt="Employee photo" width="80" height="80">';
                    } else {
                        echo 'Photo not found';
                    }
                } else {
                    echo 'No photo available';
                }
                ?>
            </td>
            <td>
                <a href="update.php?id=<?php echo $row['id']; ?>">Update</a>
                |
                <a href="delete.php?id=<?php echo $row['id']; ?>"
                   onclick="return confirm('Are you sure you want to delete this record?');">
                    Delete
                </a>
            </td>
        </tr>
        <?php } ?>

    </table>

</body>
</html>