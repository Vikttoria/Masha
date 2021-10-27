
<?php
	
	if (isset($_POST['name'])) {
		$name = strip_tags($_POST['name']) ;
		//echo 'Name '.$name;
	}
    var_dump($_POST);die;
    header("Location: http://mytest/20.09/primer.php")
?>
