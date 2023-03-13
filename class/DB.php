<?php

class DB {
    private $sku = "";
    private $name = "";
    private $price = 0.00;
    private $size = 0;
    private $height = 0;
    private $width = 0;
    private $length = 0;
    private $weight = 0;
    private $server = "localhost";
    private $login = "root";
    private $password = "farlands";
    private $database = "scandiweb_test";

    public function setSku($sku) {
        $this->sku = trim($sku);
    }
    public function getSku() {
        return $this->sku;
    }
    
    public function setName($name) {
        $this->name = trim($name);
    }
    public function getName() {
        return $this->name;
    }
    
    public function setPrice($price) {
        $this->price = trim($price);
    }
    public function getPrice() {
        return $this->price;
    }
    
    public function setSize($size) {
        $this->size = trim($size);
    }
    public function getSize() {
        return $this->size;
    }
    
    public function setHeight($height) {
        $this->height = trim($height);
    }
    public function getHeight() {
        return $this->height;
    }
    
    public function setWidth($width) {
        $this->width = trim($width);
    }
    public function getWidth() {
        return $this->width;
    }
    
    public function setLength($length) {
        $this->length = trim($length);
    }
    public function getLength() {
        return $this->length;
    }
    
    public function setWeight($weight) {
        $this->weight = trim($weight);
    }
    public function getWeight() {
        return $this->weight;
    }

    public function connect() {
        $link = mysqli_connect($this->server, $this->login, $this->password, $this->database);

        if ($link->connect_error) {
	        die("Connection failed: " . $link->connect_error);
        }
        return $link;
    }

    public function writeQuery($link) {
        $sql = "INSERT INTO products 
        (sku, name, price, size, height, width, length, weight)
        VALUES ('$this->sku','$this->name','$this->price','$this->size','$this->height','$this->width','$this->length','$this->weight')";
        
    if(!($link->query($sql)))
        echo "Ошибка: " . $link->error;
    else
        header ('Location: .');
    }

    public function setVars($row) {
        $this->sku  = trim($row['sku']);
        $this->name = trim($row['name']);
        $this->price = trim($row['price']);
        $this->size = trim($row['size']);
        $this->height = trim($row['height']);
        $this->width = trim($row['width']);
        $this->length = trim($row['length']);
        $this->weight = trim($row['weight']);
    }

    public function deleteRow($link, $key) {
        $sql = "DELETE FROM `products` WHERE sku = '" . $key . "'";
        if(!($link->query($sql)))
            echo "Ошибка: " . $link->error;
        else
            header ('Location: .');
    }
}