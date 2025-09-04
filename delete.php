<?php

require_once 'connect/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'];
    $query = "DELETE FROM users WHERE id=$id ";
    
    
    if(mysqli_query($conn, $query)) {
        echo "User Deleted";
    } else {
        echo " wrong";
    }
}else {
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="">
    <input type="text" name="id">
    <button type="submit">Delete</button>
</form>
</body>
</html>