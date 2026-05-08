/*
Operadores de comparação são usados para comparar dois operandos.

Às vezes, precisamos verificar se um operando é maior/menor/... do que outro operando. A tabela a seguir mostra os possíveis operadores para comparação:

Operador	Significado	Exemplo
==	Igual	1 == 2 retorna false
!=	Diferente	1 != 2 retorna true
>	Maior que	1 > 2 retorna false
<	Menor que	1 < 2 retorna true
>=	Maior ou igual	1 >= 2 retorna false
<=	Menor ou igual	1 <= 2 retorna true

O operador de comparação retorna true se a comparação estiver correta ou false caso contrário.

Por exemplo:

let var1 = 13
let var2 = 12
let var3 = var1 != var2
var3 conterá true porque var1 e var2 não são iguais

Lembre-se do tipo boolean,  var3 é um booleano.

challenge icon
Desafio

Iniciante
Escreva um script que inicialize 2 variáveis n1 e n2 com os valores 8 e 9 (respectivamente).

Depois disso, inicialize outra variável n3 que armazenará se n1 é maior que n2.



*/
let n1 = 8
let n2 = 9
let n3 = n1 > n2

// Don't change the line below
console.log(`n1 = ${n1}, n2 = ${n2}, n3 = ${n3}`)
