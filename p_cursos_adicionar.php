<?php include 'sessao/verificar_autenticacao.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Núcleos de Pesquisa</title>

  <?php include 'bases/head.php'; ?>

</head>

<body>
  <?php include 'bases/menu.php'; ?>
 <?php if(session_id() == '')
            session_start();
        ?>
  <div class="container">

<div class="row mt-5 mb-5">
 <div class="col-lg-6">
   <h2>Cadastro de Cursos</h2>
   <form action="php/bd_p_cursos_adicionar.php" method="post" enctype="multipart/form-data">
 
  <p>
     <label for="nome">Nome:</label>
     <input type="text" name="nome" id="nome">
 </p>

<p>
     <label for="descrição">Descrição:</label>
     <input type="text" name="descrição" id="descrição">
 </p>

 <p>
     <label for="carga_horaria">Carga Horaria:</label>
     <input type="text" name="carga_horaria" id="carga_horaria">
 </p>

 <p>
    Selecione uma modalidade:<br />
    <?php
        include "conexao/conexao.php";
        $conn = conectar();
        $sql = "SELECT * FROM modalidade";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<input type='radio' name='area' value='".$row["id"]."' /> ".$row["nome"]."<br />";
        }
        } else {
        echo "Nenhuma modalidade cadastrada";
        }
    ?>
 </p>
 

 <p>
    Selecione uma área:<br />
    <?php
        include "conexao/conexao.php";
        $conn = conectar();
        $sql = "SELECT * FROM area_curso";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<input type='radio' name='area' value='".$row["id"]."' /> ".$row["nome"]."<br />";
        }
        } else {
        echo "Nenhuma área cadastrada";
        }
    ?>
 </p>

 
 
 <!--codigo int not null auto_increment primary key,
    nome VARCHAR(500) not null,
    sigla VARCHAR(50) not null,
    imagem VARCHAR(500) not null,
    data_criacao DATE not null,
    coordenador VARCHAR(500) not null,
    area_id int,-->


 <p><input type="submit" value="Cadastrar"></p>
</form>
 </div>
 <div class="col-lg-6">
   <img class="img-fluid rounded" src="src/img/campus.jpg" alt="">
 </div>
</div>
</div>

   <?php include 'bases/rodape.php'; ?>

</body>

</html>
