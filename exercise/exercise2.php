<?php
class Laptop{
    public $manifacturer;
    public $model;
    public $price;

    public function __construct($manifacturer, $model, $price){
        $this->manifacturer = $manifacturer;
        $this->model = $model;
        $this->price = $price;
    }

    public function info(){
        return 
        "<ul>
            <li>Manifacturer: " . $this->manifacturer . "</li>
            <li>Model: " . $this->model . "</li>
            <li>Price: " . $this->price . "</li>
        </ul>";
    }
}

$surface_pro = new Laptop("Microsoft", "Surface Pro", "2000");
echo $surface_pro->info();

$surface_book = new Laptop("Microsoft", "Surface Book", "4000");
echo $surface_book->info();