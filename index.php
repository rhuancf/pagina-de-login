<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300&display=swap" rel="stylesheet">
</head>

<body>
    <div class="login">
        <h2 id="titulologin">Login</h2><br>
        <h3 id="linha"> </h3>
        <form action="login.php" method="post">
            <p><label id="email"><b>E-mail:</b></label></p> <input id="campoEmail" type="text" name="campoEmail" required></p>
            <p><label id="senha"><b>Senha:</b></label></p>
            <p><input id="campoSenha" type="password" name="campoSenha" required></p>
            <p><input id="botaoEntrar" class="botao" type="submit" name="entrar" value="Entrar" onclick="adm()" /></p>
        </form>
        <form action="cadastro.php" method="post">
            <a id="botaoEsqueci" onclick="esqueci()"> Esqueci a senha </a>
            <input id="botaoCadastrar" class="botao" type="submit" name="enviar" value="Cadastre-se" />
        </form>
    </div>





    <?php
    if (isset($_GET['erro'])) {
        echo "<script> Swal.fire({icon: 'warning',title: 'Oops..', text:'Usuário ou senha inválidos!'})</script>";
    }

    if (isset($_POST['deslogar'])) {
        echo "<script>const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
                })
                Toast.fire({
                    icon: 'warning',
                    title: 'Deslogado'
                    })</script>";
    }



    ?>
    <script>
        function adm() {
            if (document.getElementById("campoEmail").value == 'adm@adm.com') {
                localStorage["isAdm?"] = true;
            } else {
                localStorage["isAdm?"] = false;
            }
        }

        async function esqueci() {
            const {
                value: email
            } = await Swal.fire({
                title: 'Digite o email cadastrado abaixo',
                input: 'email',
                inputPlaceholder: 'seu email'
            })

            if (email) {
                Swal.fire(`Link de recuperação enviado para: ${email}`)
            }
        }
    </script>
</body>

</html>
