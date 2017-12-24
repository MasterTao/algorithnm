<?php
/**
 * Created by PhpStorm.
 * User: 徐涛
 * Date: 2017/12/4
 * Time: 22:26
 */

$arr = [5, 6, 7, 1, 2, 3, 4, 8, 9, 15, 11, 13, 14];

countingSort($arr);

function countingSort($arr)
{
    $max = max($arr);
    $min = min($arr);

    $countArr = [];
    for ($i=$min; $i<=$max; $i++) {
        $countArr[$i] = 0;
    }

    foreach ($arr as $key => $value) {
        $countArr[$value] ++;
    }

    $sortedArr = [];
    foreach ($countArr as $key => $value) {
        for ($i=0; $i<$value; $i++) {
            $sortedArr[] = $key;
        }
    }
    print_r($sortedArr);
}
