<?php
$resposta = '';
if (isset($_POST["email"]) && isset($_POST["senhalogin"]) && $_POST["email"] != '' && $_POST["senhalogin"] != '') {
    include("Dao/DaoLogin.php");
    $daologin = new DaoLogin();

    $res = $daologin->fazerlogin($_POST['email']);
    if ($res[0]['senha'] == $_POST['senhalogin']) {
        if($res[0]['permissao']=='adm'){
            header("Location: paginaadm.php");
        }else{
        header("Location: ../../index.php");
        }
    } else {
        header("Location: login.php");
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../links/css/login.css">
    <title>Login GeekStore</title>
</head>
</head>

<body>
    <main>
        <form action="login.php" method="post">
            <input type="email" name="email" placeholder="EMAIL">
            <br>
            <input type="password" name="senhalogin" placeholder="SENHA">

            <div><a href="createuser.php">Criar conta</a>
                <?php echo '<p class="resposta">' . $resposta . '</p>' ?>
                <button>Entrar</button>
            </div>
        </form>
    </main>
</body>

</html>