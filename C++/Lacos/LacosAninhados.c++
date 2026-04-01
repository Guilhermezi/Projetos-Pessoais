/*
Um loop aninhado é simplesmente um loop dentro de outro loop. O loop interno completará todas as suas iterações para cada iteração única do loop externo.

Uma boa analogia para isso é um relógio: para cada hora (loop externo), o ponteiro dos minutos (loop interno) deve completar seu ciclo completo de 60 minutos.

Exemplo de um loop aninhado:

for (int x = 0; x < 2; x++) {
    for (int y = 0; y < 2; y++) {
        std::cout << x << " " << y << std::endl;
    }
}
// This will output:
// 0 0
// 0 1
// 1 0
// 1 1
O loop externo (x) executa duas vezes, e para cada uma dessas vezes, o loop interno (y) executa duas vezes.

￼
Desafio

Iniciante
Escreva um programa que encontre todos os pares de números que somam n usando números de 1 a n - 1.
O programa deve mostrar todas as combinações possíveis, incluindo pares duplicados em ordem reversa. Por exemplo, tanto "1 5" quanto "5 1" devem ser mostrados, pois são considerados arranjos diferentes do mesmo par. Números também podem ser pareados consigo mesmos se sua soma igualar n.

Por exemplo, se n = 6, a saída deve ser:

1 5
2 4
3 3
4 2
5 1
Porque:

1 + 5 = 6
2 + 4 = 6
3 + 3 = 6
4 + 2 = 6
5 + 1 = 6
*/
#include <iostream>

int main() {
    int n;
    std::cin >> n;

    // Loop externo: primeiro número do par
    for (int i = 1; i < n; i++) {
        // Loop interno: segundo número do par
        for (int j = 1; j < n; j++) {
            // Verifica se a soma dos dois números é igual a n
            if (i + j == n) {
                std::cout << i << " " << j << std::endl;
            }
        }
    }
    
    return 0;
}
