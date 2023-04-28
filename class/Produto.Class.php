<?php
include_once("interfaces/crud.php");
include_once("class/DB.Class.php");

    class Produto implements crud{
        protected $id;
        protected $categoria_id;
        protected $nome;
        protected $preco;
        protected $quantidade;

        public function __construct($id=false){
            if($id){
            $sql     = "SELECT * FROM produtos WHERE id=?";
            $conexao = DB::conexao();
            $stmt    = $conexao->prepare($sql);
            $stmt->bindParam(1,$id,PDO::PARAM_INT);
            $stmt->execute();
            foreach($stmt as $obj){
                $this->setId($obj["id"]);
                $this->setCategoria_id($obj["categoria_id"]);
                $this->setNome($obj["nome"]);
                $this->setPreco($obj["preco"]);
                $this->setQuantidade($obj["quantidade"]);
            }
          }
        }

        public function setId($i){
            $this->id = $i;
        }
        public function setCategoria_id($c){
            $this->categoria_id = $c;
        }
        public function setNome($n){
            $this->nome = $n;
        }
        public function setPreco($p){
            $this->preco = $p;
        }
        public function setQuantidade($q){
            $this->preco = $q;
        }


        public function getId(){
            return $this->id;
        }
        public function getCategoria_id(){
            return $this->categoria_id;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getPreco(){
            return $this->preco;
        }
        public function getQuantidade(){
            return $this->quantidade;
        }

        public function adicionar(){} 
        public function listar(){} 
        public function atualizar(){} 
        public function excluir(){} 
    }

?>