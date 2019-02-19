# cadastro-vendas

Para conseguir rodar o código acima, baixe o XAMPP.

Após realizar todo processo de instalação dele, acesso o local de instalação dele e procure pela pasta htdocs.

Crie uma pasta de backup e jogue todos os arquivos dentro.

Após feito isto, baixe o .zip deste repositório, extraia a pasta e coloque dentro da pasta htdocs.

Acesso o _localhost_ e depois o arquivo cadastro.php

Para conseguir salvar no banco de dados:
* basta criar uma tabela chamada db_nivelamento com as colunas id, produto, valor, cliente, total
* conferir o arquivo db.class.php se as credenciais estão ok (user, password, hostname)

E é isto, você conseguirá adicionar produtos no banco de dados.
