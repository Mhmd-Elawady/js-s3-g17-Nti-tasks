<?php
session_start();


?>


<?php


?>

<?php if(isset($_SESSION['user_id'])):?>


    <form>
        <input type="text" value="<?php echo $_SESSION['user_id']?>">
        <button type="submit">Update</button>
</form>
<form method="POST" action="/nti-g17/9Session/destroy.php">
    <button type="submit">Logout
</form>
<?php else:?>

    Please log in <a href="/nti-g17/9Session/login.php">Login</a>

    <?php endif?>