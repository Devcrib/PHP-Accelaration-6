<?php
    $call = function() {
    return 'Hello Devcrib';
    };

    //Function as a return type
    function callSuper() {
        return function() {
        return "Welcome to Planet Nest";
    };
    }

    $callRob = callSuper();

    //The function is set a parameter to display the above function
    function showMessage($call) {
        echo $call(). "\n\n";
    }