/*Desafio

Fácil
Escreva uma função chamada sigma com um argumento que representa o número n.

A função deve retornar a soma de todos os números de 1 até n (inclusive).

Por exemplo, para sigma(5), a função retornará 15, porque 15 = 1 + 2 + 3 + 4 + 5.

Importante! Você não precisa chamar a função; nós fazemos isso para você nos bastidores em desafios do tipo função.


 */
function sigma(num) {
    let sum = 0;
    for (let i = 1; i <= num; i++) {
        sum += i;
    }
    return sum;
}