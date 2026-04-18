/*
Operadores de incremento (++) e decremento (--) podem ser usados de duas maneiras:

Pré-incremento/decremento (++x ou --x):

O operador vem ANTES da variável
O valor muda IMEDIATAMENTE
O novo valor é usado na expressão

int x = 5;
int y = ++x;
// x is increased to 6 first, then y becomes 6
Pós-incremento/decremento (x++ ou x--):

O operador vem DEPOIS da variável
O valor original é usado primeiro
O valor muda DEPOIS da expressão

int x = 5;
int y = x++;
// y becomes 5 first, then x increases to 6
Outro exemplo

pós-incremento:

int score = 5;

int res1 = score++;
// res1 is 5
// score is 6
pré-incremento:

int score = 5;

int result2 = ++score;
// result2 is 6
// score is 6
*/
