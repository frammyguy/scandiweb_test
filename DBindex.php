<?php
use Monolog\Handler\BrowserConsoleHandler;
$link = mysqli_connect("localhost", "root", "farlands", "scandiweb_test");

if ($link->connect_error) {
	die("Connection failed: " . $conn->connect_error);
  } 

// mysqli_set_charset($con, "utf8");
$sql = 'SELECT * FROM products';

if ($result = $link->query($sql)) {
	$rowsCount = $result->num_rows;
	foreach ($result as $row) {
	?>
	<div class="col col-md-3 product-block">
		<div class="block-checkbox">
			<input type="checkbox" class="delete-checkbox"> 
		</div>
		<div class="block block-sku">
			<?php
			echo $row['sku'];
			?>
		</div>
		<div class="block block-name">
			<?php
			echo $row['name'];
			?>
		</div>
		<div class="block block-price">
			<?php
			echo $row['price'];
			?>
		</div>
		<div class="block block-size">
			<?php
			echo $row['size'];
			?>
		</div>
		<div class="block block-dimensions">
			<?php
			echo $row['height'];
			echo $row['width'];
			echo $row['length'];
			?>
		</div>
		<div class="block block-weight">
			<?php
			echo $row['weight'];
			?>
		</div>
	</div>

<?php
	}

}