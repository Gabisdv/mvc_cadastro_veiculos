# CADASTRO DE VEÍCULOS

## DESCRIÇÃO

Esse sistema permite cadastrar veículos utilizando PHP, MySQL e MVC (Model, View e Controller), permitindo funções simples como cadastrar, visualizar, editar e excluir veículos, seguindo regras como:

* Todos os campos são obrigatórios.
* A placa não poderá ser duplicada.
* O chassis não poderá ser duplicado.
* A placa deverá ser gravada em letras maiúsculas.
* Não permitir salvar registros com dados inválidos.

## TECNOLOGIAS UTILIZADAS

* PHP
* HTML
* MySQL
* XAMPP
* MySQLi
* MVC

## AMBIENTE UTILIZADO

* XAMPP
* Apache
* MySQL
* Navegador

## APOIO

Utilizei o ChatGPT para me apoiar principalmente nos erros de instalação e configuração do MySQL e XAMPP, além de alguns erros de sintaxe (majoritariamente `;`).

O código em si foi feito por mim, baseado em um MVC que já havia desenvolvido durante o Curso de ADS, portanto precisei principalmente adaptá-lo para as necessidades desse projeto.

## EXECUÇÃO

* Primeiro precisei reconfigurar meu banco de dados devido às atualizações.
* Com o ambiente (MySQL) configurado, fiz sem auxílio o banco de dados completo.
* Em seguida, copiei a pasta do MVC para dentro de `xampp -> htdocs`.
* Comecei as alterações no código e fui corrigindo os erros encontrados durante os testes.
* Pedi auxílio do ChatGPT para resolver problemas com a porta do MySQL, erros de exibição e algumas sugestões de mensagens amigáveis.
* Durante o desenvolvimento, algumas sugestões recebidas envolviam alterações nos meus métodos de conexão. Analisei as sugestões e, quando não concordava com a lógica ou organização proposta, mantive minha implementação e fiz as correções necessárias antes de continuar.
* Para testar o código, liguei o Apache e o MySQL e executei o sistema pelo navegador.

## ORGANIZAÇÃO

* **Model:** faz o controle do banco de dados e dos seus dados.
* **Controller:** faz o intermédio entre o Model e a View, controlando e encaminhando os dados.
* **View:** responsável pela visualização e pela parte interativa da aplicação com o usuário.

## VÍDEO

Deixei um vídeo com o sistema funcionando para melhor entendimento do projeto. Segue link abaixo.
https://drive.google.com/file/d/1ImYEbFaixm4tdIbI3_R6hvCkGFyHy43B/view?usp=sharing
