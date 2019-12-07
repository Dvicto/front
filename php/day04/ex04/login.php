<?php
	include "auth.php";
	session_start();
	if (($_POST['login'] && $_POST['passwd']) && auth($_POST['login'], $_POST[passwd]))
	{
		echo "OK\n";
		$_SESSION['loggued_on_user'] = $_POST['login'];
		?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>42chat</title>
	<style>
	
	</style>
</head>
<body>
<h2>Chat: </h2><span><a href="logout.php">Log Out</a></span>
<iframe name="chat" src="chat.php" width="100%" height="300px"></iframe>
<h3>Write your message: </h3>
<div class="container">
	<iframe name="speak" src="speak.php" width="50%" height="200px"></iframe>
	<div class="login">
		<p>
			<a href="modif.html">
				<?php echo $_SESSION['loggued_on_user']?>
			</a>
		</p>
	</div>
</div>
<footer>
	<hr />
	<p>
		&copy ykondrat 2017
	</p>
</footer>
</body>
<?
	}
	else if (($_GET['login'] && $_GET['passwd']))
	{
		$_SESSION['loggued_on_user'] = "";
		header("location: index.html");
	}
?>