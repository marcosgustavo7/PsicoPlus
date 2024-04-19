# PsicoPlus
Este site foi o projeto final do meu técnico em Desenvolvimento de Sistemas feito em Abril de 2023. Foi nos dado uma demanda aonde funcionários de uma fábrica estariam tendo altos níveis de ansiedade a ponto de serem afastados de seus cargos temporariamente por estes motivos. Assim, eu e meu grupo pensamos em um site com um ChatBot aonde facilitaria a comunicação desses problemas de ansiedade com a psicóloga/Empresa com o problema. 
_Desse modo_, haveria uma facilidade maior para identificar os funcionários com esses níveis elevados de ansiedade e tratá-los o quanto antes para que não haja muitos afastamentos por este problema.
# IMPORTANTE #
Para a utilização do site para o público em geral, foi tirado qualquer restrição de acesso para você conseguir utilizar e testar como o programa funciona! Assim, segue abaixo os logins de Administrador e funcionário para teste:

*Administrador*: 000.000.000-00
Senha: 123

*Funcionário*: 000.000.000-01
Senha: 123
## Como Funciona o Sistema ##
><img src="/img/Login_PsicoPlus.png" alt="Login" width=800px eight=600px />
A primeira tela é a de _Login_ aonde o __Administrador__ ou o __Usuário__ podem estar acessando com seus respectivos logins. O login é feito com _CPF_ e __Senha_ aonde depois de digitados bastam clicar no botão "_Login_" para acessar! O sistema automáticamente reconhecerá se você é um _Administrador_ ou um _Usuário_, e te levará para a respectiva tela de _Administrador_ ou _Usuário_.

### Administrador ###
><img src="/img/Tela1_Psico.png" alt="Tela 1" width=800px eight=600px />
Após o login como __Administrador__, a primeira tela que encontramos é a tela aonde podemos selecionar entre ir para o menu de __Datas__ ou o menu de __Funcionários__! Basta clicar em cima de uma das palavras para ir até o menu desejado. No canto superior esquerdo de todas as páginas do site exceto a de Login, tem um ícone preto de uma porta com uma seta. Ao clicar neste ícone, você é deslogado de sua conta e é levado para a tela de _Login_ novamente.

#### Datas ####
><img src="/img/Datas_Psico.png" alt="Tela 1" width=800px eight=600px />
No menu de __Datas__, temos um botão de _Adicionar_ aonde podemos adicionar Datas ao banco de dados. Temos uma _Lista_ com as Datas criadas e em cada data temos um símbolo de __Prancheta__ aonde você poderá acessar os resultados dos _Testes_ feitos pelos funcionários naquela data, um símbolo de __Lápis de Escrever__ para editar e um símbolo de __Lixeira Vermelha__ para excluir essa respectiva data.

#### Adicionar Datas ####
><img src="/img/CadastrarDatas_Psico.png" alt="Tela 1" width=800px eight=600px />
Neste menu, bem simples e intuítivo. Você pode digitar a data que deseja cadastrar no sistema ou apenas clicar no ícone de __Calendário__ no canto da tela para selecionar uma data. Após selecionar a data desejada, clique em __Adicionar__! A data será cadastrada no sistema e você levado ao menu anterior.

#### Testes ####
><img src="/img/Testes_PsicoPlus.png" alt="Tela 1" width=800px eight=600px />
Neste menu será listado os _Resultados_ dos testes feitos pelos funcionários. Em cada teste listado aparecerá a _Data do Teste_, _Nome_, _CPF_, _Telefone_ e o _Resultado do Teste_. Este último vária entre __3 tipos__ de resultados: __Saudável__ (quando o funcionário tem resultados majoritariamente satisfatórios), __Preocupável__ (quando o funcionário tem resultados que indicam um possível início de _Ansiedade_ ou/e _Estresse_) e por último, __Intervenção__ (quando o funcionário tem resultados majoritariamente preocupáveis indicando que ele já está com um grau avançado de _Ansiedade_ e _Estresse_), nesse último caso, é recomendado que a empresa auxilie o funcionário a encontrar ou contrate um profissional de saúde que possa diagnosticar corretamente seu grau de _Ansiedade_ e _Estresse_ para saber se é preciso afastar o funcionário para tratamento de tal problema.

