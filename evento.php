<?php
include_once "config.php";
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
    <?php    
    $sql = $conn->prepare("SELECT id FROM usuario ORDER BY id DESC LIMIT 1");
    $sql->execute();    

    if($sql->rowCount() > 0){
      while($dados = $sql->fetch(PDO::FETCH_ASSOC)){
        echo "<input type='hidden' name='id_usuario' value='{$dados['id']}'>";
      }  
    }
    ?>
    <label>Nome:</label>
    <input type="text" name="nome_evento" id="nome_evento" placeholder="Digite o nome do evento"><br><br>
    <label>Local:</label>
    <input type="text" name="local" id="local" placeholder="Digite o nome do local"><br><br>    
    <input type="submit" name="enviar" placeholder="enviar">
    </form>
</body>
</html>