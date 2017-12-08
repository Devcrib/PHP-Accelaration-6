<?php

//filtered function
    function getDigits(array $nums, $num)
    {
        $filtered = array_filter($nums, function ($u) use ($num) {
        return $u != $num;
        });

        return array_map(function ($u)
        {
            return $u['num'];
            },
         $filtered);
    }

    $new = getDigits(['1,2,3,4,5,6'], '3');
    print_r($new);

    //creating a map function