#### Funcionários ####
><img src="/img/Funcionarios_Psico.png" alt="Tela 1" width=800px eight=600px />
Este menu de __Funcionários__ têm o mesmo modelo do menu de __Datas__. É listado todos os funcionários cadastrados na empresa incluíndo o Administrador. Em cada listagem é mostrado o _nome_, _cpf_, _telefone_ e _idade_ do respectivo funcionário. Em cada funcionário listado temos um símbolo de __Lápis de Escrever__ para editar e um símbolo de __Lixeira Vermelha__ para excluir esse respectivo funcionários. No canto superior têm um botão "Adicionar", aonde você irá para a tela de _Cadastrar Funcionários_.

#### Cadastrar Funcionários ####
><img src="/img/CadastrarFunc_Psico.png" alt="Tela 1" width=800px eight=600px />
Nessa tela, você poderá colocar os dados de cadastro de um funcionário, como: _nome_, _cpf_, _telefone_ e _idade_ do funcionário que você está cadastrando. Lembrando que o site não aceitará _CPFs_ que já esteja cadastrado em um funcionário. A _Senha_ tem máscara para não verem o que você está digitando. No final, tem um botão de _"Adicionar"_ que você deve clicá-lo ao final do preenchimento de dados. __Não será cadastrado se um ou mais campos de preenchimento estiverem vazios__.

### Funcionário ###
><img src="/img/DatasFunc_Psico.png" alt="Tela 1" width=800px eight=600px />
Após o login com um usuário __Funcionário__, o usuário será levado para o menu de _Datas_, aparece as datas criadas pelo usuário Administrador em uma listagem, aonde cada data aparece com uma _"Prancheta"_ a sua esquerda. Após o funcionário clicar na _prancheta_, ele é levado para a próxima tela do sistema!

#### ChatBot #### 
><img src="/img/ChatBot1_Psico.png" alt="Tela 1" width=800px eight=600px />
Nessa tela de teste, o usuário Funcionário conversa com um __ChatBot__ dando respostas entre __Sim, Não ou Talvez__ para o ChatBot. Qualquer resposta diferente disso, o ChatBot emite um mensagem informando que não entende outro tipo de resposta além das citadas anteriormente. Nessa tela, o usuário pode ver suas informações como _nome_, _CPF_ e _Telefone_. No canto superior tem 2 botões, um de "Voltar" e outro de "Finalizar", aonde caso seja clicado antes de terminar o teste, as informações não serão salvas. Ainda aparece o horário atual do teste.
><img src="/img/ChatBot2_Psico.png" alt="Tela 1" width=800px eight=600px />
Ao final do teste, será exibida uma mensagem informando que o teste acabou e por fim, o usuário deve clicar no botão __"Finalizar"__ para encerrar o teste e enviá-lo ao Banco de Dados. Após isso, ele será enviado para a tela anterior!
## Linguagens utilizadas ##
### Front-End ###
Foi utilizado **HTML5** e **CSS3** com **Boostrap framework** para fazer as páginas front-end do site (Desktop e Mobile). A idéia era de fazer um site bem simples e de fácil acesso, já que os trabalhadores da fábrica não teriam grandes conhecimentos com tecnologias.
### Back-End e Banco de Dados ###
Para o back-end e banco de dados foi utilizado **PHP8** juntamente com o **MVC framework** para fazer ligação com um banco de dados relacional feito em **MySql**. O banco de dados foi feito e planejado do zero desde o projeto conceitual e lógico até o físico. No banco de dados, temos 3 tabelas; *Funcionários* para cadastrar os funcionários da fábrica com  coisas do nome, idade, telefone, *CPF e senha* (Estes últimos sendo utilizados para login no site); *Data* para o Administrador cadastrar as datas que serão feitos os testes usando o ChatBot; e por último, *Resultados* aonde ficará guardado os resultados dos testes dos usuários feitos pelo ChatBot! Apenas o Administrador tem acesso a estes resultados.
### ChatBot ###
A idéia de utilizar um ChatBot veio de um colega meu que me mostrou que fazer um ChatBot mais simples em um projeto, não é muito difícil. E a idéia de um ChatBot é melhor do que a utilização de um formulário para captar esse tipo de informações dos usuários. Assim, foi feitos um ChatBot mais simples utilizando de **JavaScript** puro. Você não leu errado! Javascript PURO!
## Outras técnicas usadas ##
Durante o processo de criação desse site foram utilizados **Metodologias Ágeis** e **Kanban** para nos ajudar a acompanhar as tarefas necessárias para a criação do sistema, além de acelerar as entregas dessas mesmas tarefas no processo. O projeto ainda teve **SLA** ou Acordo de Nível de Serviço;  **Fluxograma** e a criação de um **Trello** para o design das páginas do site.
