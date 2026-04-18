<!-- 
Às vezes, você quer que um parâmetro de função tenha um valor de fallback quando nenhum argumento for fornecido. Valores de parâmetro padrão permitem que você defina o que um parâmetro deve ser se o chamador não o especificar.

Para definir um valor padrão, atribua-o diretamente na declaração da função usando o = operador:

<?php
function greet($name = "Guest") {
    echo "Hello, $name!\n";
}

greet("Alice");
greet();
?>
Isso produz:

Hello, Alice!
Hello, Guest!
Quando você chama greet("Alice"), o argumento sobrescreve o padrão. Quando você chama greet() sem argumento, o PHP usa "Guest" em vez disso.

Você pode misturar parâmetros obrigatórios e opcionais, mas os parâmetros com valores padrão devem vir após os obrigatórios:

<?php
function createUser($name, $role = "member") {
    return "$name is a $role";
}

echo createUser("Alice") . "\n";
echo createUser("Bob", "admin");
?>
Isso produz a saída:

Alice is a member
Bob is a admin
O primeiro parâmetro $name é obrigatório, enquanto $role tem o valor padrão "member" se não for fornecido. Esse padrão torna suas funções mais flexíveis sem exigir que os chamadores forneçam sempre todos os argumentos.


Desafio

Fácil
Leia duas linhas de entrada:

Um nome de produto (ex.: Laptop)
Uma quantidade (ex.: 5) — esta entrada pode estar vazia
Crie uma função chamada formatOrder que aceita dois parâmetros: $product (obrigatório) e $quantity (opcional, padrão para 1). A função deve retornar uma string no seguinte formato:

Order: [quantity]x [product]
Se a entrada de quantidade estiver vazia, chame a função apenas com o nome do produto (usando a quantidade padrão). Caso contrário, chame com ambos os valores.

Imprima o resultado retornado.

Exemplo 1:

Se as entradas forem Laptop e 5, a saída deve ser:

Order: 5x Laptop
Exemplo 2:

Se as entradas forem Keyboard e uma linha vazia, a saída deve ser:

Order: 1x Keyboard
Exemplo 3:

Se as entradas forem Monitor e 3, a saída deve ser:

Order: 3x Monitor 
-->

<?php
// Read input
$product = trim(fgets(STDIN));
$quantity = trim(fgets(STDIN));

// TODO: Create the formatOrder function with $product (required) and $quantity (optional, defaults to 1)
// The function should return a string in the format: "Order: [quantity]x [product]"
function formatOrder($product, $quantity = 1) {
    return "Order: {$quantity}x {$product}";
}

// TODO: Call the function appropriately based on whether quantity is empty or not
// If quantity is empty, call with only product (use default)
// Otherwise, call with both product and quantity
if (empty($quantity)) {
    $result = formatOrder($product);
} else {
    $result = formatOrder($product, $quantity);
}


// Print the result
echo $result;
?>