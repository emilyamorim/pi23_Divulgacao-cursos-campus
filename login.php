

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
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
            height: 81vh;
            margin: 0;
            padding: 0;
            background-color: rgb(27, 87, 27);
        }

        .center {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url(../images/login-back.png);
            background-size: cover;
        }

        form {
            width: 400px;
            height: 450px;
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

        .cabeca{
             background-color: white;
             width: 100%;
            height: 65px;
        }

        footer{
            background-color: white;
            text-align: center;
            color:black;
            height: 48px;
            padding-top: 25px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            
        }

        img{
            margin-left: 15px;
            margin-top: 3px;
        }

        .inconelogin{
            background-color: rgb(27, 87, 27);
            border-radius: 5mm;
            float: right;
        }
        h2{
            color:white;
            text-align: center;
        }
    </style>


</head>

<body>
    
    <div class="cabeca">
        <div class="ifimg">
        <img src="imagens/logoifrn.png" alt="logo do ifrn" width="190" height="55"/>
        </div>
        <div class="iconelogin">
            <p>login</p>
        </div>
        </div>
    <div class="center">
        
        <form action="">
            <h2>Login</h2> 
            <span class="inputs">
                <span class="inputf">
                    <input type="email" class="input" placeholder="Email" />
                    <span class="label">Email</span>
                    <span class="material-icons icon">email</span>
                </span>
                <span class="inputf">
                    <input type="password" class="input" placeholder="Password" />
                    <span class="label">Password</span>
                    <span class="material-icons icon">lock</span>
                </span>
            </span>
            <div class="links">
                <a href="#">Forgot Password</a>
                <label for="remember">
                    <input type="checkbox" id="remember" />
                    Remember Me
                </label>
            </div>
            <button type="button" class="btn">
                <span>Login</span>
                <div class="dots">
                    <div class="dot" style="--delay: 0s"></div>
                    <div class="dot" style="--delay: 0.25s"></div>
                    <div class="dot" style="--delay: 0.5s"></div>
                </div>
            </button>
            <div class="text">
                New user? Create an account <a href="#">Register</a>
            </div>
        </form>
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

    <footer>
        Desenvolvedores: A. Paula, Denise S., Emily A., J. Vitor, M. Catarini, Matheus N.
      
    </footer>
</body>

</html>
