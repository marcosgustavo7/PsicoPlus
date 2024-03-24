<?php 

session_start();

require_once('../../config/Conexao.php');

require_once('../../dao/FuncionarioDao.php');
require_once('../../model/Funcionario.php');
require_once('../../dao/ResultadoDao.php');
require_once('../../model/Resultado.php');
//instancia as classes
$resultado = new Resultado();
$resultadodao = new ResultadoDao();

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
        <link rel="stylesheet" href="resul.css">
    </head>
    <body>

    <a href="../../controller/FuncionarioController.php?logout=true" title="Deslogar">
            <div>
            <img class="sair" src="../../img/sair.png" alt=""> </img>
        </div> </a>

    <div id="logo">
   <a href="../listar_datas/index.php"> <img  src="../../img/PSICOPLUS(1).png" alt=""> </img> </a>
    </div>
    <h2 id="Func">Testes</h2>



    <?php foreach ($resultadodao->listarRD() as $resultado) : ?>
         
     <div  id="info">   

   <div class="pan">   <?= $resultado->getData() ?> </div>
   <div class="pan">   <?= $resultado->getNomeFuncionario() ?> </div>
   <div class="pan">   <?= $resultado->getCpfFuncionario() ?> </div>
   <div class="pan">   <?= $resultado->getTelefoneFuncionario() ?> </div>
   <div class="pan">   <?= $resultado->getNota() ?> </div>



                    <div class="bots" id="edit" ><form action="../../controller/ResultadoController.php" method="post" name="del">
                        <input type="hidden" id="id_del" name="id_del" value="<?= $resultado->getID() ?>"/>
                        <input type="submit" id="excluir" name="excluir" value="  "  title="Excluir Testes"onclick="return deletar()"/>
                    </form> </div>


    </div> 


    <?php endforeach ?>


 
           
    
    </body>
</html>