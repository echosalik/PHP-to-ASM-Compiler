*********************************************
This is a compiler for DragonLive Language
Created By: Salik Sadruddin Merani | BB-25632
For Course: Compiler Contruction - CS 303
Institute Of Business and Technology | Biztek
*********************************************
> Usage:
    *   compile -h or compile --help
    *   compile -i <file> e.g: compile -i helloworld.dl
    *   output is an ASM file with timestamp

> Syntax:
    *   variables are initialized as the following: int: a, b, c"
    *   Only int is supported now
    *   A statement shoud end with a `"`, even comments
    *   Comments are only single line, starting from `'`
    *   variables are required to be initialized
    *   only +, -, /, * operators are allowed
    *   = is used to assign variables
    *   floats and decimals are not allowed