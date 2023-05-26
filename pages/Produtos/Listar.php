<table>
    <tr>
        <th>ID</th>
        <th>Descriçao</th>
        <th>Preço</th>
        <th>quantidade</th>
<?php
    include_once("class/Produto.Class.php");
    $produtos = Produto::Listar();
    if($produtos){
        foreach($produtos as $produto){
?>

<tr>
    <td><?=$produto->getCategoria_id();?></td>
    <td><?=$produto->getNome();?></td>
    <td><?=$produto->getPreco();?></td>
    <td><?=$produto->getQuantidade();?></td>
</tr>

<?php
        }
    }
    ?>
</table>