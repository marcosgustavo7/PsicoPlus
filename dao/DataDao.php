<?php 

// Criação da classe Produto com o CRUD

class DataDao {

    public function criar(Data $data) {
        try {

            $sql = "INSERT INTO data (data) VALUES (:data)";

            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":data", $data->getData(), PDO::PARAM_STR);
        

          //  $nomep = $resultado->getNome();

      //      include '../includes/upload_img.php';
 
            
            return $stmt->execute();

        } catch (PDOException $e) {
            echo "Erro ao Inserir Data <br>" . $e->getMessage() . '<br>';
        }
    }

    public function listar() {
        try {
            $sql = "SELECT * FROM data";
            $stmt = Conexao::getConexao()->query($sql);
            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $list = array();

            foreach ($lista as $linha) {
                $list[] = $this->listaDatas($linha);
            }

            return $list;

        } catch (PDOException $e) {
            echo "Ocorreu um erro ao tentar Buscar Todos." . $e->getMessage();
        }
    }

    public function suaData() {
        try {
            $sql = "SELECT * FROM data WHERE idFuncionario = :id";
            $stmt = Conexao::getConexao()->query($sql);
            $stmt->bindValue(":id", $data->getID(), PDO::PARAM_INT);
            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $list = array();

            foreach ($lista as $linha) {
                $list[] = $this->listaDatas($linha);
            }

            return $list;

        } catch (PDOException $e) {
            echo "Ocorreu um erro ao tentar Buscar Todos." . $e->getMessage();
        }
    }

    public function editar() {
       try {
           $sql = "SELECT * FROM data WHERE idData = :id";
            $stmt = Conexao::getConexao()->prepare($sql);
           $stmt->bindValue(":id", $_POST['id_edit'], PDO::PARAM_INT);  
            $stmt->execute();
            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
           $list = array();

            foreach ($lista as $linha) {
                $list[] = $this->listaDatas($linha);
           }

            return $list;

       } catch (PDOException $e) {
            echo "Ocorreu um erro ao tentar buscar Data." . $e->getMessage();
        }

    }

    private function listaDatas($linhas) {

        $data = new data();
        $data->setID($linhas['idData']);
        $data->setData($linhas['data']);
    

        return $data;
    }

    public function alterar(Data $data) {
        try {
            $sql = "UPDATE data SET data = :data WHERE idData = :id";

            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":id", $data->getID(), PDO::PARAM_INT);
            $stmt->bindValue(":data", $data->getData(), PDO::PARAM_STR);

            
            return $stmt->execute();

        } catch (PDOException $e) {
            echo "Ocorreu um erro ao tentar atualizar Data." . $e->getMessage();
        }
    }

    public function excluir(Data $data) {
        try {

            $sql = "DELETE FROM data WHERE idData = :id";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":id", $data->getID(), PDO::PARAM_INT);
            return $stmt->execute();

        } catch (PDOException $e) {
            echo "Erro ao Excluir data" . $e->getMessage();
        }
    }

}

?>