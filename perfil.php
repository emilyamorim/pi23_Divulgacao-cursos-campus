<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <link rel="stylesheet" href="src/css/main.css">
    <!--Google Fonts and Icons-->
    <link
        href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Round|Material+Icons+Sharp|Material+Icons+Two+Tone"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style type="text/css">
  
.card {
  background-color: #fff;
  width: 180px;
  height: 260px;
  border-radius: 12px;
  box-shadow: 4px 4px 12px #aaaa;
}
.card img {
  width: 100%;
  height: 130px;
  border-top-left-radius: 12px;
  border-top-right-radius: 12px;
}
.card div {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 4px;
  height: 50%;
}
.card h1 {
  font-size: 1.2rem;
}
.card h2 {
  font-size: .9rem;
  color: #aaaa;
}
.card button {
  background-color: #2192FF;
  height: 60px;
  border: none;
  padding: 4px;
  width: 100px;
  color: #fff;
  font-size: 1rem;
  font-weight: bold;
  border-radius: 4px;
}
.card button:hover {
  background-color: #137de8;
  cursor: pointer;
}

    </style>
</head>

<body>

<?php include 'bases/menu.php'?>

 
 <div class="container">
 <div class="row">

 <div class="col-3">
 <div class="card">
 <a href="p_meus_dados.php">
    <img src="cara.png" class="img-fluid">
    <div>
      <button>Meus dados</button>
</a>
    </div>
  </div>

</div>

  <div class="col-3">
  <div class="card">
  <a href="p_modalidade.php">
    <img src="ensino.png" class="img-fluid">
    <div>
      <button>Modalidade</button>
</a>
    </div>
  </div>

</div>

<div class="col-3">
  <div class="card">
  <a href="p_cursos.php">
    <img src="bolsa.png" class="img-fluid">
    <div>
      <button width="100px">Cursos</button>
</a>
    </div>
  </div>

</div>

<div class="col-3">
  <div class="card">
  <a href="p_areas.php">
    <img src="regua.png" class="img-fluid">
    <div>
      <button>Área</button>
</a>
    </div>
  </div>

  </div>

</div>

  </div>
  <?php include 'bases/rodape.php'?>
</body>
</html>
