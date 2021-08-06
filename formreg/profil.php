
<?php
session_start();
?>

Hello <?=$_SESSION['user']['full_name']  ?>

<?php
if(!$_SESSION['user']){
    header('Location: index.php');
}
?>




<form action="vendor/logout.php" method="POST">
<button>Exit</button>
</form>
