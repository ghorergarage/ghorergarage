<?php
include_once 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $username = $_POST['username']; 
    $password = $_POST['password']; 
    

if (empty($firstName) || empty($lastName) || empty($mobile) || empty($email) || empty($address) || empty($username) || empty($password)) {
    $warning = "All fields are required. Please fill in all the fields.";
        echo '<div class="alert alert-danger" role="alert">' . $warning . '</div>';
        header('Location: EmptyForm.html');
        exit();
    }
}
    

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    
    $query = "INSERT INTO users (first_name, last_name, mobile, email, address, username, password, role)
              VALUES ('$firstName', '$lastName', '$mobile', '$email', '$address', '$username', '$hashedPassword', 'user')";
    
    
    
    echo "Before SQL query: " . $query . "<br>";
if (mysqli_query($connection, $query)) {
    echo "Query executed successfully.<br>";
    
    header('Location: RegistrationSuccessful.html');
    exit();
    
} 
else {
    echo "Query execution failed.<br>";
    
    echo "Error: " . mysqli_error($connection) . "<br>";
    echo "Query: " . $query;
    header('Location: failed.html');
    exit();
}




?>
