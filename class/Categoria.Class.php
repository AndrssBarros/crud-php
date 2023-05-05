<?php
include_once("interfaces/crud.php");
class Categoria implements crud{
    protected $id;
    protected $nome;
 
    public function __construct($id=false){
      if($id){
      $sql     = "SELECT * FROM categoria WHERE id=?";
      $conexao = DB::conexao();
      $stmt    = $conexao->prepare($sql);
      $stmt->bindParam(1,$id,PDO::PARAM_INT);
      $stmt->execute();
      foreach($stmt as $obj){
          $this->setId($obj["id"]);
          $this->setNome($obj["nome"]);
      }
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
    public static function listar(){} 
    public function atualizar(){} 
    public function excluir(){} 
}

?>
