#include <stdio.h>
#include "util.h"

/**
 * 选择排序
 * @param array
 * @param length
 */
void selectSort(int array[], int length) {
    for (int i = 0; i < length - 1; i++) {
        int k = i;
        int min = array[i];
        for (int j = i + 1; j < length; j++) {
            if (array[j] < min) {
                min = array[j];
                k = j;
            }
        }
        swap(&array[i], &array[k]);
    }
}