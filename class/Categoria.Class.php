<?php
include_once("interfaces/crud.php");
class Categoria implements crud{
    protected $id;
    protected $nome;

    public function __construct($id = false){
        if($id){
        echo "Testando Construtor<p>";
      }
    }            

    public function setId($i){
        $this->id = $i;
    }
    public function setNome($n){
        $this->nome = $n;
    }

    public function getId(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome;
    }
  
    public function adicionar(){} 
    public function listar(){} 
    public function atualizar(){} 
    public function excluir(){} 

}
?>
