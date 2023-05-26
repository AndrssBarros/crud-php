<?php
    Class Vendedores implements crud{
        //numero do cadastro
        protected $ncadastro;
        protected $nome;

        public function __construct($Setor=false){
            if($Setor){
            $sql     = "SELECT * FROM categoria WHERE Setor=?";
            $conexao = DB::conexao();
            $stmt    = $conexao->prepare($sql);
            $stmt->bindParam(5,$Setor,PDO::PARAM_INT);
            $stmt->execute();
            foreach($stmt as $obj){
                $this->setSetor($obj["Setor"]);
                $this->setNome($obj["Nome"]);
            }
    }   
    public function setSetor($S){
        $this->setor = $S;
    }
    public function setNome($n){
        $this->nome = $n;
    }

    public function getSetor(){
        return $this->S;
    }
    public function getNome(){
        return $this->n;
    }

    public function adicionar(){
        try {$sql = "INSERT INTO produtos(categoria_id,nome,preco,quantidade)
            VALUES(?,?,?,?)";

            $conexao = DB::conexao();
            $stmt    = $conexao->prepare($sql);
            $stmt->bindParam(1,$this->categoria_id);
            $stmt->bindParam(2,$this->nome);
            $stmt->bindParam(3,$this->preco);
            $stmt->bindParam(4,$this->quantidade);
            $stmt->execute();
            }catch(PDOException $e){
                echo "Erro na Função adicionar Produto" . $e->getMessage();
            }
        } 
public static function listar(){
    $sql     = "SELECT * FROM Vendedores";
    $conexao = DB::conexao();
    $stmt    = $conexao->prepare($sql);
    $stmt->execute();
    $vendedor= $stmt->fetchAll();
    if($vendedor){
    $objetos = array();
    foreach($vendedor{
        $temporario = new Vendedor();
        $temporario->setId($vendedor['Setor']);
        $temporario->setNome($vendedor['Nome']);
        $objetos[] = $temporario;
    }
    return $objetos;
}
return false;
}    
    public static function listar(){
        $sql     = "SELECT * FROM vendedores";
        $conexao = DB::conexao();
        $stmt    = $conexao->prepare($sql);
        $stmt->execute();
        
    } 
    public function atualizar(){} 
    public function excluir(){} 
    ?>