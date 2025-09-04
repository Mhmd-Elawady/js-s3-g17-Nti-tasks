<?php

require_once 'connect/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $query = "UPDATE users SET name='$name' WHERE id=1 ";
    
    
    if(mysqli_query($conn, $query)) {
        echo "User Updated";
    } else {
        echo "Something wrong";
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
    <input type="text" name="name">
    <button type="submit">Update</button>
</form>
</body>
</html>