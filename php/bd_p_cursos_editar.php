<?php

$id = $_POST["id"];
$nome = $_POST["nome"];

include "../conexao/conexao.php";

$conn = conectar();

$sql = "UPDATE curso SET nome='$nome' WHERE id=$id;";

$result = $conn->query($sql);
if($result){
    desconectar($conn);
    header("Location: ../p_cursos.php");
    die();
}else{
    desconectar($conn);
    echo "<p>Problema</p>";
}

?>