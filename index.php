<?php 
    session_start();

    require_once('./config/Conexao.php');
    require_once('./dao/FuncionarioDao.php');
    require_once('./model/Funcionario.php');

    //instancia as classes
    $funcionario = new Funcionario();
    $funcionariodao = new FuncionarioDao();

    $login = new FuncionarioDao();

    if(!$login->checkLogin()) {
        header("Location: views/login");
    }

   foreach($funcionariodao->user() as $funcionario) {

    if($funcionario->getID() == 1) {
        header("Location: views/users/admin.php");
    }
    else {
        header("Location: views/listar_datas_func/index.php");
   }}
?>