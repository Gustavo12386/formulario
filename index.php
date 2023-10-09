<?php
include_once "config.php";
if(isset($_POST['enviar'])){
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  
  $sql = $conn->prepare("INSERT INTO usuario(nome, email) VALUES(:nome, :email)");
  $sql->bindValue(':nome', $nome);
  $sql->bindValue(':email', $email);
  $sql->execute();
  $conn->lastInsertId();

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
    
    <form action="index.php" method="post">
    <label>Nome:</label>
    <input type="input" name="nome" id="nome" placeholder="Digite seu nome"><br><br>
    <label>Email:</label>
    <input type="input" name="email" id="email" placeholder="Digite seu email"><br><br>
    <input type="submit" name="enviar" placeholder="enviar">
    </form>
</body>
</html>