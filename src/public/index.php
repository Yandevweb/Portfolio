<!DOCTYPE html>
<html>
<head>
	<title>Portfolio</title>
	<link rel="icon" type="image/x-icon" href="images/favicon32.ico">
	<link rel="shortcut" type="image/x-icon" href="images/favicon32.ico">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="style/index.css">
	<link rel="stylesheet" href="style/competences.css">
	<link rel="stylesheet" href="style/contact.css">
	<link rel="stylesheet" href="style/scolaire.css">
</head>
<body>

<?php
require_once('data/data.php');
require_once('data/titre.php');
?>

<div class="container-fluid">
	<div class="row">
	<?php
		require_once('data/menu.php');
		require_once('data/content.php');
	?>
</div>
</div><!-- /container-fluid -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>