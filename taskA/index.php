<?php

/**
 * @param $input
 * @return mixed
 */
    $fruit = function ($input) {
        return $input;
    };

/**
 * @return Closure|string
 */
function createFunction() {
        return function() {
          return 'The fruits';
        };
    }

    $fun2 = createFunction();
     echo $fun2('mango');
