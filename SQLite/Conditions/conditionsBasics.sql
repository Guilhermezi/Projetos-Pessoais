-- Às vezes, gostaríamos de buscar registros que atendam a uma determinada condição.

-- Por exemplo

-- buscar todos os registros que têm o sobrenome "Aothly" 
-- buscar todos os registros cujo amount é maior que 5
-- buscar todos os registros com o país "Mexico"
-- Para adicionar condições, podemos usar a palavra-chave WHERE

-- Por exemplo, aqui está uma tabela sales:
coin	amount
AGK       13
GOL	      21
KLA	      15
AGK	      18

-- Para buscar todos os registros com a coin "AGK", escreveremos:
SELECT * FROM sales
WHERE coin = 'AGK'

-- Para buscar todos os registros com amount menor ou igual a 20, escreveremos:
SELECT * FROM sales
WHERE amount <= 20

-- Desafio

-- Fácil
-- Tabelas e colunas disponíveis:

-- events: event_id, people
-- Busque todos os event_ids onde people é menor que 14 pessoas
SELECT event_id FROM events
WHERE people < 14