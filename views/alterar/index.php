<?php 

session_start();

require_once('../../config/Conexao.php');
require_once('../../dao/FuncionarioDao.php');
require_once('../../model/Funcionario.php');

//instancia as classes
$funcionario = new Funcionario();
$funcionariodao = new FuncionarioDao();

$login = new FuncionarioDao();

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
    
    <div class="container text-center">
    <div class="container text-center" id="logo">
  <a href="../listar_funcionarios/index.php">  <img  src="../../img/PSICOPLUS(1).png" alt=""> </img> </a>
    </div>

    <h2 id="altero"> Alterar Usuário </h2>

    <div class="list-group text-left">
    <?php foreach ($funcionariodao->editar() as $funcionario) : ?>

<form class="form-group" action="../../controller/FuncionarioController.php" method="post" name="cad">
<input class="form-control" type="hidden" id="id_alter" name="id_alter" value="<?= $funcionario->getID() ?>" /> 
<div class="form-group" id="div_nome">
<label class="letras"> Nome: </label>
    <input class="form-control" type="text" id="nome" name="nome" value="<?= $funcionario->getNome() ?>" required />
</div>
    <div class="form-group" id="div_cpf">
    <label class="letras"> CPF: </label>
    <input class="form-control" type="text" id="cpf" name="cpf" value="<?= $funcionario->getCPF() ?>" required />
    </div>
    <div class="form-group" id="div_telefone">
    <label class="letras"> Telefone: </label>
    <input class="form-control" type="tel" id="telefone" name="telefone" value="<?= $funcionario->getTelefone()?>"  required />
    </div>
    <div class="form-group" id="div_idade">
    <label class="letras"> Idade: </label>
    <input class="form-control" type="text" id="idade" name="idade" value="<?= $funcionario->getIdade()?>"  required />
    </div>
    <div class="form-group" id="div_senha">
    <label class="letras"> Nova Senha: </label>
    <input class="form-control" type="password" id="senha" name="senha" required />
    </div>
    <div class="container text-right">
        <button class="btn btn-primary" type="submit" id="alterar" name="alterar">Alterar</button>
    </div>
    
 
    
</form>
<?php endforeach ?>
    </div>
       
    </div>

    
       
  

</body>
</html>