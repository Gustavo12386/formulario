<?php
include_once "config.php";

if(!empty($_GET['id_usuario'])){

    $id = $_GET['id_usuario']; 
    $sql2 = $conexao_pdo->prepare("SELECT id FROM usuario WHERE ORDER BY id DESC LIMIT 1");
    $sql2->execute(array($id)); 
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>    
    <form action="insere.php" method="post">
    <input type="hidden" name="id_usuario" value="<? echo $id?>">    
    <label>Nome:</label>
    <input type="input" name="nome_evento" id="nome_evento" placeholder="Digite o nome do evento"><br><br>
    <label>Local:</label>
    <input type="input" name="local" id="local" placeholder="Digite o nome do local"><br><br>    
    <input type="submit" name="enviar" placeholder="enviar">
    </form>
</body>
</html>