<html>

<head>
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="./js/termos.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300&display=swap" rel="stylesheet">
</head>

<body>
        <div class="cadastro">
        <h2 id="titulocadastro">Página de Cadastro</h2><br>
        <form id="formcadastro" action="exibirdados.php" method="post">
            <p> <input id="barraNome" class="inputCadastro" type="text" name="nome" placeholder="Nome" required> </p>
            <p> <input id="barraSobrenome" class="inputCadastro" type="text" name="sobrenome" placeholder="Sobrenome" required></p>
            <p> <input id="barraEmail" class="inputCadastro" type="text" name="email" placeholder="email" required></p>
            <p> <input id="barraSenha" class="inputCadastro" type="password" name="senha" placeholder="senha" required></p>
            <input type="checkbox" name="termos" id="termos" onclick="validar()"> <a href="cadastro.php?termos=check" id="botaoTermos">Termos de serviço</a><br>
            <input id="botaoRegistrar" type="submit" name="enviar" value="Registrar"/></p>
        </form>
        </div>
      
        <script>
     
            if ('<?php echo isset($_GET['erro'])?>') {
                Swal.fire({icon: 'warning',title: 'Oops..', text:'Você esqueceu de aceitar os termos de serviço.'})
            }

            if ('<?php echo isset($_GET['erro2'])?>') {
                Swal.fire({icon: 'warning',title: 'Oops..', text:'Email já cadastrado no banco de dados.'})
            }

            
            
            console.log(termos)
            
            if ('<?php echo isset($_GET['termos'])?>') {
                Swal.fire(
                    'Termos de Serviço',
                    termos)
                // Swal.fire({
                //     imageUrl: 'termos.png',
                //     // imageHeight: 1500,
                //     imageWidth: 1000,
                //     imageAlt: 'A tall image'
                //     })
            }
            


            function validar() {
                if (document.getElementById("termos").checked == 1) {
                    Swal.fire({
                    toast: true,
                    position: 'center',
                    icon: 'success',
                    title: 'Você aceitou os termos de serviço.',
                    showConfirmButton: false,
                    timer: 1500
                    })
                } else {
                    Swal.fire({icon: 'error', text:'É necessário concordar com os termos de serviço.'})
                }
            }



               

            
        </script>
</body>

</html>