<?php

$nome = $_POST["nome"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

//Criptografar a senha
$senha = md5($senha);
echo $senha;
//Conectar o banco de dados
include "../conexao/conexao.php";
$conn = conectar();

//Definição da String do Insert
$sql = "INSERT INTO usuario
(nome, usuario, senha) VALUES
('$nome', '$usuario', '$senha');";
echo $sql;
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

/*
<?php

$nome = $_POST["nome"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$senha = md5($senha);

include "../banco/conexao.php";

$conn = conectar();

$sql = "INSERT INTO usuario 
(nome, usuario, senha)
VALUES ('$nome', '$usuario', '$senha');";

$result = $conn->query($sql);
if($result){
    desconectar($conn);
    header("Location: ../login.php");
    die();
}else{
    desconectar($conn);
    echo "<p>Problema</p>";
}

?>
*/
?>