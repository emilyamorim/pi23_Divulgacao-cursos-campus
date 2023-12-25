<?php

$nome = $_POST["nome"];

include "../conexao/conexao.php";

$conn = conectar();

$sql = "INSERT INTO modalidade (nome) VALUES ('$nome');";

$result = $conn->query($sql);
if($result){
    desconectar($conn);
    header("Location: ../p_modalidades.php");
    die();
}else{
    desconectar($conn);
    echo "<p>Problema</p>";
}

?>