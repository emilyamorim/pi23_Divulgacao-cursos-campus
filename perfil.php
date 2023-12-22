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
        * {
  margin: 0;
  padding: 0;
}
body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  font-family: "Arial";
  gap:16px;
  background-image: url("tricodando.png");
  background: linear-gradient(#0d1a06, #008000);

}
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



 
 <div class="container">
 <div class="row">

 <div class="col-3">
 <div class="card">
    <img src="cara.png">
    <div>
      <button>Meus dados</button>
    </div>
  </div>

</div>

  <div class="col-3">
  <div class="card">
    <img src="ensino.png">
    <div>
      <button>Modalidade</button>
    </div>
  </div>

</div>

<div class="col-3">
  <div class="card">
    <img src="bolsa.png">
    <div>
      <button width="100px">Cursos</button>
    </div>
  </div>

</div>

<div class="col-3">
  <div class="card">
    <img src="regua.png">
    <div>
      <button>Área</button>
    </div>
  </div>

  </div>

</div>

  </div>
  
</body>
</html>
