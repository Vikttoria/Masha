<form action="" method="POST">
	<input type="text" name="email">
	<input type="submit">
    <a href="/dz/dzSessiontwo/emailform.php">email here</a>
</form>
<?php
if(isset($_POST['email'])){
    session_start();
    $_SESSION['email'] = $_POST['email'];
}
?>