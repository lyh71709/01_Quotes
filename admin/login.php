<form action="index.php?page=../admin/adminlogin" method="post">

    <p>Username: <input class="short" name="username" /></p>
    <p>Password: <input class="short" name="password" type="password" /></p>

    <?php
if(isset($_GET['error'])) {
    ?>
    <span class="error"><?php echo $_GET['error'] ?></span>

    <?php
}
?>

    <p><input class="short" type="submit" name="login" value="Log In" /></p>

</form>