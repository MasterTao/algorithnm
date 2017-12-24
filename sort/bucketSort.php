<?php
/**
 * Created by PhpStorm.
 * User: 徐涛
 * Date: 2017/12/4
 * Time: 22:26
 */

$arr = [5, 6, 7, 1, 2, 3, 4, 8, 9, 15, 11, 13, 14];

$mutong = bucketSort(15, $arr);
print_r($mutong);

function bucketSort($max, $array)
{
    //填充木桶
    $arr = array_fill(0, $max+1, 0);

    //开始标示木桶
    for ($i=0; $i<=count($array)-1; $i++) {
        $arr[$array[$i]]++;
    }

    $mutong = [];
    //开始从木桶中拿出数据
    for ($i=0; $i<=$max; $i++) {
        for ($j=1; $j<=$arr[$i]; $j++) {
            $mutong[] = $i;
        }
    }
    return $mutong;
}


