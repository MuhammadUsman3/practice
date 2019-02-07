<?php
function columns($arr) {
    if (count($arr) == 0) {
        return array();
    } else if (count($arr) == 1) {
        return array_chunk($arr[0], 1);
    }

    array_unshift($arr, NULL);
    $transpose = call_user_func_array('array_map', $arr);
    return array_map('array_filter', $transpose);
}

function beadsort($arr) {
    foreach ($arr as $e) {
        $poles [] = array_fill(0, $e, 1);
    }
    return array_map('count', columns(columns($poles)));
}

echo "<pre>";
print_r(beadsort(array(5, 2, 3, 8, 1, 3, 4, 6, 5, 8, 1)));
