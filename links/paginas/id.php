<?php
if (!isset($_GET['id'])) {
    header(header: "Location: ../../index.php");
    exit;
};
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../imgs/Logo/Zodiac-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../links/css/ecommerce.css">
    <title>Produtos - <?php echo $_GET['categoria']?></title>
</head>

<body>
    <header>
        <ul>
            <li><a href="../../index.php"><img src="../../imgs/Logo/Zodiac-logo.png" alt="Logo da Zodiac Store"></a>
            </li>
            <li><button onclick="redirecionarcarrinho()"><i class="fa-solid fa-cart-shopping"></i><span id="demonstrativocard"></span></button></i>
                
            </li>
        </ul>
    </header>

   