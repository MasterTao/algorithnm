cmake_minimum_required(VERSION 3.12)
project(C C)

include_directories(Util Sort)

set(CMAKE_C_STANDARD 99)
set(SORT_FILES Sort/main.c Util/util.c Sort/insertSort.c Sort/selectSort.c Sort/mergeSort.c)


add_executable(C main.c)

# sort
add_executable(testSort ${SORT_FILES})

