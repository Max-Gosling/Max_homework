<form method="POST" name="" action="http://dota2.com/game.php">
    <input type = "text" name="username" value="gamer"><br>
    <input type = "passowrd" name="password" value="qwerty1234"><br>
    <input type = "submit" value="Погнали"><br>
</form>
<?php
	if (isset($_POST)) {
		print($_POST['username']);
		print($_POST['password']);
	}
?>
