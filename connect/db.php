<?php

$serverName     = 'localhost';
$username   = 'root';
$pass       = '';
$dbName     = 'userdb';

// mysqli_close()
// mysqli_connect()
// mysqli_fetch_assoc()
// mysqli_num_rows()
// mysqli_query()
$conn = mysqli_connect($serverName, $username, $pass, $dbName);
if($conn) {
    // echo "You are connected";
} else {
    "Something wrong";
}

?>
<!--
    // if($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $dbName = $_POST['db'];
//     $query = "CREATE DATABASE IF NOT EXISTS $dbName";
//     if(mysqli_query($conn, $query)) {
//         echo "$dbName is success created";
//     } else {
//         echo "Something wrong";
//     }
// }

// mysqli_close($conn);


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="">
    <input type="text" palceholder="write your db name" name="db">
    <button type="submit">Create</button>
</form>
</body>
</html> -->
