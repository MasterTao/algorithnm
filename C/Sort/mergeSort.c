#include <stdio.h>


void merge(int array[], int left, int middle, int right) {
    int length1 = middle - left + 1;
    int length2 = right - middle;

    int array1[length1];
    int array2[length2];
    for (int i = 0; i < length1; i++) {
        array1[i] = array[left + i];
    }

    for (int i = 0; i < length2; i++) {
        array2[i] = array[middle + 1 + i];
    }

    int index1 = 0, index2 = 0;
    for (int i = left; i <= right && index1 < length1 && index2 < length2; i++) {
        if (array1[index1] > array2[index2]) {
            array[i] = array2[index2];
            index2++;
        } else {
            array[i] = array1[index1];
            index1++;
        }
    }

    if (index1 >= length1) {
        while (index2 < length2) {
            array[left + length1 + index2] = array2[index2];
            index2++;
        }
    }

    if (index2 >= length2) {
        while (index1 < length1) {
            array[left + length2 + index1] = array1[index1];
            index1++;
        }
    }

}


void mergeSort(int array[], int left, int right) {
    if (left < right) {
        int middle = (left + right) / 2;
        mergeSort(array, left, middle);
        mergeSort(array, middle + 1, right);
        merge(array, left, middle, right);
    }
}