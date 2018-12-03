#include <stdio.h>
#include <stdlib.h>
#include "util.h"
#include "sort.h"

#define BUF_SIZE 10

int main() {
    int array[BUF_SIZE] = {12, 85, 25, 16, 34, 23, 49, 95, 17, 61};
    int length = BUF_SIZE;
    displayArr(array, length);
    //insertSort(array, length);
    //selectSort(array, length);
    mergeSort(array, 0, length - 1);
    displayArr(array, length);
    return EXIT_SUCCESS;
}
