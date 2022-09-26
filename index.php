<?php
include_once "select.php";   
?>
<a href="inserir.php"><h3>Adicionar na lista</h3></a>

<hr>
<table> 
    <thead>
        <tr>
            <th>#</th>
            <th>Marca</th>
            <th>Nome</th>
            <th>Kilometragem</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php  foreach($result as $item): ?>
        <tr>
            <td><?=$item['id']?></td>
            <td><?=$item['brand']?></td>
            <td><?=$item['name']?></td>
            <td><?=$item['km']?></td>
            <td>
            <a href="edit.php?id=<?=$item['id']?>">Editar</a>
            <a href="delete.php?id=<?=$item['id']?>">Deletar</a>
            </td>
        </tr>
        <?php endforeach; ?>
        <td></td>
    </tbody>
</table>