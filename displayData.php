<?php
$link = mysqli_connect("localhost", "root", "farlands", "scandiweb_test");

if ($link->connect_error) {
	die("Connection failed: " . $conn->connect_error);
  } 

// mysqli_set_charset($con, "utf8");
$sql = 'SELECT * FROM products';
if ($result = $link->query($sql))
	foreach ($result as $row) {
		$db = new DB;
		$db->setSku($row['sku']);
		$db->setName($row['name']);
		$db->setPrice($row['price']);
		$db->setSize($row['size']);
		$db->setHeight($row['height']);
		$db->setWidth($row['width']);
		$db->setLength($row['length']);
		$db->setWeight($row['weight']);
	?>
	<div class="col col-md-3 product-block">
		<div class="block-checkbox">
			<input type="checkbox" class="delete-checkbox"> 
		</div>
		<div class="block block-sku">
			<?php
			echo $db->getSku();
			?>
		</div>
		<div class="block block-name">
			<?php
			echo $db->getName();
			?>
		</div>
		<div class="block block-price">
			<?php
			echo number_format($db->getPrice(),2) . " $";
			?>
		</div>
		<div class="block block-size">
			<?php
				if ($db->getSize() != 0)
					echo "Size: " . $db->getSize() . " MB";
			?>
		</div>
		<div class="block block-dimensions">
			<?php
				if ($db->getHeight() != 0 && $db->getWidth() != 0 && $db->getLength() != 0)
					echo "Dimension: " . $db->getHeight() . "x" . $db->getWidth() . "x" . $db->getLength();
			?>
		</div>
		<div class="block block-weight">
			<?php
				if ($db->getWeight() != 0)
					echo "Weight: " . $db->getWeight() . "KG";
			?>
		</div>
	</div>

<?php
	$db = null;
	};