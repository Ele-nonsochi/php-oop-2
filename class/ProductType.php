<?php

require_once "./class/Product.php";

class ProductType extends Product{

    protected $group;
    protected $category;

    function __construct($_product){
        parent::__construct($_product);
        $this->setGroup($_product["type"]);
        $this->setCategory($_product["title"]);
    }

    public function setGroup($_type){
        if ($_type === "clothes") {
            $this->group = "Sale";
        }
    }

    public function setCategory($_title){
        if ($_title === "home") {
            $this->group = "Most Popular";
        }
        else if($_title === "Christmas Party") {
            $this->group = "clothes";
        }
    }

    public function getGroup(){
        return $this->group;
    }

    public function getCategory(){
        return $this->category;
    }
}

?>