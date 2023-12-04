<?php

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

//Criptografar a senha
$senha_cripto = md5($senha);

//Conectar o banco de dados
include "../banco/conexao.php";
$conn = conectar();

//Criar a String de Consulta
$sql = "SELECT * FROM usuario
WHERE usuario = '$usuario' and
senha = '$senha_cripto';";

//Executar a consulta
$result = $conn->query($sql);

//Verificar se retornou alguma coisa
if($result->num_rows > 0){
    //Retornou e pode autenticar
    //Retornar nome do usuário
    while($row = $result->fect_assoc()){
        //Adicionar o nome à sessão
        session_star();
        $_SESSION["usuario"] = $row["nome"];
    }
    desconectar($conn);
    header("Location: ../perfil.php");
    die();
}else{
    //Não retornou e não autentica
    desconectar($conn);
    header("Locantion> ../login.php");
    die();
}

?>