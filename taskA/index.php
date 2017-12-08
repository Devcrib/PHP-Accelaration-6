<?php
function fruits($fruit)
{
    echo $fruit . "\n";
    return function ($fruit2) {
        if ($fruit2)  echo $fruit2 . "\n";
        return function ($fruit3) {
            if ($fruit3) echo $fruit3 . "\n";
            return function ($fruit4) {
                if ($fruit4) echo $fruit4 . "\n";
            };
        };
    };
}

// Test 1
$f = fruits("Apple")('Apricot')('Avocado')('Banana');
print_r($f);
