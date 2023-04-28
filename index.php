<?php
include_once("class/Categoria.Class.php");
include_once("class/Produto.Class.php");

$categoria = new Categoria(1);
$produto   = new Produto();
echo $produto->getId();
echo $produto->getNome();
echo $produto->getPreco();
?>
