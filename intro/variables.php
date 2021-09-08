<?php
    echo "<h1>Test</h1>";
    
    # Numbers
    $number = 5;
    echo "This is a number: $number<br>";
    var_dump($number);
    echo "<br><br>";

    # Strings
    $word = "Hello";
    echo "This is a string: $word<br>";
    var_dump($word);
    echo "<br><br>";

    # Booleans
    $bool = true;
    echo "This is a boolean: $bool<br>";
    var_dump($bool);
    echo "<br><br>";

    # Array
    $colors = array("red","green","blue");
    echo "This is an array: $colors[0]<br>";
    var_dump($colors);
    echo "<br><br>";

    # Array with properties / Dictionary
    $food = array("breakfast"=>"toast", "lunch" => "rice");
    echo "This is an array with properties: $food[breakfast]<br>";
    var_dump($food);
    echo "<br><br>";

    # Object
    $fruits = (object)["first" => "apple", "second" => "pears"];
    echo "This is an object: $fruits->first<br>";
    var_dump($fruits);
    echo "<br><br>";
?>