<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.min.css">
	<title>Document</title>
</head>
<body>

	<header>
		<div class="header_text">
			Product List
		</div>
		<nav>
			<button id="save-product-btn">
				save
			</button>
			<button id="cancel-product-btn">
				cancel
			</button>
		</nav>
	</header>
	<section class="card-body">
		
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
			<?php
				
				if ($type_switcher == 'DVD') {
					?>
						<div class="form-group">
							<label for="">Size(MB)</label>
							<input type="number" name="size" class="form-control" placeholder="#size">
						</div>
					<?php
				}

			?>
			
		</form>

	</section>
	<footer>
		scandiweb test assignment
	</footer>
</body>
</html>