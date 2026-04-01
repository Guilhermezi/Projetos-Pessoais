/*
Vamos explorar algumas variações legais da condição do loop for

Contando para Trás:

for (int i = 10; i >= 0; i--) {
    std::cout << i << " ";
}
// Output: 10 9 8 7 6 5 4 3 2 1 0
Observe como começamos com um número maior (i = 10), usamos i >= 0 como nossa condição e usamos i-- para diminuir o contador

Quer pular números? Basta alterar o valor de incremento/decremento:

// Counting up by 2s
for (int i = 0; i <= 10; i+=2) {
    std::cout << i << " ";
}
// Output: 0 2 4 6 8 10

// Counting down by 2s
for (int i = 10; i >= 0; i-=2) {
    std::cout << i << " ";
}
// Output: 10 8 6 4 2 0
Você pode até usar múltiplas variáveis no controle do seu loop:

for (int i = 0, j = 10; i <= 10; i++, j--) {
    std::cout << "i = " << i << " "  << "j = " << j << " ";
    
}
// Output: i = 0 j = 10
//         i = 1 j = 9
//         i = 2 j = 8
// And so on...
Neste exemplo, temos duas variáveis de contador, i e j, inicializadas para 0 e 10, respectivamente. Em cada iteração, i é incrementado por 1 e j é decrementado por 1. O loop continua enquanto i for menor ou igual a 10.
*/