<?php
include_once "select.php";

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $currentData;
    foreach($result as $data){
        if($data['id'] == $id){
            $currentData = $data;
        }
    }
}

?>

<h1>Edição</h1>

<form action='update.php' method="POST">
    <input type="hidden" name='id' value="<?=$currentData['id']?>" />
    <div>
        <input type="text" name="brand" placeholder="Digite marca" value="<?=$currentData['brand']?>" />
    </div>
    <div>
        <input type="text" name="name" placeholder="Digite o nome" value="<?=$currentData['name']?>"/>
    </div>
    <div>
        <input type="text" name="km" placeholder="Digite o km" value="<?=$currentData['km']?>" />
    </div>
    <div>
        <input type="submit" name="submit" value="Atualizar"  />
    </div>

</form>
