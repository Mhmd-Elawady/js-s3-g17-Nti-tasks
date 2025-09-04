<?php
include "connect/db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $name = $_POST['name'];
    $is_admin = isset($_POST['is_admin']) ? 1 : 0;

    $sql = "INSERT INTO users (username, password, name, is_admin) 
            VALUES ('$username', '$password', '$name',)";
    if (mysqli_query($conn, $sql)) {
        echo "User registered ";
    } else {
        echo "Error" . mysqli_error($conn);
    }
}
?>
<form method="post">
    Username: <input type="text" name="username" required><br>
    Name: <input type="text" name="name" required><br>
    Password: <input type="password" name="password" required><br>
    <button type="submit">Register</button>
</form>
