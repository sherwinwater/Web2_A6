<?php
class Fruit {
    //put your code here
    public $name;
    public $price;
    public $quantity;
    public $img;
    
    function __construct($name,$price,$quantity,$img) {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->img = $img;
        
    }
    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }
    
    function getPrice() {
        return $this->price;
    }

    function getQuantity() {
        return $this->quantity;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    function getImg() {
        return $this->img;
    }

    function setImg($img) {
        $this->img = $img;
    }

}
