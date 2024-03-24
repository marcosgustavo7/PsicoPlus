<?php 

session_start();

require_once('../../config/Conexao.php');
require_once('../../dao/ResultadoDao.php');
require_once('../../model/Resultado.php');
require_once('../../dao/DataDao.php');
require_once('../../model/Data.php');
require_once('../../dao/FuncionarioDao.php');
require_once('../../model/Funcionario.php');

//instancia as classes
$resultado = new Resultado();
$resultadodao = new ResultadoDao();
$data = new Data();
$datadao = new DataDao();
$funcionario = new Funcionario();
$funcionariodao = new FuncionarioDao();


$login = new FuncionarioDao();

$id = $_SESSION['funcionario_session'];


/*if(!$login->checkLogin()) {
    header("Location: ../login");
}*/

?>








<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> PsicoPlus </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../../css/bootstrap.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="chat.js">
    <link rel="stylesheet" href="responses.js">
    <link rel="stylesheet" href="chat.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="cadastro.css">


</head>
<body>
    <div class="container content-justify-center">
    <div id="logo"  >
      <a href="../listar_datas_func/index.php" title="Voltar">  <img  src="../../img/PSICOPLUS(1).png" alt=""> </img> </a>
        </div>
 
    <h2 id="cadastro"> Cadastrar Resultado</h2>

    <?php $id_data = $_POST["id_correto"] ?>
    <?php $data = $_POST["data_correto"]
    ?>

    <?php foreach ($funcionariodao->listarF() as $funcionario) : ?>

   <?= $nome = $funcionario->getNome(); ?>
  <?=  $cpf = $funcionario->getCpf();?>
  <?=  $telefone = $funcionario->getTelefone(); ?>
 
<?php endforeach ?>
        <div class="container">

        <div class= "container text-right" style="position: absolut; display:flex; margin-right: 85%;">
        <a href="../listar_datas_func/index.php" style="color: #fff"><button class="voltar" style="">  Voltar  </button> </a>
                <form action="../../controller/ResultadoController.php" onsubmit="teste()" method="post" name="cad">

<div id="div_nome">

<input type="hidden" id="nota" name="nota"  required />
<input type="hidden" id="idData" name="idData" value="<?= $id_data; ?>"  required />
<input type="hidden" id="data" name="data" value="<?= $data; ?>"  required />
<input type="hidden" id="idFuncionario" name="idFuncionario" value="<?= $id;?>"    required />
<input type="hidden" id="nomeFuncionario" name="nomeFuncionario" value="<?= $nome;?>"    required />
<input type="hidden" id="cpfFuncionario" name="cpfFuncionario" value="<?= $cpf;?>"    required />
<input type="hidden" id="telefoneFuncionario" name="telefoneFuncionario" value="<?= $telefone;?>"    required />
</div>


<button class="btn btn-primary" type="submit" id="cadastrar" name="cadastrar" title="Finalizar o Teste"onclick=" return concluido()">Finalizar </button>
 
</form> 
                </div>

        </div>
             
            

        
      
    
                   <!--Chat bar se excluirmos isto, "funciona"-->
   <!-- <div class="chat-bar-collapsible">
        <button id="chat-button" type="button" class="collapsible">Assistente Social
            <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
        </button> -->


 
                <!-- Messagem Container -->
                <div class="outer-container">
                    <div class="chat-container">
                        <!-- Mensagens -->
                        <div id="chatbox">
                            <h5 id="chat-timestamp"></h5>
                            <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
                        </div>

                        <!-- Input do usuário -->
                        <div class="chat-bar-input-block">
                            <div id="userInput">
                                <input id="textInput" class="input-box" type="text" name="msg"
                                    placeholder="Envie alguma mensagem">
                                <p></p>
                            </div>

                            <div class="chat-bar-icons">
                              
                                <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send"
                                    onclick="sendButton()"></i>
                            </div>
                        </div>

                        <div id="chat-bar-bottom">
                            <p></p>
                        </div>

                    </div>
                </div>
                
                
            </div>
        </div>

    </div>
    </div>
    
    

   <!-- ============================================================ -->
    <script>
        AOS.init();
    </script>

    
    <!--CHATBOT-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="responses.js"></script>
    <script src="chat.js"></script>
    <!--CHATBOT-->


</body>
</html>