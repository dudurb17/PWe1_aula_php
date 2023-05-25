<?php 
    class BD{
    private $host = "localhost";
    private $dbname = "db_ex";
    private $port = 3306;
    private $usuario = "root";
    private $senha = "";
    private $db_charset = "utf8";

        public function conn(){
            $conn = "mysql:host=$this->host;dbname=$this->dbname;port=$this->port";

            return new PDO(
                $conn,
                $this->usuario,
                $this->senha,
                [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES " . $this->db_charset]
            );
            
            
        }

        public function inserir($dados){
            $conn = $this->conn();
            $tabela=$dados['submit'];
            $sql = "INSERT INTO $tabela (name, cpf, idade) VALUES (?, ?, ?);";
            $st = $conn->prepare($sql);
            $st->execute([$dados['name'], $dados['cpf'], $dados['idade'],]);
            
            
            
        }
        public function select()
        {
            $conn = $this->conn();
            $sql = "SELECT * FROM usuario;";
            $st = $conn->prepare($sql);
            $st->execute();
    
            return $st->fetchAll(PDO::FETCH_CLASS);
        }
    }
?>