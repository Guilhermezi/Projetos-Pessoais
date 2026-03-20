<!-- Desafio

Fácil
Leia uma linha de entrada contendo um objeto JSON representando as informações de um contato (por exemplo, {"name": "Alice", "phone": "555-1234"}).

Em seguida, leia as seguintes entradas:

Uma string keyToCheck - uma chave para verificar se ela existe
Uma string keyToModify - uma chave existente para atualizar
Uma string newValue - o novo valor para keyToModify
Uma string newKey - uma nova chave para adicionar
Uma string newKeyValue - o valor para newKey
Crie um array associativo a partir da entrada JSON, em seguida, execute as seguintes operações:

Verifique se keyToCheck existe. Imprima Found se existir, caso contrário, imprima Not found.
Modifique o valor em keyToModify para newValue.
Adicione um novo par chave-valor usando newKey e newKeyValue.
Imprima o valor atualizado em keyToModify.
Imprima o valor em newKey.
Imprima cada resultado em uma linha separada.

Exemplo:

Se as entradas forem {"name": "Alice", "phone": "555-1234"}, email, name, Bob, city e Paris, a saída deve ser:

Not found
Bob
Paris
Se as entradas forem {"product": "Laptop", "price": 999}, price, product, Tablet, stock e 25, a saída deve ser:

Found
Tablet
25 -->
<?php
// Read the JSON input and convert to associative array
$jsonInput = trim(fgets(STDIN));
$contact = (array)json_decode($jsonInput, true);

// Read the other inputs
$keyToCheck = trim(fgets(STDIN));
$keyToModify = trim(fgets(STDIN));
$newValue = trim(fgets(STDIN));
$newKey = trim(fgets(STDIN));
$newKeyValue = trim(fgets(STDIN));

// TODO: Write your code below
// 1. Verifica se a chave existe e imprime o resultado
echo array_key_exists($keyToCheck, $contact) ? "Found\n" : "Not found\n";

// 2. Modifica o valor da chave existente
$contact[$keyToModify] = $newValue;

// 3. Adiciona o novo par chave-valor
$contact[$newKey] = $newKeyValue;

// 4. Imprime o valor atualizado da chave modificada
echo $contact[$keyToModify] . "\n";

// 5. Imprime o valor da nova chave adicionada
echo $contact[$newKey] . "\n";
?>