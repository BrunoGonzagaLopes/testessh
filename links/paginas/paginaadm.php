
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

    <nav class="nav_content">

        <h3>FAÇA S<span>UAS COMPRAS OUVINDO UMA OPPEN</span>ING</h3>
        <div class="music-menu">
            <ul>
                <li>
                    <h4>Naruto Shippuden - Closer (Português)</h4>
                    <audio controls>
                        <source
                            src="../../midias/Naruto_Shippuden_-_Abertura_4_-_Closer_(Completa_em_Português)(128k)_013549.mp3"
                            type="audio/mp3">
                    </audio>
                </li>
                <li>
                    <h4>One Piece - Hope by Namie Amuro
                    </h4>
                    <audio controls>
                        <source src="../../midias/one-piece-opening-20-hope-by-namie-amuro-youtubemp3free.org.mp3"
                            type="audio/mp3">
                    </audio>
                </li>
                <li>
                    <h4>Shingeki no Kyojin - Shinzou wo Sasageyo</h4>
                    <audio controls>
                        <source
                            src="../../midias/Linked_Horizon_-_Shinzou_wo_Sasageyo!_[Shingeki_no_Kyojin_S2_OP]_Lyrics(128k)_013731.mp3"
                            type="audio/mp3">
                    </audio>
                </li>
                <li>
                    <h4>Nanatsu No Taizai - Netsujou no Spectrum</h4>
                    <audio controls>
                        <source
                            src="../../midias/nanatsu-no-taizai-opening-1-netsujou-no-spectrum-4k-30fps-creditsless-youtubemp3free.org.mp3"
                            type="audio/mp3">
                    </audio>
                </li>
            </ul>

        </div>
        <button onclick="active_menumusic()" class="click" id="button_musicplayer"><i class="fa-solid fa-music"
                id="musicplayer"></i></button>
        <section>
            <h2>Categorias </h2>
            <ul>
                <li>
                    <button onclick="location.href='produtos.php?categoria=camisa'">
                        <div class="icon_category  click"><img src="../../imgs/Logo/t-shirt.png"></div>
                    </button>
                    <p>Camisas</p>
                </li>
                <li>
                    <button onclick="location.href='produtos.php?categoria=caneca'">
                        <div class="icon_category  click"> <img src="../../imgs/Logo/coffee-shop.png"></div>
                    </button>
                    <p>Canecas</p>

                </li>
                <li>
                    <button onclick="location.href='produtos.php?categoria=moletom'">
                        <div class="icon_category  click"> <img src="../../imgs/Logo/moletomicon.png"></div>
                    </button>
                    <p>Moletons</p>

                </li>
            </ul>
        </section>
    </nav>
    <main class="divprodutos">
        <?php
        include 'Dao/Dao.php';

        $categoria = $_GET['categoria'];
        $dao = new Dao();

        $result = $dao->buscarprodutos($categoria);

        foreach ($result as $produto) {
            $produto['valor'] = number_format($produto['valor'], 2, ',', '.');
            echo '<div class="div-item">
                        <img src="' . $produto['imagem'] . '">
                        <input type="hidden" name="id" value="'.$produto['id'].'">
                        <div class="texto_produto">
                        <h3>' . $produto['nome'] . '</h3>
                        <h4>' . $produto['descricao'] . '</h4>
                        <p>POR R$' . $produto['valor'] . '</p>
                        <s>' . $produto['estoque'] . '</s>
                    </div>
                    <button>
                        <i class="fa-solid fa-cart-shopping"></i> COMPRAR
                    </button>
    </div>';
        }
        ?>
    </main>
    <footer>
        <ul>
            <li><b>Contatos: </b></li>
            <li><a href="faleconosco.html">Fale Conosco</a></li>
            <li>Trabalhe Conosco</li>
        </ul>
        <ul>
            <li><b>Novidades</b></li>
            <li>Lançamentos</li>
            <li></li>
        </ul>
        <span><img src="../../imgs/Logo/Zodiac-logo.png" alt="Logo da Zodiac Store" width="100px"></span>
        <ul>
            <li><b>Siga-nos</b></li>
            <li><a href="https://www.instagram.com/bruno_vinilopes/?igsh=MTlmMWY4NDhlenJjbw%3D%3D"><i
                        class="fab fa-instagram"></i> Instagram</a></li>
            <li><a href="https://www.facebook.com/bruno.lopes.424834?mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i>
                    Facebook </a></li>
        </ul>
        <ul>
            <li><b>Informações do desenvolvedor</b></li>
            <li>(31) 97129-0538</li>
            <li>email: brunoloopes24@gmail.com</li>
        </ul>
    </footer>
    <script src="../../links/JavaScript/ecommerceprodutos.js"></script>
</body>

</html>