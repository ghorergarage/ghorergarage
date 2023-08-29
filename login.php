<?php
include_once 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        if ($row['role'] === 'admin' && $row['password'] === $password) {
            redirectToPage('admin_front_page.php');
        } elseif (password_verify($password, $row['password'])) {
            redirectToPage('index.html');
        } else {
            redirectToPage('relogin.html', 'error=invalid');
        }
    } else {
        redirectToPage('relogin.html', 'error=notfound');
    }
}

function redirectToPage($page, $queryString = '') {
    $location = $page;
    if ($queryString !== '') {
        $location .= '?' . $queryString;
    }
    header("Location: $location");
    exit();
}
?>