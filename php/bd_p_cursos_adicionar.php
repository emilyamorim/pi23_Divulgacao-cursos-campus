<?php
if(session_id() == '')
  session_start();
?>
<?php

$nome = $_POST["nome"];
$nome = $_POST["descricao"];
$nome = $_POST["carga_horaria"];
$nome = $_POST["modalidade"];
$nome = $_POST["area"];

include "../conexao/conexao.php";

$conn = conectar();

$sql = "INSERT INTO curso (nome, descricao, carga_horaria, modalidade, area) 
VALUES ('$nome', '$descricao', '$carga_horaria', '$modalidade', '$area');";

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