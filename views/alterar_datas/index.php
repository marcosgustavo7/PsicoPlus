<?php 

session_start();

require_once('../../config/Conexao.php');
require_once('../../dao/DataDao.php');
require_once('../../model/Data.php');

//instancia as classes
$data = new Data();
$datadao = new DataDao();

//$login = new FuncionarioDao();

/*if(!$login->checkLogin()) {
    header("Location: ../login");
} */

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> PsicoPlus</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../../css/bootstrap.css">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="container text-center">
             <a href="../listar_datas/index.php">   <img  src="../../img/PSICOPLUS(1).png" alt=""> </img> </a>
            </div>

    <h2 id="altero"> Alterar Data </h2>

    <div class="container">
    <?php foreach ($datadao->editar() as $data) : ?>

<form class="form-group" action="../../controller/DataController.php" method="post" name="cad">
<input class="form-control" type="hidden" id="id_alter" name="id_alter" value="<?= $data->getID() ?>" />   
<div id="div_data" class="form-group">
<label class="letras"> Data: </label>
    <input class="form-control" type="date" id="data" name="data" value="<?= $data->getData() ?>" required />
</div>


    <button class="btn btn-primary" type="submit" id="alterar" name="alterar">Alterar</button>
 
   
</form>
<?php endforeach ?>
    </div>
        
        </div>
    </div>
    
       
  

</body>
</html>