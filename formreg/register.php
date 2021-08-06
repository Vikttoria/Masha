<?php
session_start();
?>
<form action="vendor/register.php" method="POST">
    <label >Login</label>
	<input type="text" name="login">
    <label >Password</label>
	<input type="password" name="password">
    <label >Password_Confirm</label>
    <input type="password" name="password_confirm">
    <label >Full_name</label>
    <input type="text" name="full_name">
    <label >Email</label>
    <input type="email" name="email">
	<input type="submit">
    <a href="/formreg/index.php">Login here</a>
</form>
<?php

if(isset($_SESSION['msg'])){
    echo "<p>".$_SESSION['msg']."</p>";
}
unset($_SESSION['msg']);

?>