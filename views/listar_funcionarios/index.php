<?php 

session_start();

require_once('../../config/Conexao.php');
require_once('../../dao/FuncionarioDao.php');
require_once('../../model/Funcionario.php');

//instancia as classes
$funcionario = new Funcionario();
$funcionariodao = new FuncionarioDao();

$login = new FuncionarioDao();

$id = $_SESSION['funcionario_session'];

/*if(!$login->checkLogin()) {
    header("Location: ../login");
}*/

?>

<script>

    function deletar() {
        ok = confirm("Tem certeza que deseja deletar estes dados??");
        if(ok){
            return true;
        } else {
            return false;
        }
    }

</script>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> PsicoPlus </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="func.css">

    </head>
    <body>

    <a href="../../controller/FuncionarioController.php?logout=true" title="Deslogar">
            <div>
            <img class="sair" src="../../img/sair.png" alt=""> </img>
        </div> </a>

    <div id="logo">
  <a href="../users/admin.php" title="Voltar">  <img  src="../../img/PSICOPLUS(1).png" alt=""> </img> </a>
    </div>
    <h2 id="Func">Funcionários</h2>

   <a href="../cadastro/index.html"> <button id="add" href=""><p id="letrad"> Adicionar <p></button> </a>

    <?php foreach ($funcionariodao->listar() as $funcionario) : ?>
         
    <div id="info">   

   <div class="pan">   <?= $funcionario->getNome() ?> </div>
   <div class="pan">   <?= $funcionario->getCPF() ?> </div>
   <div class="pan">   <?= $funcionario->getTelefone() ?> </div>
   <div class="pan">  <?= $funcionario->getIdade()?> </div>


   <div class="bots" id="edit" > <form action="../alterar/index.php" method="post" name="edit">
                        <input type="hidden" id="id_edit" name="id_edit" value="<?= $funcionario->getID() ?>"/>
                        <input type="submit" id="editar" name="editar" value="  " title="Alterar Funcionários">  

                    </form> </div>

                    <div class="bots" ><form action="../../controller/FuncionarioController.php" method="post" name="del">
                        <input type="hidden" id="id_del" name="id_del" value="<?= $funcionario->getID() ?>"/>
                        <input type="submit" id="excluir" name="excluir" value="  "  title="Excluir Funcionários" onclick="return deletar()"/>
                    </form> </div>


    </div>


    <?php endforeach ?>


    <!--    <table border="1" style="border:4px solid #09A; width:800px;">
            <tr style="background-color:#391;">
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Sexo</th>
                <th colspan="2">Ações</th>
            </tr> -->
           
    
    </body>
</html>