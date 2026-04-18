<!-- 


Variáveis criadas dentro de uma função são completamente separadas de variáveis fora dela. Esse conceito é chamado de escopo de variável, e compreendê-lo previne bugs confusos em seu código.

Uma variável definida dentro de uma função só existe dentro dessa função. Ela é chamada de variável local:

<?php
function sayHi() {
    $message = "Hello!";
    echo $message;
}

sayHi();
echo $message; // Erro: $message não existe aqui
?>
A variável $message é criada dentro de sayHi() e desaparece quando a função termina. Tentar acessá-la fora causa um erro.

Da mesma forma, variáveis definidas fora de uma função não estão automaticamente disponíveis dentro dela:

<?php
$name = "Alice";

function greet() {
    echo $name; // Error: $name is not defined inside this function
}

greet();
?>
Mesmo que $name exista no código principal, a função não pode vê-lo. Para usar valores externos em uma função, passe-os como parâmetros—essa é a abordagem limpa e recomendada que você já aprendeu.

Essa separação é na verdade útil. Isso significa que as funções não alterarão acidentalmente variáveis em outras partes do seu programa, tornando seu código mais previsível e mais fácil de depurar.


Desafio

Fácil
Leia duas linhas de entrada:

O nome de uma pessoa (por exemplo, Alice)
Um valor de bônus como um número inteiro (por exemplo, 50)
Crie uma função chamada calculateBonus que aceita dois parâmetros: $name (string) e $bonus (int).

Dentro da função:

Crie uma variável local $baseSalary e defina-a como 1000
Calcule o pagamento total somando $baseSalary e $bonus
Retorne uma string no formato: [name] earns [total]
Chame a função com os valores de entrada e imprima o resultado retornado.

Exemplo 1:

Se as entradas forem Alice e 50, a saída deve ser:

Alice earns 1050
Exemplo 2:

Se as entradas forem Bob e 200, a saída deve ser:

Bob earns 1200
Exemplo 3:

Se as entradas forem Emma e 0, a saída deve ser:

Emma earns 1000
 -->
<?php
// Read input
$name = trim(fgets(STDIN));
$bonus = intval(fgets(STDIN));

// TODO: Create the calculateBonus function below
// - It should accept $name (string) and $bonus (int) as parameters
// - Create a local variable $baseSalary set to 1000
// - Calculate total pay and return "[name] earns [total]"
function calculateBonus(string $name, int $bonus): string {
    $baseSalary = 1000;
    $total = $baseSalary + $bonus;
    return "$name earns $total";
}


// Call the function and print the result
echo calculateBonus($name, $bonus);
?>