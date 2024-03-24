<?php 

session_start();

require_once('../../config/Conexao.php');
require_once('../../dao/FuncionarioDao.php');
require_once('../../model/Funcionario.php');

$login = new FuncionarioDao();



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> Login </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../../css/bootstrap.css">
   <style>
    label{
    color: #FFF;}
    </style>
    
</head>
<body style="background-color: #343a40">

    <!-- <div id="logo">
    <img  src="../../img/LogoSample_ByTailorBrands(1).jpg" alt=""> </img>
    </div> -->

    <div class="container vh-100" >
        <div class="row justify-content-center h-100" style="width: 100%;">
            
                
                <div class="card-body text-left" style="margin-left: 5%; margin-top: auto; margin-bottom: auto" >
                <div class="card-body text-center" style="color: #ffffff;">
                   <h4>LOG-IN</h4>
                </div>
                <div class="card-body text-center">
                    <img class="" src="../../img/PSICOPLUS.png" alt=""> </img>
                </div>
                
                <form class="form-group" action="../../controller/FuncionarioController.php" method="post" name="entrar">
                <div class="form-group">
                <label id="texts" > CPF: </label>
                <input type="" id="cpf" name="cpf" class="form-control" required />
                </div>

                <div class="form-group">
                <label id="textoS"> Senha: </label>
                <input type="password" class="form-control" id="senha" name="senha" required />    
                </div>

                <input type="submit" class="btn btn-primary w-100" id="login" name="login" value="Login" />
                
                
                </form>
                <div class="card-footer text-center" style="color: #ffffff">
                    <small>&copy; PSICOPLUS</small>
                </div>
                </div>
                
            
        </div>
    </div>
        

    

</body>
</html> 