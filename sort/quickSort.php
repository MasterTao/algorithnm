<?php
/**
 * Created by PhpStorm.
 * User: 徐涛
 * Date: 2017/12/4
 * Time: 22:26
 */

$arr = [5, 6, 7, 1, 2, 3, 4, 8, 9, 15, 11, 13, 14];

quickSort($arr, 0, 12);
print_r($arr);


function quickSort(&$arr, $p, $q)
{
    if ($p >= $q) {
        return;
    }
    $r = $q;
    $tmp = $arr[$r];

    $i = $p - 1;
    for ($j = $p; $j < $q; $j++) {

        if ($arr[$j] <= $tmp) {
            $i++;
            list($arr[$i], $arr[$j]) = [$arr[$j], $arr[$i]];
        }
    }
    list($arr[$i + 1], $arr[$q]) = [$arr[$q], $arr[$i + 1]];

    quickSort($arr, $p, $i);
    quickSort($arr, $i + 2, $q);
}
