#include <stdio.h>

/**
 * 插入排序
 * @param array
 * @param length
 */
void insertSort(int array[], int length) {
    for (int i = 1; i < length; i++) {
        int value = array[i];
        int j = i - 1;
        while (j >= 0 && array[j] > value) {
            array[j + 1] = array[j];
            array[j] = value;
            j--;
        }
    }
}
