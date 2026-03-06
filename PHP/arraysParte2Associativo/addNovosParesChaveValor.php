Você aprendeu como modificar valores existentes em um array associativo. Mas o que acontece quando você atribui um valor a uma chave que ainda não existe? O PHP cria automaticamente para você.

<?php
$person = [
    "name" => "Alice",
    "age" => 25
];

$person["city"] = "Paris";
$person["job"] = "Developer";

echo $person["city"]; // Paris
echo $person["job"];  // Developer
?>
A sintaxe é a mesma da modificação—$array["key"] = value—mas quando a chave não existe, o PHP adiciona um novo par chave-valor ao array em vez de atualizar um existente.

Isso é especialmente útil quando se constrói um array associativo gradualmente:

<?php
$settings = [];

$settings["theme"] = "dark";
$settings["language"] = "en";
$settings["notifications"] = true;

echo $settings["theme"]; // dark
?>
Começar com um array vazio e adicionar pares conforme necessário é um padrão comum ao coletar dados ao longo do tempo ou quando você não conhece todas as chaves antecipadamente.


Desafio

Fácil
Comece com um array associativo vazio chamado $profile.

Leia as seguintes entradas:

Uma string key1 - a primeira chave a adicionar
Uma string value1 - o valor para key1
Uma string key2 - a segunda chave a adicionar
Uma string value2 - o valor para key2
Uma string key3 - a terceira chave a adicionar
Uma string value3 - o valor para key3
Adicione cada par chave-valor ao array $profile, então imprima:

O valor associado a key1
O valor associado a key2
O valor associado a key3
Imprima cada resultado em uma linha separada.

Exemplo:

Se as entradas forem username, alice123, email, alice@example.com, status e active, a saída deve ser:

alice123
alice@example.com
active
Se as entradas forem brand, Nike, size, 42, color e black, a saída deve ser:

Nike
42
black
<?php
// Lê as entradas do terminal e remove espaços em branco extras
$key1 = trim(fgets(STDIN));
$value1 = trim(fgets(STDIN));
$key2 = trim(fgets(STDIN));
$value2 = trim(fgets(STDIN));
$key3 = trim(fgets(STDIN));
$value3 = trim(fgets(STDIN));

// Inicializa um array associativo vazio para começar a guardar os dados
$profile = [];

// 1. Adiciona o primeiro par: o PHP percebe que a chave não existe e a cria
$profile[$key1] = $value1;

// 2. Adiciona o segundo par chave-valor ao array $profile
$profile[$key2] = $value2;

// 3. Adiciona o terceiro par chave-valor
$profile[$key3] = $value3;

// Imprime os valores acessando o array através das chaves que acabamos de criar
// Usei "\n" para pular linha conforme o exemplo do desafio
echo $profile[$key1] . "\n";
echo $profile[$key2] . "\n";
echo $profile[$key3] . "\n";
?>
