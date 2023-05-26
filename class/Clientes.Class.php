<?php
Class Cliente{
    protected $nome;
    protected $endereco;
    protected $compras;

    public function __construct($id=false){
        if($id){
        $sql     = "SELECT * FROM cliente WHERE id=?";
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
}
?>