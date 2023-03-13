<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="https://i.ibb.co/kGMmSd6/favicon-frammy2.png" type="image/x-icon">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.min.css">
	<title>Adding product | Vladislavs Fomins</title>
</head>
<body>

	<header>
		<a href="index.php" class="header_text">
			Product List
		</a>
		<nav>
			<button id="save-product-btn" type="button" class="btn">
				Save
			</button>
			<a href="index.php" id="cancel-product-btn" class="btn">
				cancel
			</a>
		</nav>
	</header>
	<section class="container card-body">
		<form id="product-form" action="index.php" method="POST" novalidate>
			<div class="form-group">
				<label for="sku">SKU</label>
				<input type="text" id="sku" name="sku" class="form-control" placeholder="#sku" required>
			</div>
			<div class="isInvalid" id="skuIsInvalid" hidden>Please, enter unique SKU for the product</div>
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" id="name" name="name" class="form-control" placeholder="#name" required>
			</div>
			<div class="isInvalid" id="nameIsInvalid" hidden>Please, enter a valid name for the product</div>
			<div class="form-group">
				<label for="price">Price($)</label>
				<input type="number" id="price" name="price" class="form-control" placeholder="#price" required>
			</div>
			<div class="isInvalid" id="priceIsInvalid" hidden>Please, enter a valid price for the product</div>
			<div class="form-group">
				<label for="productType">Type Switcher</label>
				<select id="productType" ame="type_switcher" class="form-control" required>
					<option value="empty" hidden selected></option>
					<option value="dvd" id="DVD">DVD</option>
					<option value="book" id="Book">Book</option>
					<option value="furniture" id="Furniture">Furniture</option>
				</select>
			</div>
			<div class="isInvalid" id="selectIsInvalid" hidden>Please, choose one of options</div>
			
			<div class="form-group optional dvd" hidden>
				<label for="size">Size (MB)</label>
				<input type="number" id="size" name="size" class="form-control" placeholder="#size">
			</div>
			<div class="isInvalid NonReq" id="sizeIsInvalid" hidden>Please, enter a valid size in megabytes</div>
			<div class="form-group optional furniture" hidden>
				<label for="height">Height (CM)</label>
				<input type="number" id="height" name="height" class="form-control" placeholder="#height">
			</div>
			<div class="isInvalid NonReq" id="heightIsInvalid" hidden>Please, enter a valid height in centimeters</div>
			<div class="form-group optional furniture" hidden>
				<label for="width">Width (CM)</label>
				<input type="number" id="width" name="width" class="form-control" placeholder="#width">
			</div>
			<div class="isInvalid NonReq" id="widthIsInvalid" hidden>Please, enter a valid width in centimeters</div>
			<div class="form-group optional furniture" hidden>
				<label for="length">Length (CM)</label>
				<input type="number" id="length" name="length" class="form-control" placeholder="#length">
			</div>
			<div class="isInvalid NonReq" id="lengthIsInvalid" hidden>Please, enter a valid length in centimeters</div>
			<div class="form-group optional book" hidden>
				<label for="weight">Weight (KG)</label>
				<input type="number" id="weight" name="weight" class="form-control" placeholder="#weight">
			</div>
			<div class="isInvalid NonReq" id="weightIsInvalid" hidden>Please, enter a valid weight in kilograms</div>
			<input id="formSubButton" type="submit" value="" hidden>
		</form>

	</section>
	<footer>
		scandiweb test assignment
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<script src="js/script.js"></script>
</body>
</html>