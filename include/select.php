<div id="skuCheck" class="<?php
$db = new DB;

$link = $db->connect();

$sql = 'SELECT sku FROM products';

if ($result = $link->query($sql))
	foreach ($result as $row) {
        echo($row['sku'] . ' ');
    }

?>
"></div>