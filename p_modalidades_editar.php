<?php include 'sessao/verificar_autenticacao.php'; ?>

<?php

$id = $_GET["id"];

include "conexao/conexao.php";

$conn = conectar();

$sql = "SELECT * FROM modalidade where id=$id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $nome = $row["nome"];
  }
} else {
  echo "<td>Nenhuma modalidade cadastrada</td><td></td><td></td>";
}

desconectar($conn);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Núcleos de Pesquisa</title>

  <?php include 'bases/head.php'; ?>

</head>

<body>
  <?php include 'bases/menu.php'; ?>

  <div class="container">

<div class="row mt-5 mb-5">
 <div class="col-lg-6">
   <h2>Edição de Modalidade</h2>
   <form action="php/bd_p_modalidades_editar.php" method="post">
 <p>
     <label for="nome">Nome:</label>
     <input type="text" name="nome" id="nome" value="<?php echo $nome; ?>" />
 </p>

<input type="hidden" name="id" value="<?php echo $id; ?>" />

 <p><input type="submit" value="Cadastrar"></p>
</form>
</div>
 
 </div>
 </div>
   <?php include 'bases/rodape.php'; ?>

</body>

</html>
