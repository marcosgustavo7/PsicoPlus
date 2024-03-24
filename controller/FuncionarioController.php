<?php 

require_once('../config/Conexao.php');
require_once('../dao/FuncionarioDao.php');
require_once('../model/Funcionario.php');

//instancia as classes
$funcionario = new Funcionario();
$funcionariodao = new FuncionarioDao();

//pega todos os dados passado por POST

$dados = filter_input_array(INPUT_POST);

//se a operação for gravar entra nessa condição
if(isset($_POST['cadastrar'])){

    $funcionario->setNome($dados['nome']);
    $funcionario->setCPF($dados['cpf']);
    $funcionario->setTelefone($dados['telefone']);
    $funcionario->setIdade($dados['idade']);
    $funcionario->setSenha(password_hash($dados['senha'], PASSWORD_DEFAULT)); 

    

    if($funcionariodao->criar($funcionario)) {

    echo "<script>
            alert('Funcionário Cadastrado com Sucesso!!');
            location.href = '../views/listar_funcionarios/index.php';
          </script>";
    }

// se a requisição for alterar
} else if(isset($_POST['alterar'])){

    $funcionario->setID($dados['id_alter']);
    $funcionario->setNome($dados['nome']);
    $funcionario->setCPF($dados['cpf']);
    $funcionario->setTelefone($dados['telefone']);
    $funcionario->setIdade($dados['idade']);
    $funcionario->setSenha(password_hash($dados['senha'], PASSWORD_DEFAULT)); 

    if($funcionariodao->alterar($funcionario)) {

    echo "<script>
          
            location.href = '../views/listar_funcionarios/index.php';
        </script>";
    }

// se a requisição for deletar
} else if(isset($_POST['excluir'])) {

    $funcionario->setID($_POST['id_del']);

    if($funcionariodao->excluir($funcionario)) {

    echo "<script>
            alert('Funcionário Deletado com Sucesso!!');
            location.href = '../views/listar_funcionarios/index.php';
        </script>";
    }

// se a requisição for login        
} else if(isset($_POST['login'])) {

	$funcionario->setCpf(strip_tags($dados['cpf']));
	$funcionario->setSenha(strip_tags($dados['senha'])); 

    $funcionariodao->login($funcionario);

	if($funcionariodao->login($funcionario)) {

     echo "<script>
         
     location.href = '../index.php';
           </script>";

	} else {
        echo "<script>
                alert('Acesso inválido! CPF ou Senha Incorretos!');
                location.href = '../';
            </script>";
	}	

// se a requisição for logout      
} else if(isset($_GET['logout'])) {

    $funcionariodao->logout();

    header("Location: ../");


} else {

    header("Location: ../");
}

?>