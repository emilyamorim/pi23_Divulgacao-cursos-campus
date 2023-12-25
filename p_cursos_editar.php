<?php include 'sessao/verificar_autenticacao.php'; ?>

<?php

$id = $_GET["id"];

include "conexao/conexao.php";

$conn = conectar();

$sql = "SELECT * FROM cursos where id=$id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $nome_area = $row["nome"];
  }
} else {
  echo "<td>Nenhum curso cadastrado</td><td></td><td></td>";
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
   <h2>Edição de Curso</h2>
   <form action="php/bd_p_cursos_editar.php" method="post">
 <p>
     <label for="nome">Nome:</label>
     <input type="text" name="nome" id="nome" value="<?php echo $nome; ?>" />
 </p>

<p>
     <label for="descricao">Descrição:</label>
     <input type="text" name="descricao" id="descricao" value="<?php echo $descricao; ?>" />
 </p>

 <p>
     <label for="carga_horaria">Carga Horaria:</label>
     <input type="text" name="carga_horaria" id="carga_horaria" value="<?php echo $carga_horaria; ?>" />
 </p>

 <p>
     <label for="modalidade">Modalidade:</label>
     <input type="text" name="modalidade" id="modalidade" value="<?php echo $modalidade; ?>" />
 </p>

 <p>
     <label for="area">Area:</label>
     <input type="text" name="area" id="area" value="<?php echo $area; ?>" />
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
