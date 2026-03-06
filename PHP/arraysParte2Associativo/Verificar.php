Ao trabalhar com arrays associativos, você frequentemente precisará verificar se uma chave específica existe antes de tentar acessar seu valor. Tentar acessar uma chave inexistente pode causar erros, então o PHP fornece a função array_key_exists() para verificar com segurança primeiro.

<?php
$person = [
    "name" => "Alice",
    "age" => 25
];

if (array_key_exists("name", $person)) {
    echo "Name exists!";
}

if (array_key_exists("city", $person)) {
    echo "City exists!";
} else {
    echo "City not found";
}
?>
A função recebe dois argumentos: a chave que você está procurando e o array para pesquisar. Ela retorna true se a chave existir, e false caso contrário. Isso a torna perfeita para uso em instruções condicionais.

Essa verificação é especialmente útil ao lidar com dados que podem estar incompletos — como entrada do usuário ou dados de fontes externas — onde você não pode garantir que todas as chaves esperadas estejam presentes.


Desafio

Fácil
Leia uma linha de entrada contendo um objeto JSON representando dados do usuário (ex.: {"username": "john_doe", "email": "john@example.com", "age": 28}).

Então leia mais duas entradas:

Uma string key1 - a primeira chave a verificar
Uma string key2 - a segunda chave a verificar
Crie um array associativo a partir da entrada JSON, então:

Verifique se key1 existe no array. Se existir, imprima o valor associado a ele. Caso contrário, imprima Key not found.
Verifique se key2 existe no array. Se existir, imprima o valor associado a ele. Caso contrário, imprima Key not found.
Imprima cada resultado em uma linha separada.

Exemplo:

Se as entradas forem {"username": "john_doe", "email": "john@example.com", "age": 28}, username e phone, a saída deve ser:

john_doe
Key not found
Se as entradas forem {"title": "Manager", "department": "Sales"}, salary e department, a saída deve ser:

Key not found
Sales

<?php
// Lê a entrada JSON e as chaves que serão verificadas
$jsonInput = trim(fgets(STDIN));
$key1 = trim(fgets(STDIN));
$key2 = trim(fgets(STDIN));

// Converte a string JSON para um array associativo PHP
$userData = (array)json_decode($jsonInput, true);

// TODO: Write your code below

// 1. Verifica se key1 existe no array usando a função array_key_exists
if (array_key_exists($key1, $userData)) {
    // Se a chave existe, imprime o valor associado a ela
    echo $userData[$key1] . PHP_EOL;
} else {
    // Caso a chave não seja encontrada no array
    echo "Key not found" . PHP_EOL;
}

// 2. Verifica se key2 existe no array de forma independente
if (array_key_exists($key2, $userData)) {
    // Se a chave existe, imprime o valor associado a ela
    echo $userData[$key2] . PHP_EOL;
} else {
    // Caso a chave não seja encontrada no array
    echo "Key not found" . PHP_EOL;
}
?>
