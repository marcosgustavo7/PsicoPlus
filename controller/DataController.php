<?php 

require_once('../config/Conexao.php');
require_once('../dao/DataDao.php');
require_once('../model/Data.php');

//instancia as classes
$data = new Data();
$datadao = new DataDao();

//pega todos os dados passado por POST

$dados = filter_input_array(INPUT_POST);

//se a operação for gravar entra nessa condição
if(isset($_POST['cadastrar'])){

    $data->setData($dados['data']);

    if($datadao->criar($data)) {

    echo "<script>
            
            location.href = '../views/listar_datas/index.php';
          </script>";
    }


}  else if(isset($_POST['alterar'])){

    $data->setID($dados['id_alter']);
    $data->setData($dados['data']);
 

    if($datadao->alterar($data)) {

    echo "<script>
           
            location.href = '../views/listar_datas/index.php';
        </script>";
    }

// se a requisição for deletar
}   else if(isset($_POST['excluir'])) {
  
      $data->setID($_POST['id_del']);

      if($datadao->excluir($data)) {

        echo "<script>
        alert('Data Deletada com Sucesso!!');
        location.href = '../views/listar_datas/index.php';
    </script>";
}
} 

?>