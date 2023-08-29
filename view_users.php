<!DOCTYPE html>
<html>
<head>
    <title>View Users</title>
</head>
<body>
    <h2>Registered Users</h2>

    <?php
   
    include_once 'db_connection.php';

   
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        echo '<table border="1">';
        echo '<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Mobile</th><th>Email</th><th>Address</th><th>Username</th><th>password</th><th>Role</th></tr>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['first_name'] . '</td>';
            echo '<td>' . $row['last_name'] . '</td>';
            echo '<td>' . $row['mobile'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['address'] . '</td>';
            echo '<td>' . $row['username'] . '</td>';
            echo '<td>' . $row['password'] . '</td>';
            echo '<td>' . $row['role'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo 'No users found.';
    }

   
    mysqli_close($connection);
    ?>
</body>
</html> 