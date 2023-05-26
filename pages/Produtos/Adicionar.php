<?php
    include_once("class/Produto.Class.php");

    if(isset($_POST["botão"]) && $_POST["botão"] == "Salvar"){
       echo "Formulário enviado";
 
       $produto = new Produto();
       $produto->setCategoria_id($_POST["categoria_id"]);
       $produto->setNome($_POST["nome"]);
       $produto->setPreco($_POST["preco"]);
       $produto->setQuantidade($_POST["quantidade"]);
       $produto->adicionar();
    }
    ?>
<form method="POST" action="">
    Produto: <input type="text"   name="categoria_id"/><br/>
             <input type="text"   name="nome"/><br/>
             <input type="number" name="preco"/><br/>
             <input type="number" name="quantidade"/><br/>
             <input type="submit" name="botão" value="Salvar">
</form>