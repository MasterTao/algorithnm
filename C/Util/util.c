#include <stdio.h>
#include "util.h"

/**
 * 打印数组
 * @param arr
 * @param length
 */
void displayArr(int arr[], int length)
{
    for (int i=0; i<length; i++) {
        printf("%d,", arr[i]);
    }
    printf("\n");
}

/**
 * 交换两个数
 * @param a
 * @param b
 */
void swap(int *a, int *b)
{
    int temp;
    temp = *a;
    *a = *b;
    *b = temp;
}