<?php 

// Criação da classe Usuario com o CRUD

class FuncionarioDao {

    public function criar(Funcionario $funcionario) {
        try {

            $sql = "INSERT INTO funcionario (nome, cpf, telefone, idade, senha) VALUES (:nome, :cpf, :telefone, :idade, :senha)";

            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":nome", $funcionario->getNome(), PDO::PARAM_STR);
            $stmt->bindValue(":cpf", $funcionario->getCPF(), PDO::PARAM_STR);
            $stmt->bindValue(":telefone", $funcionario->getTelefone(), PDO::PARAM_STR);
            $stmt->bindValue(":idade", $funcionario->getIdade(), PDO::PARAM_STR);
            $stmt->bindValue(":senha", $funcionario->getSenha(), PDO::PARAM_STR);
            
            return $stmt->execute();

        } catch (PDOException $e) {
            echo "<script> alert('Observe os dados inseridos! Não pode ser cadastrado CPFs iguais no banco de dados.') </script>";
           echo "<script>location.href = '../views/listar_funcionarios/index.php';</script>" ;       }
        
    }

    public function listar() {
        try {
            $sql = "SELECT * FROM funcionario order by nome asc";
            $stmt = Conexao::getConexao()->query($sql);
            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $list = array();

            foreach ($lista as $linha) {
                $list[] = $this->listaFuncionarios($linha);
            }

            return $list;

        } catch (PDOException $e) {
            echo "Ocorreu um erro ao tentar Buscar Todos." . $e->getMessage();
        }
    }

    public function editar() {
        try {
            $sql = "SELECT * FROM funcionario WHERE idFuncionario = :id";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":id", $_POST['id_edit'], PDO::PARAM_INT);
            $stmt->execute();
            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $list = array();

            foreach ($lista as $linha) {
                $list[] = $this->listaFuncionarios($linha);
            }

            return $list;

        } catch (PDOException $e) {
            echo "Ocorreu um erro ao tentar buscar o Funcionario." . $e->getMessage();
        }

    } 

    public function user() {
        try {
            $sql = "SELECT * FROM funcionario WHERE idFuncionario = :id";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":id", $_SESSION['funcionario_session'] , PDO::PARAM_INT);
            $stmt->execute();
            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $list = array();
    
            foreach ($lista as $linha) {
                $list[] = $this->listaFuncionarios($linha);
            }

            return $list;

        } catch (PDOException $e) {
            echo "Ocorreu um erro ao tentar buscar Funcionário." . $e->getMessage();
        }

    } 
     
    public function listarF() {
 
        try {

            $sql = "SELECT * FROM funcionario where idFuncionario = :id";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":id", $_SESSION['funcionario_session'], PDO::PARAM_STR);
            $stmt->execute();

            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $list = array();
        
            foreach ($lista as $linha) {
                $list[] = $this->listaFuncionarios($linha);
            }
        
                return $list; 
            
        } catch (PDOException $e) {
            //echo "Erro ao carregar resultados." . $e->getMessage();
        }
    }

    private function listaFuncionarios($linhas) {

        $funcionario = new Funcionario();
        $funcionario->setID($linhas['idFuncionario']);
        $funcionario->setNome($linhas['nome']);
        $funcionario->setCPF($linhas['cpf']);
        $funcionario->setTelefone($linhas['telefone']);
        $funcionario->setIdade($linhas['idade']);

        return $funcionario;
    }

    public function alterar(Funcionario $funcionario) {
        try {
            $sql = "UPDATE funcionario SET nome = :nome, cpf = :cpf, telefone = :telefone, idade = :idade, senha = :senha WHERE idFuncionario = :id";

            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":id", $funcionario->getID(), PDO::PARAM_INT);
            $stmt->bindValue(":nome", $funcionario->getNome(), PDO::PARAM_STR);
            $stmt->bindValue(":cpf", $funcionario->getCPF(), PDO::PARAM_STR);
            $stmt->bindValue(":telefone", $funcionario->getTelefone(), PDO::PARAM_STR);
            $stmt->bindValue(":idade", $funcionario->getIdade(), PDO::PARAM_STR);
            $stmt->bindValue(":senha", $funcionario->getSenha(), PDO::PARAM_STR);
            
            return $stmt->execute();

        } catch (PDOException $e) {
            echo "Ocorreu um erro ao tentar atualizar Funcionário." . $e->getMessage();
        }
    }

    public function excluir(Funcionario $funcionario) {
        try {

            $sql = "DELETE FROM funcionario WHERE idFuncionario = :id";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":id", $funcionario->getID(), PDO::PARAM_INT);
            return $stmt->execute();

        } catch (PDOException $e) {
            echo "Erro ao Excluir funcionario" . $e->getMessage();
        }
    }

    public function login(Funcionario $funcionario) {
		try {
			$sql = "SELECT * FROM funcionario WHERE cpf = :cpf";
			$stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":cpf", $funcionario->getCpf(), PDO::PARAM_STR);
            $stmt->execute();
			$funcionario_linha = $stmt->fetch(PDO::FETCH_ASSOC);
					
			if($stmt->rowCount() == 1) {

				if(password_verify($funcionario->getSenha(), $funcionario_linha['senha'])) {

			$_SESSION['funcionario_session'] = $funcionario_linha['idFuncionario'];
            $_SESSION['nome'] = $funcionario->getNome();
            
            $_SESSION['cpf'] = $funcionario->getCpf();
            $_SESSION['telefone'] = $funcionario->getTelefone();
             session_start();
			return true;
                    
				} else {
					return false;
				}
			}
		}
		catch(PDOException $e) {

			echo "Erro ao tentar realizar o login do funcionario" . $e->getMessage();
		}
	}

    public function checkLogin() {
		if(isset($_SESSION['funcionario_session'])) {
			return true;
		}else {
            return false;
        }
	}

    public function logout() {
        session_start();
		session_destroy();
		unset($_SESSION['funcionario_session']);
		return true;
	}

}

?>