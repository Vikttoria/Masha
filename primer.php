
<form action="" method="Post">
	<input name="name" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>">
	<textarea name="message">
		<?php if (isset($_POST['message'])) echo $_POST['message']; ?>
	</textarea>
	<input type="submit">
</form>