<?php

$db = new DB();

$db->setSku($_POST['sku']);
$db->setName($_POST['name']);
$db->setPrice($_POST['price']);
$db->setSize($_POST['size']);
$db->setHeight($_POST['height']);
$db->setWidth($_POST['width']);
$db->setLength($_POST['length']);
$db->setWeight($_POST['weight']);

$link = mysqli_connect("localhost", "root", "farlands", "scandiweb_test");

if ($link->connect_error)
	die("Connection failed: " . $link->connect_error);

$sku = $db->getSku();
$name = $db->getName();
$price = $db->getPrice();
$size = $db->getSize();
$height = $db->getHeight();
$width = $db->getWidth();
$length = $db->getLength();
$weight = $db->getWeight();

$sql = "INSERT INTO products 
(sku, name, price, size, height, width, length, weight)
VALUES ('$sku','$name','$price','$size','$height','$width','$length','$weight')";

if(!($link->query($sql)))
    echo "Ошибка: " . $link->error;
else
    header ('Location: .');