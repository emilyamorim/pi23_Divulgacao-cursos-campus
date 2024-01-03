<?php
if(session_id() == '')
  session_start();
?>
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

    <style type="text/css">
        body {
            width: 100%;
            height: 93vh;
            margin: 0;
            padding: 0;
            background: linear-gradient(#0d1a06, #008000);
        }

        .center {
            width: 100%;
            height: 80%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-size: cover;
            margin: 50px;
        }

        form {
            width: 400px;
            height: 600px;
            box-sizing: border-box;
            border-radius: 5mm;
            padding: 40px 30px;
            backdrop-filter: blur(5px) saturate(160%);
            -webkit-backdrop-filter: blur(5px) saturate(160%);
            background: #022800;
            /* Changed to solid black */
            border: 0.5mm solid #022800;
            position: relative;
        }

        .title {
            width: 100%;
            font-family: poppins;
            font-size: 30px;
            text-align: center;
            margin-bottom: 20px;
            color: white;
        }

        .inputs {
            width: 100%;
            height: fit-content;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .inputf {
            width: 100%;
            height: fit-content;
            box-sizing: border-box;
            margin: 15px 0;
            position: relative;
        }

        .input {
            width: 100%;
            height: 45px;
            box-sizing: border-box;
            border: none;
            border-bottom: 0.55mm solid rgb(255, 255, 255);
            background: none;
            padding: 0 15px;
            font-family: poppins;
            font-size: 15px;
            color: white;
            outline: none;
        }

        .input::placeholder {
            color: rgb(241, 232, 232);
        }

        .label {
            position: absolute;
            top: 0;
            left: 0;
            color: white;
            font-size: 13px;
            font-weight: 500;
            font-family: poppins;
            opacity: 0;
            z-index: -1;
            transition: 0.25s ease-out;
        }

        .input:focus+.label {
            top: -20px;
            opacity: 1;
            z-index: 1;
        }

        .input:focus::placeholder {
            opacity: 0;
        }

        .input:not(:placeholder-shown)+.label {
            top: -20px;
            opacity: 1;
            z-index: 1;
        }

        .icon {
            color: white;
            position: absolute;
            right: 0px;
            top: 50%;
            transform: translate(0, -50%);
            font-size: 18px;
        }

        .links {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 12px;
            font-family: poppins;
            margin-bottom: 50px;
            color: white;
        }

        .links label {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .links a {
            font-weight: 600;
            color: white;
        }

        .btn {
            width: 100%;
            height: 40px;
            background: white;
            outline: none;
            border: none;
            cursor: pointer;
            border-radius: 6mm;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }

        .btn span {
            color: rgb(40, 40, 40);
            font-family: poppins;
            font-size: 16px;
        }

        .text {
            width: 100%;
            font-family: poppins;
            font-size: 13px;
            text-align: center;
            color: rgb(240, 240, 240);
        }

        .text a {
            color: white;
            font-weight: 600;
        }

        .dots {
            width: fit-content;
            height: fit-content;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(0, 0, 0, 0.1);
            margin: 1px;
            animation: load 0.5s ease-out infinite alternate var(--delay);
        }

        @keyframes load {
            0% {
                background: rgb(0, 0, 0);
            }

            50%,
            100% {
                background: rgba(0, 0, 0, 0.1);
            }
        }

        .btn .dots {
            display: none;
        }

        .btn span {
            display: block;
        }

        .btn.active .dots {
            display: flex;
        }

        .btn.active span {
            display: none;
        }

        .input.active {
            animation: shake 0.25s ease-in-out 3;
        }

        @keyframes shake {
            0% {
                margin-left: 0px;
            }

            25% {
                margin-left: 5px;
            }

            75% {
                margin-left: -5px;
            }

            100% {
                margin-left: 0px;
            }
        }

        .imguser {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    <?php include 'bases/head.php'?>
</head>

<body>
<?php include 'bases/menu.php'?>
    <div class="center">
        
        <form action="php/bd_registro.php" method="post">
            <div class="imguser">
                <img src="src/imagens/icone.png" alt="usuario" width="40%" height="100%"/> 
            </div>

            <div class="title">Cadastro</div>
            <span class="inputs">
                <span class="inputf">
                    <input type="name" class="input" placeholder="Nome Completo" name="nome" id="nome"/>
                    <span class="label">Nome Completo</span>
                    <span class="material-icons icon">nome</span>
                </span>
                <!--<span class="inputf">
                    <input type="email" class="input" placeholder="Email" />
                    <span class="label">Email</span>
                    <span class="material-icons icon">email</span>
                </span>-->
                <span class="inputf">
                    <input type="name" class="input" placeholder="Nome de usuario" name="usuario" id="usuario" />
                    <span class="label">Nome de usuario</span>
                    
                </span>
                <span class="inputf">
                    <input type="password" class="input" placeholder="Criar Senha" name="senha" id="senha" />
                    <span class="label">Criar Senha</span>
                    <span class="material-icons icon">lock</span>
                </span>
                <!--<span class="inputf">
                    <input type="password" class="input" placeholder="Confirmar Senha" />
                    <span class="label">Confirmar Senha</span>
                    <span class="material-icons icon">lock</span>
                </span>-->
            </span>
            
            <!--<button type="submit" class="btn">
                <span>Administrador</span>
                <div class="dots">
                    <div class="dot" style="--delay: 0s"></div>
                    <div class="dot" style="--delay: 0.25s"></div>
                    <div class="dot" style="--delay: 0.5s"></div>
                </div>
            </button>
            <button type="submit" class="btn">
                <span>Coordenador</span>
                <div class="dots">
                    <div class="dot" style="--delay: 0s"></div>
                    <div class="dot" style="--delay: 0.25s"></div>
                    <div class="dot" style="--delay: 0.5s"></div>
                </div>
            </button>-->
            <button type="submit" class="btn">
                <span>Cadastrar</span>
                <div class="dots">
                    <div class="dot" style="--delay: 0s"></div>
                    <div class="dot" style="--delay: 0.25s"></div>
                    <div class="dot" style="--delay: 0.5s"></div>
                </div>
                </button>
    </div>

    <script>
        var btn = document.querySelector(".btn");
        var inputs = document.querySelectorAll(".input");
        btn.onclick = function () {
            btn.classList.toggle("active");
            setTimeout(() => {
                btn.classList.toggle("active");
                inputs[1].classList.toggle("active");
            }, 1500);
            setTimeout(() => {
                inputs[1].classList.toggle("active");
            }, 3000);
        };
    </script>
    <?php include 'bases/rodape.php'?>
</body>

</html>