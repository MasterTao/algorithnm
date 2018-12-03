cmake_minimum_required(VERSION 3.12)
project(C C)

set(CMAKE_C_STANDARD 99)

# sort
add_executable(insertSort Sort/insertSort.c)
add_executable(selectSort Sort/selectSort.c)
