<?php
/**
 * Created by PhpStorm.
 * User: 徐涛
 * Date: 2017/7/19
 * Time: 23:01
 */


$arr = [5, 6, 7, 1, 2, 3, 4, 8, 9, 15, 11, 13, 14];

$result = mergeSort($arr);
print_r($result);

function mergeSort($arr)
{
    $length = count($arr);

    if ($length == 1) {
        return $arr;
    }

    $middle = floor($length / 2);
    // 0, 1, 3
    // 0, 2, 4
    $leftArr = [];
    for ($i=0; $i<$middle; $i++) {
        $leftArr[] = $arr[$i];
    }

    $rightArr = [];
    for ($i=$middle; $i<$length; $i++) {
        $rightArr[] = $arr[$i];
    }

    $leftTmp = mergeSort($leftArr);
    $rightTmp = mergeSort($rightArr);

    return merge($leftTmp, $rightTmp);
}


function merge($leftArr, $rightArr)
{
    $leftLength = count($leftArr);
    $rightLength = count($rightArr);

    $i = $j = 0;

    $sortedArr = [];
    while ($i < $leftLength && $j < $rightLength) {
        if ($leftArr[$i] < $rightArr[$j]) {
            $sortedArr[] = $leftArr[$i];
            $i++;
        } else {
            $sortedArr[] = $rightArr[$j];
            $j++;
        }
    }

    while ($i < $leftLength) {
        $sortedArr[] = $leftArr[$i];
        $i++;
    }

    while ($j < $rightLength) {
        $sortedArr[] = $rightArr[$j];
        $j++;
    }

    return $sortedArr;
}