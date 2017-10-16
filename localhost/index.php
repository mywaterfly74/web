<html>
	<head>
		<meta charset="utf-8">
		<link href="css/style.css" rel="stylesheet">
		<?php include ('menuandcontent.php'); ?>
		<title>Black and White</title>
	</head>
	<body>
		<?php echo MenuAndContent::renderMenu($_GET['page'])?>
		<?php echo MenuAndContent::getContent($_GET['page']).'</div>'?>
	</body>
</html>