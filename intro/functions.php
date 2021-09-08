<?php

    # Without parameters
    function sayHi()
    {
        echo "Hi!<br>";
    }

    # With parameters
    function saySomething($text)
    {
        echo "$text<br>";
    }

    # With return
    function response()
    {
        return "See you";
    }

    sayHi();
    saySomething("Bye!");
    echo response();

?>