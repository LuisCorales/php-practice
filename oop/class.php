<?php

    # Classes
    class Car 
    {
        # Properties
        public $brand;
        public $model;

        # Methods
        public function show()
        {
            echo "<p>Hi! I'm a $this->brand, model $this->model.</p>";
        }
    }

    # Object
    $a = new Car();
    $a -> brand = "Toyota";
    $a -> model = "Corolla";
    $a -> show();

    $b = new Car();
    $b -> brand = "Hyundai";
    $b -> model = "Accent";
    $b -> show();

?>