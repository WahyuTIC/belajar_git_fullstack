<?php

class Product 
{
    private $name, $stock, $categories;
    
    public function __construct($name="Apple", $stock=30, $categories=[])
    {
        $this->name = $name;
        $this->stock = $stock;
        $this->categories = $categories;
    }

    public function set_name($name)
    {
        $this->name = $name;
    }

    public function set_stock($stock)
    {
        $this->stock = $stock;
    }

    public function set_categories($categories) 
    {
        $this->categories = $categories;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_stock()
    {
        return $this->stock;
    }

    public function get_categories()
    {
        return $this->categories;
    }

    public function print()
    {
        echo "<p>Name \t: ".$this->name."</p>";
        echo "<p>Stock \t: ".$this->stock."</p>";
        echo "<p>Categories \t: </p>";
        foreach($this->categories as $cat){
            echo "<li>".$cat."</li>";
        }
    }

}