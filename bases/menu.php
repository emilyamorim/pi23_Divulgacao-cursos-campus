<nav>
    <div class="logo">
        <a href=""><img src="src/imagens/iconecang.png" width="200"></a>
    </div>
    <ul class="menu">
        <li id="Home"><a href="index.php"><i class="bi bi-house-fill"></i> Home</a></li>
    <?php 
          // Verificar se sessão já foi iniciada anteriormentre
          if(session_id() == '')
            session_start();
          
          if (!isset($_SESSION['usuario'])) {
          ?>
        <li id="Cadastro"><a href="cadastro.php"><i class="bi bi-person-fill-add"></i> Cadastro</a> </li>
        <li id="login"><a href="login.php"><i class="bi bi-person-bounding-box"></i> Login</a></li>
        <?php 
          }else{
          ?>
        <li id="Perfil"><a href="perfil.php"><i class="bi bi-person-workspace"></i> Perfil</a></li>
        <li id="Sair"><a href="sessao/remover_sessao.php"><i class="bi bi-person-fill-dash"></i> Sair</a></li>
        <?php 
          }
          ?>
    </ul>
</nav>