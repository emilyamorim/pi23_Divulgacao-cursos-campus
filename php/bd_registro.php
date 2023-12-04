<?php

$nome = $_POST["nome"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

//Criptografar a senha
$senha_cripto = md5($senha);

//Conectar o banco de dados
include "../banco/conexao.php";
$conn = conectar();

//Definição da String do Insert
$sql = "INSERT INTO usuario
(nome, usuario, senha) VALUES
('$nome', '$usuario', '$senha_cripto');";

//Executar o Insert
$result = $conn->query($sql);

//Verificar se deu certo
if($result){
    //Desconectar o banco
    desconectar($conn);
    //Redirecionar para login
    header("Location: ../login.php");
    die();
}else{
    //Deu errado
    desconectar($conn);
    echo "<p>Deu certo</p>";
}
?>