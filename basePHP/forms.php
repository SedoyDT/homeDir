<form action="" method="GET">
	<input type="text" name="user"><br><br>
	<textarea name="message"></textarea><br><br>
	<input type="submit">
</form>

<form action="" method="GET">
	<input type="text" name="user" value="<?php echo $_REQUEST['user']; ?>">
	<input type="submit">
</form>


<form action="" method="GET">
	<input name="user" value="<?php if(isset($_REQUEST['user'])) echo $_REQUEST['user']; ?>">
	<input type="submit">
</form>