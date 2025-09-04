<?php
require_once 'connect/db.php';

$query = 'SELECT * FROM users';
$result = mysqli_query($conn, $query);
?>
<h3>users</h3>
<table border="1" cellpadding="8">
<tr><th>ID</th><th>Username</th><th>Name</th><th>Admin</th></tr>
<?php
if($result && mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['username']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['is_admin']."</td>";
        echo "</tr>";
    }
}
?>
</table>
