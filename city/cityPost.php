
<?php
	
	if (isset($_POST['city'])) {
		$city = strip_tags ($_POST['city']) ;
		echo 'City '.$city;
	}
?>