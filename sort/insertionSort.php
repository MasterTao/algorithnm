<?php
/**
 * Created by PhpStorm.
 * User: 徐涛
 * Date: 2017/7/19
 * Time: 23:01
 */


$arr = [5, 6, 7, 1, 2, 3, 4, 8, 9, 15, 11, 13, 14];

$length = count($arr);
for ($i=1; $i<$length; $i++) {
    $key = $arr[$i];
    for ($j=$i; $j>=1; $j--) {
        if ($key > $arr[$j - 1]) {
            $arr[$j] = $arr[$j - 1];
            $arr[$j - 1] = $key;
        } else {
            break;
        }
    }
}

print_r($arr);