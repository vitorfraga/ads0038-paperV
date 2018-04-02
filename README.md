# Paper V - Self-service Analytics
Este repositório é dedicado para inserção de códigos do Paper V.

Desenvolvedores

    Angelo Camboim
    Fernando Almeida
    Gabriela Dias
    Maria Clara
    Vitor Augusto Fraga

# 1 TEMA/ASSUNTO

O assunto abordado terá como ênfase análise de dados. O nosso desafio será desenvolver uma aplicação WEB onde os usuários poderão fazer self-service Analytics, ou seja, uma aplicação que ajude profissionais a analisar seus dados de forma resumida e rápida.

# 2 OBJETIVOS 

 - O primeiro objetivo é realizar a carga de dados através de um CSV.  
 - O   segundo objetivo é transformar estes dados de forma simples, retirar
   colunas por exemplo.  
 - O terceiro é montar de forma automática uma  Dashboard.

# 3 Tecnologias

<p>Banco de dados  - PostgreSQL</p> 
<p>Back-End - PHP com Slim Framework -> https://www.slimframework.com/ </p> 
<p>Front-End - HTML, CSS, Javascript com AngularJS * Precisamos escolher um Framework para construir nosso visual. -> https://angularjs.org/ </p>

Servidor - Apache ou Nginx

# 4 Modelagem de banco de dados 
<p>A modelagem de banco de dados esta bastante simples, porém contém tudo aquilo que vamos precisar para o desenvolvimento do sistema.</p>
<img src="https://github.com/vitorfraga/ads0038-paperV/blob/master/DER/der.PNG">

# 5 Diagrama de casos de uso 
<p>Diagrama de casos de uso que demonstra o que o usuário poderá fazer na primeira versão do sistema.</p>
<img src="https://github.com/vitorfraga/ads0038-paperV/blob/master/Casos%20de%20uso/casos%20de%20uso.png">

# 6 API (Application Programming Interface)
<p>Nosso sistema seguirá uma metodologia que se chama API FIRST, ou seja, a API será desenvolvida antes de tudo, pois ela que fornecerá todo o conjunto de operações necessárias para que o Front-End consiga alimentar o usuário, Mas o que esta API deverá fazer? </p>

- [ ] Cadastrar um usuário
- [ ] Alterar os dados cadastrais de um usuário
- [ ] Realizar Login
- [ ] Realizar o Logoff
- [ ] Realizar o upload de um Dataframe (CSV)
- [ ] Buscas os metadados de um Dataframe, ou seja, listar as colunas e seus tipos de dados(String, Integer, Number, Date)
- [ ] Deletar um Dataframe (CSV)
- [ ] Realizar um "summarize" dos dados, ou seja, quantidade de linhas, quantidade de colunas.
- [ ] Gerar Dashboard
- [ ] Listar todos os Dataframes de um usuário

# 7 UI (User Interface)
<p>Neste sessão é listado todas as interfaces necessárias para o sistema</p>

- [ ] Interface para cadastrar um usuário com os campos de (name, email, password)
- [ ] Interface para alterar um usuário com os campos de (name, email, password)
- [ ] Interface para realizar o login (email e password)
- [ ] Menu com as seguintes opções (Dataframes) -> Aqui é listado todos os Dataframes, em cada linha que mostra o respectivo Dataframe deve-se incluir um botão de deletar ou ver dashboard. Nesta mesma Tela devemos ter um botão de novo que vai para a próxima Interface.
- [ ] Realizar o Uplaod de um novo Dataframe.
 