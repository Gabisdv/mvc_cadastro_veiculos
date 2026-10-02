# CADASTRO DE VEÍCULOS

##DESCRIÇÃO:
#Esse sistema permite cadastrar veículos utilizando PHP, MySQL e MVC(Model,View e controller), executando funções simples como cadastrar veículo, visualizar os cadastrados, editar e excluir, impondo regras como:
- Todos os campos são obrigatórios. 
- A placa não poderá ser duplicada. 
- O chassis não poderá ser duplicado. 
- A placa deverá ser gravada em letras maiúsculas. 
- Não permitir salvar registros com dados inválidos.
  
##TECNOLOGIAS UTILIZADAS:
- PHP
- HTML
- MySQL
- XAMPP
- MySQLi
- MVC
  
##FERRAMENTAS UTILIZADAS:
- XAMPP instalado
- Apache
- MySQL
- Navegador
##APOIO:
Utilizei o ChatGPT para me apoiar principalmente nos erros de instalação e configuração do MySQL e XAMPP e alguns erros de sintaxe(majoritariamente ;).
O código em si eu fiz baseado em um MVC já feito durante o Curso de ADS, portanto só precisei alterá-lo.

##EXECUÇÃO:
- Primeiro precisei reconfigurar meu banco de dados devido as atualizações.
- Com o ambiente(MySQL) configurado, fiz sem auxílio nenhum o banco de dados completo.
- Em seguida copiei a pasta do MVC para dentro do xampp->htdocs.
- Comecei as alterações no código e fui corrigindo os erros visíveis.
- Pedi auxílio do ChatGPT para resolver problemas com a porta do Mysql e erros de exibição, algumas sugestões de mensagens amigáveis também. Nesse meio tempo ele tentava corrigir meus métodos de conexão principalmente, portanto houve uma discussão onde eu provei que meu método era mais organzizado e seguro, além disso ele errava sintaxe e lógica, os quais eu corrigia imediatamente e somente após as correções feitas, incrementava ao meu código.
- Para testar meus códigos, liguei o Apache e executei no navegador.

##ORGANIZAÇÃO:
- Model: faz o controle do banco de dados e dos seus dados.
- Controller: faz o intermédio entre o Model e a View, controlando e encaminhando os dados.
- View: responsável pela visualização e pela parte interativa da aplicação com o usuário.

##Deixei um vídeo com o sistema funcionando para melhor entendimento!
