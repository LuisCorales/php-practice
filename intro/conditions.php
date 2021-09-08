<?php

    # If statements
    $a = 5;
    $b = 10;

    if($a > $b)
    {
        echo "A is greater than B";
    }
    else if($b > $a) 
    {
        echo "B is greater than A";
    }
    else if($a == $b)
    {
        echo "A and B are equals";
    }
    else
    {
        echo "This is else";
    }
   
    echo "<br><br>";

    # Switch statements
    $day = "Saturday";

    switch ($day) 
    {
        case "Saturday":
            echo "It's saturday!";
            break;
        
        default:
            echo "It's another day but saturday!";
            break;
    }

    echo "<br><br>";

    # Loops

    # While
    $n1 = 0;
    
    while($n1 < 5)
    {
        echo $n1;

        $n1++;
    }

    echo "<br><br>";

    # Do while
    $n2 = 0;
    
    do 
    {
        echo $n2;

        $n2++;
    } 
    while ($n2 < 5);

    echo "<br><br>";

    # For
    for ($n3 = 0; $n3 < 5; $n3++) 
    { 
        echo $n3;
    }

    echo "<br><br>";

?>