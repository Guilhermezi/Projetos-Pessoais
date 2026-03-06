Agora que você entende o que são arrays associativos, vamos aprender como recuperar valores deles. Assim como arrays indexados usam posições numéricas, arrays associativos usam chaves dentro de colchetes.

<?php
$person = [
    "name" => "Alice",
    "age" => 25,
    "city" => "Paris"
];

echo $person["name"]; // Alice
echo $person["age"];  // 25
?>
A sintaxe é $array["key"]—coloque a chave como uma string dentro dos colchetes, e o PHP retorna o valor associado. Isso é muito mais legível do que lembrar que o nome está no índice 0.

Você também pode armazenar o valor recuperado em uma variável para uso posterior:

<?php
$product = [
    "title" => "Laptop",
    "price" => 999
];

$itemName = $product["title"];
echo $itemName; // Laptop
?>
A chave deve corresponder exatamente—incluindo maiúsculas e minúsculas. Usar "Name" em vez de "name" causaria um erro, pois o PHP os trata como chaves diferentes.

Às vezes, os dados chegam como uma string JSON em vez de um literal de array PHP. JSON (JavaScript Object Notation) é um formato de texto comum para representar dados estruturados. Por exemplo:

$json = '{"title": "Dune", "author": "Frank Herbert", "year": 1965}';
A função integrada do PHP json_decode() converte uma string JSON em um valor PHP. Para obter um array associativo, passe true como o segundo argumento:

<?php
$json = '{"title": "Dune", "author": "Frank Herbert", "year": 1965}';

$book = json_decode($json, true);

echo $book["title"];  // Dune
echo $book["author"]; // Frank Herbert
echo $book["year"];   // 1965
?>
Após chamar json_decode($json, true), o resultado é um array associativo regular e você pode acessar seus valores exatamente da mesma maneira que qualquer outro array associativo—usando $array["key"].


Desafio

Fácil
Leia uma linha de entrada contendo um objeto JSON representando as informações de um livro (por exemplo, {"title": "The Great Gatsby", "author": "F. Scott Fitzgerald", "year": 1925}).

Em seguida, leia mais duas entradas:

Uma string key1 representando a primeira chave a ser acessada
Uma string key2 representando a segunda chave a ser acessada
Para converter a string JSON em um array associativo, use a função integrada json_decode() com true como o segundo argumento:
$array = json_decode($jsonString, true);
O segundo argumento true instrui o PHP a retornar um array associativo em vez de um objeto. Uma vez decodificado, você pode acessar os valores pela chave como em qualquer array associativo, por exemplo $array["title"].

Crie um array associativo a partir da entrada JSON, em seguida:

Acesse e imprima o valor associado a key1
Armazene o valor associado a key2 em uma variável chamada $info
Imprima o valor armazenado em $info
Imprima cada resultado em uma linha separada.

Exemplo:

Se as entradas forem {"title": "The Great Gatsby", "author": "F. Scott Fitzgerald", "year": 1925}, title e author, a saída deve ser:

The Great Gatsby
F. Scott Fitzgerald
Se as entradas forem {"name": "Laptop", "brand": "TechCo", "price": 999}, brand e price, a saída deve ser:

TechCo
999

<?php
// Read the JSON input
$jsonInput = trim(fgets(STDIN));

// Read the two keys
$key1 = trim(fgets(STDIN));
$key2 = trim(fgets(STDIN));

// 1. Create an associative array from the JSON input using json_decode
$data = json_decode($jsonInput, true);

// 2. Access and print the value associated with $key1
echo $data[$key1] . PHP_EOL;

// 3. Store the value associated with $key2 in a variable called $info
$info = $data[$key2];

// 4. Print the value stored in $info
echo $info . PHP_EOL;
?>
