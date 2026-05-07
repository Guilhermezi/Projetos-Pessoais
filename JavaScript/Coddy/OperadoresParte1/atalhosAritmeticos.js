/*
O JavaScript criou um atalho interessante para operações autoaritméticas.

Por exemplo, em vez de escrever:

let a = 5
a = a + 3 // a contém 8
Podemos simplificá-lo escrevendo +=:

let a = 5
a += 3 // a contém 8
O += está adicionando a a a si mesmo o valor 3

Esta operação é válida para todas as operações aritméticas:

Operador	Atalho
+	+=
-	-=
*	*=
/	/=
%	%=
challenge icon
Desafio

Iniciante
Você recebeu um código com a inicialização de count. (Não apague esta linha!)

Sua tarefa é adicionar as seguintes operações, nesta ordem:

Adicione 4 a count
Multiplique count por 2
Subtraia 1 de count
Use os atalhos aritméticos para fazer isso!
*/

let count = 0

// Adicione 4 a count
count += 4

// Multiplique count por 2
count *= 2

// Subtraia 1 de count
count -= 1

// Don't change the line below
console.log(`count = ${count}`) // O resultado será 7
