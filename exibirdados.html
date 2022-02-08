<html>
<head>
    <title>exibirdados</title>
    <link rel="stylesheet" href="style.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300&display=swap" rel="stylesheet">
</head>
    <body>
    <?php 
        require("conecta.php");
        if ($_POST['termos']){
            if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['sobrenome']) && !empty($_POST['sobrenome']) && isset($_POST['email'])
            && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
                $nome = $_POST['nome'];
                $sobrenome = $_POST['sobrenome'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                $query = mysql_query("SELECT email FROM usuarios");
                $compara = array();
                while ($dado = mysql_fetch_array($query)) {
                    $compara[] = $dado['email'];
                }
                
                if (!in_array($email, $compara)) {
                    $sql = "INSERT INTO usuarios (nome, sobrenome, email, senha) VALUES ('$nome', '$sobrenome', '$email'," . "MD5('$senha')" . ")";
                    $qrRup = mysql_query($sql);
                    
                    if ($qrRup) {
                        echo "<script> Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Cadastrado com Sucesso',
                            showConfirmButton: false,
                            timer: 1500
                            })</script>";
                    } else {
                        echo "Erro: " . mysql_error();
                    }
                } else {
                    header('Location: cadastro.php?erro2=check');
                }

            }
        } else {header('Location: cadastro.php?erro=check');}
        
        ?>
        <div>
        <h2 id="pagdados"> Seus dados são: </h2>
        <table border="1" class="tabela">
        <tr>    
            <td>Nome:</td>
            <td><?php echo $nome?></td>
        </tr>
        <tr>    
            <td>sobrenome:</td>
            <td><?php echo $sobrenome?></td>
        </tr>
            <tr><td>email:</td>
            <td><?php echo $email?></td>
        </tr>
            <tr><td>senha:</td>
            <td><?php echo $senha?></td>
        </tr>

        <form id="voltar" action="index.php" method="post">
        <input id="botaoVoltar" type="submit" name="voltar" value="voltar"/>
        </form>
        </div>
        
    </body>
</html>
