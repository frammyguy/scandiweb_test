<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="https://i.ibb.co/kGMmSd6/favicon-frammy2.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.min.css">
  	<title>Product page | Vladislavs Fomins</title>
</head>
<body>

	<header>
		<a href="#" class="header_text">
			Product List
		</a>
		<nav>
			<a id="add-product-btn" class="btn" href="add-product">
				ADD
			</a>
			<button id="delete-product-btn" class="btn">
				MASS DELETE
			</button>
		</nav>
	</header>

	<section class="container main">
		<div class="row">

			<?php
				@include_once('class/DB.php');
				if (isset($_POST['sku']) && $_POST['sku'] != null)
					@include_once('include/writeData.php');
				@include_once('include/displayData.php');
				@include_once('include/deleteScript.php');
			?>

		</div>
	</section>

	<footer>
		Scandiweb Test assignment
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<script src="js/script.js"></script>
</body>
</html>