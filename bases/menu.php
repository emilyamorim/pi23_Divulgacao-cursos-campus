<nav>
    <div class="logo">
        <a href=""><img src="src/imagens/iconecang.png" width="200"></a>
    </div>
    <ul class="menu">
        <li id="login"><a href="index.php">Home</a></li>
    <?php 
          // Verificar se sessão já foi iniciada anteriormentre
          if(session_id() == '')
            session_start();
          
          if (!isset($_SESSION['usuario'])) {
          ?>
        <li id="login"><a href="cadastro.php">Cadastro</a></li>
        <li id="login"><a href="login.php">Login</a></li>
        <?php 
          }else{
          ?>
        <li id="login"><a href="perfil.php">Perfil</a></li>
        <li id="login"><a href="sessao/remover_sessao.php">Sair</a></li>
        <?php 
          }
          ?>
    </ul>
</nav>