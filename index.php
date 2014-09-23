<?php include('roulette.php'); ?>
<html>
<head>
	<title>Roulette</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="/script.js"></script>
	<link rel="stylesheet" type="text/css" href="/style.css">
</head>
<body>
	<?php 

		echo '<form action="" id="roulette_form">';
		print_roulette_options(range(1,6), 0);
		echo '<input type="submit" value="Pull Trigger"/>';
		echo '</form>';
		echo '<h1 id="result"></h1>';
	?>
</body>
</html>



