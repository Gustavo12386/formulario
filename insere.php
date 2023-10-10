<?php
include_once "config.php";


if(isset($_POST['enviar'])){
  $id = $_POST['id_usuario'];  
  $nome = $_POST['nome_evento'];
  $local = $_POST['local'];  

  $sql = $conn->prepare("INSERT INTO evento(id_usuario, nome_evento, local) VALUES(:id_usuario, :nome_evento, :local)");
  $sql->bindValue(':id_usuario', $id);
  $sql->bindValue(':nome_evento', $nome);
  $sql->bindValue(':local', $local);  
  $sql->execute();

}

?>