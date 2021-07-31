
<?php
session_start(); 
if(isset($_SESSION['email'])){
    $email=$_SESSION['email'];
  
}
?>

<form action="" method="POST">
	
    <input type="text" name="email" value="<?php echo $email ?>">
    <input type="text" name="name">
    <input type="text" name="age">
	<input type="submit">
    
</form>