<?php

$nome = $_POST["nome"];

include "../conexao/conexao.php";

$conn = conectar();

$sql = "INSERT INTO area_curso (nome) VALUES ('$nome');";

$result = $conn->query($sql);
if($result){
    desconectar($conn);
    header("Location: ../p_areas.php");
    die();
}else{
    desconectar($conn);
    echo "<p>Problema</p>";
}

?>