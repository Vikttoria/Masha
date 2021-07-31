<?php
	session_start(); //стартуем сессию

	//Если есть данные в сессии об имени пользователя:
	if (isset($_SESSION['city'])) {
		echo $_SESSION['city']; //выведем имя на экран
	}
?>