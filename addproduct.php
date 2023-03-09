<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.min.css">
	<title>Document</title>
</head>
<body>

	<header>
		<a href="index.php" class="header_text">
			Product List
		</a>
		<nav>
			<button id="save-product-btn">
				save
			</button>
			<button id="cancel-product-btn">
				cancel
			</button>
		</nav>
	</header>
	<section class="container card-body">
		
		<form id="product-form" action="code.php" method="POST">
			<div class="form-group">
				<label for="">SKU</label>
				<input type="text" name="sku" class="form-control" placeholder="#sku">
			</div>
			<div class="form-group">
				<label for="">Name</label>
				<input type="text" name="name" class="form-control" placeholder="#name">
			</div>
			<div class="form-group">
				<label for="">Price($)</label>
				<input type="number" name="sku" class="form-control" placeholder="#price">
			</div>
			<div class="form-group">
				<label for="">Type Switcher</label>
				<select name="type_switcher" id="productType" class="form-control">
					<option value="empty" hidden selected></option>
					<option value="dvd" id="DVD">DVD</option>
					<option value="book" id="Book">Book</option>
					<option value="furniture" id="Furniture">Furniture</option>
				</select>
			</div>
			
			<div class="form-group optional dvd" hidden>
				<label for="">Size (MB)</label>
				<input type="number" name="size" class="form-control" placeholder="#size">
			</div>
			<div class="form-group optional furniture" hidden>
				<label for="">Height (CM)</label>
				<input type="number" name="height" class="form-control" placeholder="#height">
			</div>
			<div class="form-group optional furniture" hidden>
				<label for="">Width (CM)</label>
				<input type="number" name="width" class="form-control" placeholder="#width">
			</div>
			<div class="form-group optional furniture" hidden>
				<label for="">Length (CM)</label>
				<input type="number" name="length" class="form-control" placeholder="#length">
			</div>
			<div class="form-group optional book" hidden>
				<label for="">Weight (KG)</label>
				<input type="number" name="weight" class="form-control" placeholder="#weight">
			</div>
		</form>

	</section>
	<footer>
		scandiweb test assignment
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<script src="js/script.js"></script>
</body>
</html>