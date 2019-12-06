<?php
session_start();
if ($_GET['submit'] == "OK") {
   $_SESSION['login'] = $_GET['login'];
   $_SESSION['passwd'] = $_GET['passwd'];
}
?>
<html>
<body>
    <form action="index.php" method="get">
        <p>Username: <input name="login" type="text" value="<?php echo $_GET['login']?>"/><br>
        Password: <input name="passwd" type="password" value="<?php echo $_GET['passwd']?>"/><br>
            <input name="Submit" type="submit" value="OK"/></p>
    </form>
</body>
</html>
