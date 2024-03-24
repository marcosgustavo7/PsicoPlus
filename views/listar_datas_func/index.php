<?php 

session_start();

require_once('../../config/Conexao.php');
require_once('../../dao/DataDao.php');
require_once('../../model/Data.php');
require_once('../../dao/FuncionarioDao.php');
require_once('../../model/Funcionario.php');

//instancia as classes
$data = new Data();
$datadao = new DataDao();

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
        <link rel="stylesheet" href="data.css">
    </head>
    <body>

    <a href="../../controller/FuncionarioController.php?logout=true" title="Deslogar">
            <div>
            <img class="sair" src="../../img/sair.png" alt=""> </img>
        </div> </a>

    <div id="logo">
  <a href="../../controller/FuncionarioController.php?logout=true" title="Voltar">  <img  src="../../img/PSICOPLUS(1).png" alt=""> </img> </a>
    </div>
    <h2 id="Func">Datas</h2>


   

    <?php foreach ($datadao->listar() as $data) : ?>
        
    <div  id="info">   
    <form action="../chat/index.php" method="post" name="correto">
        <input type="hidden" id="id_correto" name="id_correto" value="<?= $data->getID() ?>"/>
        <input type="hidden" id="data_correto" name="data_correto" value="<?= $data->getData() ?>"/>
        <input type="submit" id="corretor" name="corretor" value="  " title="Realizar Teste"/>
        </form>
   <div class="pan">   <?= $data->getData() ?> </div>

    </div> </a>


    <?php endforeach ?>



    
    </body>
</html>