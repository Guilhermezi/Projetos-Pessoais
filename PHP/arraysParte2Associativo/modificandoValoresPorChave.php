Assim como você aprendeu a modificar elementos de array indexado por sua posição, você pode atualizar valores em arrays associativos usando suas chaves. A sintaxe é idêntica — atribuir um novo valor a uma chave existente.

<?php
$person = [
    "name" => "Alice",
    "age" => 25,
    "city" => "Paris"
];

$person["age"] = 26;
$person["city"] = "London";

echo $person["age"];  // 26
echo $person["city"]; // London
?>
Quando você atribui um valor a uma chave que já existe, o PHP simplesmente substitui o valor antigo pelo novo. A chave em si permanece inalterada — apenas seu valor associado é atualizado.

Isso é útil quando os dados precisam mudar ao longo do tempo. Por exemplo, atualizando o status de um usuário, alterando o preço de um produto ou corrigindo informações que foram inseridas incorretamente. A chave atua como um ponto de referência estável enquanto o valor pode ser modificado conforme necessário.


Desafio

Fácil
Leia uma linha de entrada contendo um objeto JSON representando as informações de um produto (por exemplo, {"name": "Laptop", "price": 999, "stock": 50}).

Em seguida, leia mais três entradas:

Uma string key1 - a primeira chave a ser atualizada
Uma string value1 - o novo valor para key1
Uma string key2 - a segunda chave a ser atualizada
Uma string value2 - o novo valor para key2
Crie um array associativo a partir da entrada JSON, em seguida:

Atualize o valor associado a key1 para value1
Atualize o valor associado a key2 para value2
Imprima o valor atualizado em key1
Imprima o valor atualizado em key2
Imprima cada resultado em uma linha separada.

Exemplo:

Se as entradas forem {"name": "Laptop", "price": 999, "stock": 50}, price, 1099, stock e 45, a saída deve ser:

1099
45
Se as entradas forem {"city": "Paris", "country": "France", "population": 2000000}, city, London, country e UK, a saída deve ser:

London
UK
<?php
// Lê a primeira linha da entrada (o JSON) e limpa espaços extras
$jsonInput = trim(fgets(STDIN));

// Lê as chaves e os novos valores que serão usados na atualização
$key1 = trim(fgets(STDIN));
$value1 = trim(fgets(STDIN));
$key2 = trim(fgets(STDIN));
$value2 = trim(fgets(STDIN));

// json_decode: transforma a string JSON em dados do PHP
// O segundo parâmetro 'true' transforma o JSON em um Array Associativo
$product = json_decode($jsonInput, true);

// 1. Atualiza o valor da primeira chave fornecida
// O PHP localiza a chave contida em $key1 e substitui o valor antigo pelo conteúdo de $value1
$product[$key1] = $value1;

// 2. Atualiza o valor da segunda chave fornecida
$product[$key2] = $value2;

// 3. Imprime os valores atualizados
// PHP_EOL é uma constante que pula uma linha no terminal (End Of Line)
echo $product[$key1] . PHP_EOL;
echo $product[$key2] . PHP_EOL;

?>