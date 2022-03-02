<?php 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Verify</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="verify_code.php" method="post">
        <h2>Verify</h2>
        <?php if(isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php }?>
		<label>Code</label>
		<input type="text" name="code" placeholder="****"><br>
       
		<button type="submit">Send</button>

	</form>
</body>
</html>