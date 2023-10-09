<?php
include_once "config.php";


if(isset($_POST['enviar'])){
  $nome = $_POST['nome_evento'];
  $local = $_POST['local'];
  $id = $_POST['id_usuario'];

  $sql = $conn->prepare("INSERT INTO evento(nome_evento, local, id_usuario) VALUES(:nome_evento, :local, :id_usuario)");
  $sql->bindValue(':nome_evento', $nome);
  $sql->bindValue(':local', $local);
  $sql->bindValue(': id_usuario', $id);
  
  $sql->execute();

}

?>
<?php
 if(!empty($_GET['id'])){

    $id = $_GET['id']; 
    $sql = $conexao_pdo->prepare("SELECT * FROM usuario WHERE id=?");
    $sql->execute(array($id));
   
    if($sql->rowCount() > 0)
    {
     while($row = $sql->fetch(PDO::FETCH_ASSOC))
     {
         $nome = $row['nome'];           
        
     }
   }
    else
   {
     header("Location: evento.php");
   }
   
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
    <form action="evento.php" method="post">
    <input type="hidden" name="id_usuario" id="id_usuario">
    <input type="hidden" name="nome" id="nome">
    <label>Nome:</label>
    <input type="input" name="nome_evento" id="nome_evento" placeholder="Digite o nome do evento"><br><br>
    <label>Local:</label>
    <input type="input" name="local" id="local" placeholder="Digite o nome do local"><br><br>

    <input type="submit" name="enviar" placeholder="enviar">
    </form>
</body>
</html>