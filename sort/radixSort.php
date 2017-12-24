<?php
/**
 * Created by PhpStorm.
 * User: 徐涛
 * Date: 2017/12/4
 * Time: 22:26
 */

$arr = [567, 123, 155, 425, 928, 764, 223, 544, 454];

$numbers = lsdRadixSort($arr, 3);
print_r($numbers);

function getNumInPos($number, $pos)
{
    $number = strrev($number);
    return $number[--$pos];
}

function lsdRadixSort(array $numbers=[], $tpos=1)
{
    $count = count($numbers);
    if ($count <= 1) {
        return $count;
    }

    $bucket = [];

    for ($i=0; $i<10; $i++) {
        $bucket[$i] = [0];
    }

    // 由低 $p=1 至高位 $p<=$d 循环排序
    for ($p=1; $p<=$tpos; $p++) {

        // 将对应数据按当前位的数值放入桶里
        for ($i=0; $i<$count; $i++) {
            $n = getNumInPos($numbers[$i], $p);
            $index = ++$bucket[$n][0];
            $bucket[$n][$index] = $numbers[$i];
        }

        // 收集桶里的数据
        for ($i=0, $j=0; $i<10; $i++) {
            for ($num=1; $num<=$bucket[$i][0]; $num++) {
                $numbers[$j++] = $bucket[$i][$num];
            }
            $bucket[$i][0] = 0;
        }
    }
    return $numbers;
}



