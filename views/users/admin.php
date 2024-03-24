<?php 

echo '<!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <title></title>
                <meta name="description" content="">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="admin.css">
            </head>

            <body>
            <a href="../../controller/FuncionarioController.php?logout=true" title="Deslogar">
            <div>
            <img class="sair" src="../../img/sair.png" alt=""> </img>
        </div> </a>
            <div id="logo">
            <a href="../../controller/FuncionarioController.php?logout=true" title="Voltar">
                   <img  src="../../img/PSICOPLUS(1).png" alt=""> </img> </a>
            </div>

            <div id="divT">
            <label id="escolha"> Clique sobre uma das palavras abaixo para ir à próxima tela </label>
            </div>
            <div id="func">
            <a href="../listar_datas/index.php"> <h2 id="funcD" > Datas </h2> </a>
            <a href="../listar_funcionarios/index.php">    <h2 id="funcF">  Funcionários  </h2> </a>
                </div>
             

                   
               
            </body>
        </html>';


?>