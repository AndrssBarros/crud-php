<?php
    class Produto{
        protected $id;
        protected $categoria_id;
        protected $nome;
        protected $preco;
        protected $quantidade;

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
    }

?>