-- Em bancos de dados, linhas são chamadas de registros, e colunas são chamadas de campos.

-- Tabelas têm um número fixo de campos (colunas), mas podem conter muitos registros (linhas). Cada campo tem um nome único, geralmente em minúsculas e no singular. Tabelas tipicamente incluem um campo id, que serve como um identificador único para cada registro, ajudando a distinguir entre entradas semelhantes.

-- No SQL, podemos usar o símbolo asterisco * como atalho para selecionar todas as colunas de uma tabela. Em vez de listar cada nome de coluna, simplesmente escreva:
SELECT * FROM table_name
-- Esta consulta busca todas as colunas na tabela especificada.

-- Desafio

-- Fácil
-- Tabelas e colunas disponíveis:

-- objects: id, pieces, shape
-- Escreva uma consulta SQL para recuperar todos os dados da tabela objects.
SELECT * FROM objects