/*
Desafio

Fácil
Crie uma função arrow chamada sumOfEvens que:

Recebe um parâmetro: n (um inteiro positivo).
Calcula a soma de todos os números pares de 1 até n (inclusivo).
Retorna o resultado.
*/
const sumOfEvens = (n) => {
    let sum = 0;
    for (let i = 1; i <= n; i++) {
        if (i % 2 === 0) {
            sum += i;
        }
    }
    return sum;
}