<?php
class Categoria{
    protected $id;
    protected $nome;

    public function setId($i){
        $this->id = $i;
    })
    public function setNome($n){
        $this->nome = $n;
    }

    public function getId(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome;
    }
}
?>