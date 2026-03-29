<!-- Na lição anterior, você aprendeu como o foreach dá acesso a cada valor em um array. Mas e se você também precisar da chave? Isso é especialmente útil ao trabalhar com arrays associativos.

O loop foreach tem uma sintaxe estendida que fornece tanto a chave quanto o valor em cada iteração:

<?php
$person = [
    "name" => "Alice",
    "age" => 25,
    "city" => "Paris"
];

foreach ($person as $key => $value) {
    echo "$key: $value\n";
}
?>
Isso produz:

name: Alice
age: 25
city: Paris
A sintaxe foreach ($array as $key => $value) atribui a chave atual a $key e o valor correspondente a $value. Você pode nomear essas variáveis como quiser — apenas mantenha-as descritivas.

Isso também funciona com arrays indexados, onde as chaves são os índices numéricos:

<?php
$colors = ["red", "green", "blue"];

foreach ($colors as $index => $color) {
    echo "$index: $color\n";
}
?>
Isso produz:

0: red
1: green
2: blue
Ter acesso tanto às chaves quanto aos valores facilita a exibição de dados rotulados ou a realização de operações que dependem da chave.


Desafio

Fácil
Leia uma única linha de entrada contendo um objeto JSON representando um produto com chaves e valores (por exemplo, {"name":"Laptop","price":"999","stock":"25"}).

Use um loop foreach com a sintaxe chave-valor para iterar pelos dados do produto. Imprima cada chave e seu valor correspondente no formato:

[key] => [value]
Imprima cada par chave-valor em uma linha separada.

Exemplo 1:

Se a entrada for {"name":"Laptop","price":"999","stock":"25"}, a saída deve ser:

name => Laptop
price => 999
stock => 25
Exemplo 2:

Se a entrada for {"title":"PHP Basics","author":"John","pages":"350"}, a saída deve ser:

title => PHP Basics
author => John
pages => 350
Exemplo 3:

Se a entrada for {"city":"Paris","country":"France"}, a saída deve ser:

city => Paris
country => France

 -->

 <?php
// Read the JSON input
$input = trim(fgets(STDIN));

// Convert JSON to associative array
$product = (array)json_decode($input, true);

// TODO: Write your code below
// Use a foreach loop with key-value syntax to iterate through the product data
// Print each key and value in the format: [key] => [value]
foreach ($product as $key => $value) {
    echo "$key => $value\n";
}
?>