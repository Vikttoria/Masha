<?php
session_start();
?>
<form action="vendor/login.php" method="POST">
	<input type="text" name="login">
	<input type="password" name="password">
	<input type="submit">
    <a href="/formreg/register.php">Register here</a>
</form>
<?php
if(isset($_SESSION['msg'])){
    echo "<p>".$_SESSION['msg']."</p>";
}
unset($_SESSION['msg']);
?>
