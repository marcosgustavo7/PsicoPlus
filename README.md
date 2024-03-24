# PsicoPlus
Este site foi o projeto final do meu técnico em Desenvolvimento de Sistemas feito em Abril de 2023. Foi nos dado uma demanda aonde funcionários de uma fábrica estariam tendo altos níveis de ansiedade a ponto de serem afastados de seus cargos temporariamente por estes motivos. Assim, eu e meu grupo pensamos em um site com um ChatBot aonde facilitaria a comunicação desses problemas de ansiedade com a psicóloga/Empresa com o problema. 
_Desse modo_, haveria uma facilidade maior para identificar os funcionários com esses níveis elevados de ansiedade e tratá-los o quanto antes para que não haja muitos afastamentos por este problema.
# IMPORTANTE #
Para a utilização do site para o público em geral, foi tirado qualquer restrição de acesso para você conseguir utilizar e testar como o programa funciona! Assim, segue abaixo os logins de Administrador e funcionário para teste:

*Administrador*: 000.000.000-00
Senha: 123

*Funcionário*: 000.000.000-01
Senha: 123

## Linguagens utilizadas ##
### Front-End ###
Foi utilizado **HTML5** e **CSS3** com **Boostrap framework** para fazer as páginas front-end do site (Desktop e Mobile). A idéia era de fazer um site bem simples e de fácil acesso, já que os trabalhadores da fábrica não teriam grandes conhecimentos com tecnologias.
### Back-End e Banco de Dados ###
Para o back-end e banco de dados foi utilizado **PHP8** juntamente com o **MVC framework** para fazer ligação com um banco de dados relacional feito em **MySql**. O banco de dados foi feito e planejado do zero desde o projeto conceitual e lógico até o físico. No banco de dados, temos 3 tabelas; *Funcionários* para cadastrar os funcionários da fábrica com  coisas do nome, idade, telefone, *CPF e senha* (Estes últimos sendo utilizados para login no site); *Data* para o Administrador cadastrar as datas que serão feitos os testes usando o ChatBot; e por último, *Resultados* aonde ficará guardado os resultados dos testes dos usuários feitos pelo ChatBot! Apenas o Administrador tem acesso a estes resultados.
### ChatBot ###
A idéia de utilizar um ChatBot veio de um colega meu que me mostrou que fazer um ChatBot mais simples em um projeto, não é muito difícil. E a idéia de um ChatBot é melhor do que a utilização de um formulário para captar esse tipo de informações dos usuários. Assim, foi feitos um ChatBot mais simples utilizando de **JavaScript** puro. Você não leu errado! Javascript PURO!
## Outras técnicas usadas ##
Durante o processo de criação desse site foram utilizados **Testes Unitários** para verificar se o sistema entregava as repostas desejadas durantes seus processos. Além da utilização de **Metodologias Ágeis** e **Kanban** para nos ajudar a acompanhar as tarefas necessárias para a criação do sistema, além de acelerar as entregas dessas mesmas tarefas no processo. O projeto ainda teve **SLA** ou Acordo de Nível de Serviço;  **Fluxograma** e a criação de um **Trello** para o design das páginas do site.
