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
}