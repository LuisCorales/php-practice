<?php

    # Imperative
    $car1 = (object)["brand" => "Toyota", "model" => "Corolla"];
    $car2 = (object)["brand" => "Hyundai", "model" => "Accent"];

    function show($car)
    {
        echo "<p>Hi! I'm a $car->brand, model $car->model.</p>";
    }

    show($car1);
    show($car2);

?>