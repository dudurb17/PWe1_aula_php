<?php 
    include "../modal/BD.class.php";
    class ContatoController{
        private $model;
        private $table="usuario";
        public function __construct(){
            $this->model =new BD();
        }
        public function salvar($dados){
        $this->model->inserir($this->table, $dados);
         
        }
        public function atualizar($dados){
            $this->model->atualizar($this->table, $dados);
        }
        public function carregar(){
            $this->model->select($this->table);
        }
        public function pesquisar($dados){
            $this->model->pesquisar($this->table, $dados);
        }
        public function deletar($id){
            $this->model->deletar($this->table,$id);
        }
        public function buscar($id){
            $this->model->buscar($this->table,$id);
        }
        
        
    }
?>