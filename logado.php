<html>
    <head>
    <title>Logado</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300&display=swap" rel="stylesheet">
    <?php require('conecta.php')?>
    </head>

    <body>
        <h1 id="titulologado">PARABENS, VOCÊ ESTÁ LOGADO</h1>
        <div class="logado">
        <?php
        echo "<table class = 'dbrp'>
        <tr>
        <th style = 'width:120px';>Nome</th>
        <th style = 'width:685px';>Sobrenome</th>
        <th style = 'width:100px';>Email</th>
        <th style = 'width:100px';>Senha</th>
        <th style = 'width:100px';>deletar</th>
        </tr>";
        
        if (isset($_GET['excluir']) && isset($_GET['email'])) {
            $emailGET = $_GET['email'];
            $sql = "DELETE FROM `usuarios` WHERE email = '$emailGET'";
            $qrDel = mysql_query($sql);
        
            if ($qrDel) {
                echo "<script> Swal.fire({
                    toast: true,
                    position: 'center',
                    icon: 'success',
                    title: 'Usuário deletado com sucesso.',
                    showConfirmButton: false,
                    timer: 1500
                    })
                    </script>";
            } else {
                echo "Erro: " . mysql_error();
            }
        }
        $sql = " SELECT * FROM usuarios";
        $qrRup = mysql_query($sql);

        while($row = mysql_fetch_array($qrRup))
        {
            $email = $row['email'];
            $deletar = "<input type='image' src='https://upload.wikimedia.org/wikipedia/commons/a/a3/Delete-button.svg' onclick='deletar(`$email`)'/input>";
            echo "<tr>";
            echo "<td class='alinhamento'>" . $row['nome'] . "</td>";
            echo "<td class='alinhamento'>" . utf8_encode($row['sobrenome']) . "</td>";
            echo "<td class='alinhamento'>" . $row['email'] . "</td>";
            echo "<td class='alinhamento'>" . "****" . "</td>";
            echo "<td class='alinhamento'>" . $deletar . "</td>";
            echo "</tr>";
        }
        echo "</table>";


    ?>

    <form action="index.php" method="post">
    <input id="botaodeslogar" type="submit" name="deslogar" value="Deslogar"/>
    </form>
    <input type="button" id="botaomostrardados" name="mostardados" value="Mostrar Todos os dados Salvos" onclick="mostrarDados()">
    <input type="button" id="botaoatualizar" name="atualizar" value="atualizar" onclick="atualizar()">
    </div>
    <script>
        const Toast = Swal.mixin({
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

        if (!'<?php echo isset($_GET['excluir'])?>'){
            Toast.fire({
            icon: 'success',
            title: 'Logado com sucesso'
            })

        }


        function deletar(valor) {
            console.log(valor)
            Swal.fire({
            title: 'Tem certeza?',
            text: "Você não podera recuperar os dados excluídos!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancelar',
            confirmButtonText: 'Sim, deletar usuário!'
            }).then((result) => {
            if (result.isConfirmed) {
                window.location = `logado.php?excluir=true&&email=${valor}`
            }
            })
        }

        function atualizar() {
            window.location = "logado.php?excluir=1"
        }


        $('.dbrp').hide()
        console.log(localStorage.getItem("isAdm?"))
            function mostrarDados() {
                if (localStorage.getItem("isAdm?") === "true"){
                    $('.dbrp').toggle()
                } else {
                    Swal.fire({icon: 'warning',title: 'Oops..', text:'Parece que você não possui privilégios de administrador.'})
                }
            }

        
    </script>
    </body>
</html>