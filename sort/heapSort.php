<?php
/**
 * Created by PhpStorm.
 * User: 徐涛
 * Date: 2017/11/26
 * Time: 12:29
 */

$arr = [5, 6, 7, 1, 2, 3, 4, 8, 9, 15, 11, 13, 14];

maxHeap($arr);

function maxHeap(&$arr)
{
    while (count($arr) > 0) {
        buildMaxHeap($arr);
        $a = array_shift($arr);
        echo $a . '<br />';
    }
}

function minHeap()
{

}


function buildMaxHeap(&$arr)
{
    $length = count($arr);

    for ($i = intval($length/2) - 1; $i>=0; $i--) {
        maxHeapify($arr, $i);
    }
    print_r($arr);
}


function maxHeapify(&$arr, $index)
{
    // 从$index开始建堆，$index是数组的下标
    $leftChildren = 2 * $index + 1;
    $rightChildren = 2 * ($index + 1);

    if (isset($arr[$leftChildren])) {
        if (isset($arr[$rightChildren])) {
            if ($arr[$index] < $arr[$leftChildren]) {
                if ($arr[$leftChildren] < $arr[$rightChildren]) {
                    // 和右孩子交换
                    list($arr[$index], $arr[$rightChildren]) = [$arr[$rightChildren], $arr[$index]];
                    maxHeapify($arr, $rightChildren);
                } else {
                    //和左孩子交换
                    list($arr[$index], $arr[$leftChildren]) = [$arr[$leftChildren], $arr[$index]];
                    maxHeapify($arr, $leftChildren);
                }
            } elseif ($arr[$index] < $arr[$rightChildren]) {
                // 和右孩子交换
                list($arr[$index], $arr[$rightChildren]) = [$arr[$rightChildren], $arr[$index]];
                maxHeapify($arr, $rightChildren);
            } else {
                return;
            }
        } else {
            // 和左孩子比较
            if ($arr[$leftChildren] > $arr[$index]) {
                //和左孩子交换
                list($arr[$index], $arr[$leftChildren]) = [$arr[$leftChildren], $arr[$index]];
                maxHeapify($arr, $leftChildren);
            } else {
                return;
            }
        }
    } else {
        return;
    }
}