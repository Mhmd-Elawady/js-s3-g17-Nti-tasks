<?php
session_start();
include "connect/db.php";

if (!isset($_SESSION['user_id'])) {
    die("login first ");
}

$id = $_SESSION['user_id'];


$sql = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = !empty($_POST['password']) ? password_hash($_POST['password'], PASSWORD_DEFAULT) : $user['password'];

    $sql = "UPDATE users SET username='$username', password='$password' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "Data updated successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<form method="post">
    Username: <input type="text" name="username" value="<?= $user['username'] ?>" required><br>
    <input type="password" name="password"><br>
    <button type="submit">Update</button>
</form>
