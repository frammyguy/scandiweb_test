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
        $this->sku = $sku;
    }
    public function getSku() {
        return $this->sku;
    }
    
    public function setName($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    
    public function setPrice($price) {
        $this->price = $price;
    }
    public function getPrice() {
        return $this->price;
    }
    
    public function setSize($size) {
        $this->size = $size;
    }
    public function getSize() {
        return $this->size;
    }
    
    public function setHeight($height) {
        $this->height = $height;
    }
    public function getHeight() {
        return $this->height;
    }
    
    public function setWidth($width) {
        $this->width = $width;
    }
    public function getWidth() {
        return $this->width;
    }
    
    public function setLength($length) {
        $this->length = $length;
    }
    public function getLength() {
        return $this->length;
    }
    
    public function setWeight($weight) {
        $this->weight = $weight;
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
        $this->sku  = $row['sku'];
        $this->name = $row['name'];
        $this->price  = $row['price'];
        $this->size = $row['size'];
        $this->height = $row['height'];
        $this->width = $row['width'];
        $this->length = $row['length'];
        $this->weight = $row['weight'];
    }

    public function deleteRow($link, $key) {
        $sql = "DELETE FROM `products` WHERE sku = '" . $key . "'";
        if(!($link->query($sql)))
            echo "Ошибка: " . $link->error;
        else
            header ('Location: .');
    }
}