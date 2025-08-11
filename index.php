<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imgs/Logo/Zodiac-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="links/css/ecommerce.css">
    <title>Zodiac GeekStore</title>
</head>

<body>
    <header>
        <ul>
            <li><img src="imgs/Logo/Zodiac-logo.png" alt="Logo da Zodiac Store" width="100px"></li>

            <li>
                <div>
                    <a href="/links/paginas/login.php"><i class="fas fa-users color-slide"></i></a>
                    <button ><a href="links/paginas/ca"><i class="fa-solid fa-cart-shopping color-slide"></a></i></button>
                </div>

            </li>
        </ul>
    </header>

    <nav class="nav_content">

        <h3>FAÇA S<span class="color-slide">UAS COMPRAS OUVINDO UMA OPPEN</span>ING</h3>
        <div class="music-menu">
            <ul>
                <li>
                    <h4>Naruto Shippuden - Closer (Português)</h4>
                    <audio controls>
                        <source
                            src="midias/Naruto_Shippuden_-_Abertura_4_-_Closer_(Completa_em_Português)(128k)_013549.mp3"
                            type="audio/mp3">
                    </audio>
                </li>
                <li>
                    <h4>One Piece - Hope by Namie Amuro
                    </h4>
                    <audio controls>
                        <source src="midias/one-piece-opening-20-hope-by-namie-amuro-youtubemp3free.org.mp3"
                            type="audio/mp3">
                    </audio>
                </li>
                <li>
                    <h4>Shingeki no Kyojin - Shinzou wo Sasageyo</h4>
                    <audio controls>
                        <source
                            src="midias/Linked_Horizon_-_Shinzou_wo_Sasageyo!_[Shingeki_no_Kyojin_S2_OP]_Lyrics(128k)_013731.mp3"
                            type="audio/mp3">
                    </audio>
                </li>
                <li>
                    <h4>Nanatsu No Taizai - Netsujou no Spectrum</h4>
                    <audio controls>
                        <source
                            src="midias/nanatsu-no-taizai-opening-1-netsujou-no-spectrum-4k-30fps-creditsless-youtubemp3free.org.mp3"
                            type="audio/mp3">
                    </audio>
                </li>
            </ul>

        </div>
        <button onclick="active_menumusic()" class="click" id="button_musicplayer"><i class="fa-solid fa-music"
                id="musicplayer"></i></button>
        <section>
            <h2 class="color-slide">Categorias </h2>
            <ul>
                <li>
                    <button onclick="location.href='links/paginas/produtos.php?categoria=camisa'">
                        <div class="icon_category  click"><img src="../../imgs/Logo/t-shirt.png"></div>
                    </button>
                    <p>Camisas</p>
                </li>
                <li>
                    <button onclick="location.href='links/paginas/produtos.php?categoria=caneca'">
                        <div class="icon_category  click"> <img src="../../imgs/Logo/coffee-shop.png"></div>
                    </button>
                    <p>Canecas</p>

                </li>
                <li>
                    <button onclick="location.href='links/paginas/produtos.php?categoria=moletom'">
                        <div class="icon_category  click"> <img src="../../imgs/Logo/moletomicon.png"></div>
                    </button>
                    <p>Moletons</p>

                </li>
            </ul>
        </section>
    </nav><a href="links/paginas/Produtos.html"></a>
    <article>
        <div class="slide-show-promo">
            <img id="img-fly" src="imgs/fly/PROMOCHAVEIRO.png" alt="">
        </div>
    </article>
    <main>
        <h2 class="color-slide">LANÇAMENTOS</h1>
            <div class="divprodutos">
                <?php
                include 'links/paginas/Dao/Dao.php';
                $dao = new Dao();
                $result = $dao->buscarpromocoes();
                foreach ($result as $produto) {
                    $produto['valor'] = number_format($produto['valor'], 2, ',', '.');
                    echo '<div class="div-item">
                        <img src="' . $produto['imagem'] . '">
                        <div class="texto_produto">
                        <h3>' . $produto['nome'] . '</h3>
                        <h4>' . $produto['descricao'] . '</h4>
                        <p>POR R$' . $produto['valor'] . '</p>
                        <s> '. $produto['estoque'] .'</s>
                    </div>
                    <button>
                        <i class="fa-solid fa-cart-shopping"></i> COMPRAR
                    </button>
    </div>';
                }
                ?>
            </div>
    </main>
    <article class="noticias color-slide">
        <h3>MOMENTO GEEK</h3>
        <h4>Confira os lançamentos de 2025 </h4>
        <div id="noticiadestaque">
            <button onclick="recuarnotice()" class="click"><i class="fas fa-arrow-left"></i></button>
            <div id="textnotice"></div>
            <button onclick="avancarnotice()" class="click"><i class="fas fa-arrow-right"></i></button>
        </div>
    </article>
    <footer>
        <ul>
            <li><b>Contatos: </b></li>
            <li><a href="links/paginas/faleconosco.html">Fale Conosco</a></li>
            <li>Trabalhe Conosco</li>
        </ul>
        <ul>
            <li><b>Novidades</b></li>
            <li>Lançamentos</li>
            <li></li>
        </ul>
        <span><img src="imgs/Logo/Zodiac-logo.png" alt="Logo da Zodiac Store" width="100px"></span>
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
    <script src="links/JavaScript/ecommerce.js"></script>
</body>

</html>