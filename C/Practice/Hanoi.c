//
// Created by Administrator on 2018/12/4.
//

#include <stdio.h>
#include <stdlib.h>

void hanoi(int n, char a, char b, char c) {
    if (n > 1) {
        hanoi(n - 1, a, c, b);
        printf("move %c->%c\n", a, c);
        hanoi(n - 1, b, a, c);
    } else {
        printf("move %c->%c\n", a, c);
    }
}

int main() {
    hanoi(10, 'a', 'b', 'c');
    return EXIT_SUCCESS;
}
