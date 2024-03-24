<?php 

// Criação da classe Produto com o CRUD



class ResultadoDao {

    public function criar(Resultado $resultado) {
        try {

            $sql = "INSERT INTO resultado (idData, idFuncionario, nota, nomeFuncionario, cpfFuncionario, telefoneFuncionario, data) VALUES (:idData, :idFuncionario, :nota, :nomeFuncionario, :cpfFuncionario, :telefoneFuncionario, :data)";

            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":idData", $resultado->getIdData(), PDO::PARAM_STR);
            $stmt->bindValue(":idFuncionario", $resultado->getIdFuncionario(), PDO::PARAM_STR);
            $stmt->bindValue(":nota", $resultado->getNota(), PDO::PARAM_STR);
            $stmt->bindValue(":nomeFuncionario", $resultado->getNomeFuncionario(), PDO::PARAM_STR);
            $stmt->bindValue(":cpfFuncionario", $resultado->getCpfFuncionario(), PDO::PARAM_STR);
            $stmt->bindValue(":telefoneFuncionario", $resultado->getTelefoneFuncionario(), PDO::PARAM_STR);
            $stmt->bindValue(":data", $resultado->getData(), PDO::PARAM_STR);

       
 
            
            return $stmt->execute();

        } catch (PDOException $e) {
            echo "Erro ao Inserir Resultado <br>" . $e->getMessage() . '<br>';
        }
    }

    public function listar() {
        try {
            $sql = "SELECT * FROM resultado";
            $stmt = Conexao::getConexao()->query($sql);
            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $list = array();
        
            foreach ($lista as $linha) {
                $list[] = $this->listaResultados($linha);
            }

            return $list;

        } catch (PDOException $e) {
            echo "Ocorreu um erro ao tentar Buscar Todos." . $e->getMessage();
        }
    }

    public function listarRD() {
 
        try {

            $sql = "SELECT * FROM resultado where idData = :id";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":id", $_POST['id_correto'], PDO::PARAM_STR);
            $stmt->execute();

            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $list = array();
        
            foreach ($lista as $linha) {
                $list[] = $this->listaResultados($linha);
            }
        
                return $list; 
            
        } catch (PDOException $e) {
            //echo "Erro ao carregar resultados." . $e->getMessage();
        }
        
    }


        
    
    





    //public function editar() {
    //   try {
   //         $sql = "SELECT * FROM resultado WHERE id_resultado = :id";
    //        $stmt = Conexao::getConexao()->prepare($sql);
    //        $stmt->bindValue(":id", $_POST['id_edit'], PDO::PARAM_INT);
       //     $stmt->execute();
      //      $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
   //         $list = array();
//
   //         foreach ($lista as $linha) {
    //            $list[] = $this->listaresultados($linha);
  //          }

   //         return $list;

 //      } catch (PDOException $e) {
 //           echo "Ocorreu um erro ao tentar buscar Usuário." . $e->getMessage();
 //       }

 //   }

    private function listaResultados($linhas) {

        $resultado = new Resultado();
        $resultado->setID($linhas['idResultado']);
        $resultado->setIdData($linhas['idData']);
        $resultado->setIdFuncionario($linhas['idFuncionario']);
        $resultado->setNota($linhas['nota']);
        $resultado->setNomeFuncionario($linhas['nomeFuncionario']);
        $resultado->setCpfFuncionario($linhas['cpfFuncionario']);
        $resultado->setTelefoneFuncionario($linhas['telefoneFuncionario']);
        $resultado->setData($linhas['data']);

        return $resultado;
    }

    public function excluir(Resultado $resultado) {
        try {

            $sql = "DELETE FROM resultado WHERE idResultado= :id";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":id", $resultado->getID(), PDO::PARAM_INT);
            return $stmt->execute();

        } catch (PDOException $e) {
            echo "Erro ao Excluir Resultado" . $e->getMessage();
        }
    }

}

?>