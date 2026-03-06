Em arrays indexados, você acessa elementos usando posições numéricas: 0, 1, 2, e assim por diante. Mas e se você quiser acessar dados usando nomes significativos em vez disso? É aí que entram os arrays associativos.

Arrays associativos usam chaves (geralmente strings) em vez de índices numéricos. Cada chave é pareada com um valor, criando uma relação chave-valor que torna seus dados mais descritivos e fáceis de trabalhar.

<?php
$person = [
    "name" => "Alice",
    "age" => 25,
    "city" => "Paris"
];
?>
O símbolo => conecta cada chave ao seu valor. Aqui, "name" é uma chave que aponta para o valor "Alice". Em vez de lembrar que o nome está no índice 0, você pode usar a chave "name" diretamente—muito mais intuitivo!

Essa estrutura é perfeita para representar entidades do mundo real como usuários, produtos ou configurações, onde cada peça de dados tem um rótulo claro. Nas lições futuras, você aprenderá como acessar, modificar e adicionar a esses pares chave-valor.