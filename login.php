<html>
<head>
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
    <?php

    require("conecta.php");

    if (isset($_POST['entrar']) && isset($_POST['campoEmail']) && isset($_POST['campoSenha'])) {
        $email = $_POST['campoEmail'];
        $senha = md5($_POST['campoSenha']);
        $sql = "SELECT * from usuarios where email = '$email' and senha = '$senha'";
        $qrLogin = mysql_fetch_array(mysql_query($sql));
        
        if ($qrLogin) {
            header('Location: logado.php');
        } else {
            header('Location: index.php?erro=1');
        }
        
    }
    
    ?>
    </body>
</html>