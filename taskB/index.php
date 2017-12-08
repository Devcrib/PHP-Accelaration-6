<?php

    function getNumber(array $val, $num)
    {
        $filtered = array_filter($val, function ($u) use ($num) {
        return $u['id'] != $num;
        });

        return array_map(function ($u) { return $u['val']; }, $filtered);
    }

    $new = getNumber( ['1,2,3,4,5'],2);
    print_r($new);