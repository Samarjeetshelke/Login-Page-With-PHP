<!DOCTYPE html>

<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<form action="check_mail.php" method="post">
        <h2>Recovery</h2>
        <?php if(isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php }?>
		<label>Email</label>
		<input type="mail" name="mail" placeholder="mail@gmail.com"><br>
		<button type="submit">Send</button>

	</form>
</body>
</html>