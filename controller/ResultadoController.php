<?php 

require_once('../config/Conexao.php');
require_once('../dao/ResultadoDao.php');
require_once('../model/Resultado.php');

//instancia as classes
$resultado = new Resultado();
$resultadodao = new ResultadoDao();

//pega todos os dados passado por POST

$dados = filter_input_array(INPUT_POST);

//se a operação for gravar entra nessa condição
if(isset($_POST['cadastrar'])){

    $resultado->setIdData($dados['idData']);
    $resultado->setData($dados['data']);
    $resultado->setIdFuncionario($dados['idFuncionario']);
    $resultado->setNota($dados['nota']);
    $resultado->setNomeFuncionario($dados['nomeFuncionario']);
    $resultado->setCpfFuncionario($dados['cpfFuncionario']);
    $resultado->setTelefoneFuncionario($dados['telefoneFuncionario']);


    if($resultadodao->criar($resultado)) {

    echo "<script>
           
            location.href = '../views/listar_datas_func/index.php';
          </script>";
    }


}  else if(isset($_POST['excluir'])) {
  
      $resultado->setID($_POST['id_del']);

      if($resultadodao->excluir($resultado)) {

      echo "<script>
              alert('Resultado do Teste Excluído!!');
              location.href = '../views/listar_datas/index.php';
          </script>";
      }
        
    
    
} else if(isset($_POST['corretor'])){
    $resultado->setIdData($_POST['id_correto']);

       if($resultadodao->listarRD($resultado)){
        echo "<script>
     
        location.href = '../listar_resultados/index.php';
    </script>";

   /* $x = $resultado->getIdData();
    echo $x;*/
       }
    } 


?>