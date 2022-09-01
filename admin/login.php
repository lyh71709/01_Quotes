<form action="index.php?page=../admin/adminlogin" method="post">

    <p>Username: <input name="username" /></p>
    <p>Username: <input name="username" type="password" /></p>

    <?php
if(isset($_GET['error'])) {
    ?>
    <span class="error"><?php echo $_GET['error'] ?></span>

    <?php
}
?>

    <p><input type="submit" name="login" value="Log In" /></p>

</form>