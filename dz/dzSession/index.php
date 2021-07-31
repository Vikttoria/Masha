<form action="" method="POST">
	<input type="text" name="city">
	<input type="submit">
    <a href="/dz/dzSession/test.php">TEST</a>
</form>

<?php
	//Если форма была отправлена и имя не пустое:
	if (isset($_POST['city'])) {
		session_start(); //стартуем сессию
		$_SESSION['city'] = $_POST['city']; //пишем в сессию
	}
?>

