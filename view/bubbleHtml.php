<?php
session_start();

if (isset($_SESSION['nome'])) {
    $nome_usuario = $_SESSION['nome'];
} else {
    $nome_usuario = 'logar';
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bubbles</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="shortcut icon" type="imagex/png" href="../imagens/website/balloon.png">
    <link rel="stylesheet" href="../styles/pedir.css">
    <link rel="stylesheet" href="../styles/produtos.css">
    <link rel="stylesheet" href="../styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Style+Script&display=swap');
    </style>
</head>

<body>
    <?php
        include "../components/header.php";
    ?>
    <main>
        <section id="headerMobileBubbles"></section>

        <div class="padding">
            <section id="apresentacao">
                <div id="bannerAp">
                    <div id="apresentacaoText">
                        <h1>Bubbles</h1>
                        <p>a bubble é um produto que contem diversos bagulhos dentro dela, a um preço muito caro</p>
                    </div>
                </div>
                <div id="apresentacaoBttn">
                    <a id="bubble_acrilico" href="bubble_acrilico.php">
                        <button class="bttnBubble">
                            <span>bubbles acrílico</span>
                            <img src="../imagens/website/Forward.png" alt="">
                        </button>
                    </a>
                    
                    <a  id="bubble_box" href="bubble_box.php">
                        <button class="bttnBubble">
                            <span>bubbles na box</span>
                            <img src="../imagens/website/Forward.png" alt="">
                        </button>
                    </a>
                </div>
            </section>
            <section id="bubblesDisp">
                <div id="bubblesDispText">
                    <h2>Bubbles disponíveis</h2>
                    <p>Bubbles disponíveis para compra</p>
                </div>
                <div id="boxVitrine">
                    <div class="displayVitrine">
                        <div class="vitrine">
                            
                            <div class="imgVitrine"><img src="../imagens/catalogo/bubble_maes.png" alt=""></div>
                            <div class="textVitrine">
                                <h3>CANECA TAL</h3> 
                                <h5>Lorem ipsum dolor sit amet </h5>
                                    <p>R$99,99</p>
                            </div>
                        </div>
                        <div class="vitrine">

                            <div class="imgVitrine"><img src="../imagens/catalogo/bubble_maes.png" alt=""></div>
                            <div class="textVitrine">
                                <h3>CANECA TAL</h3> 
                                <h5>Lorem ipsum dolor sit amet </h5>
                                    <p>R$99,99</p>
                            </div>
                        </div>
                        <div class="vitrine">

                            <div class="imgVitrine"><img src="../imagens/catalogo/bubble_maes.png" alt=""></div>
                            <div class="textVitrine">
                                <h3>CANECA TAL</h3> 
                                <h5>Lorem ipsum dolor sit amet </h5>
                                    <p>R$99,99</p>
                            </div>
                        </div>
                        <div class="vitrine">

                            <div class="imgVitrine"><img src="../imagens/catalogo/bubble_maes.png" alt=""></div>
                            <div class="textVitrine">
                                <h3>CANECA TAL</h3> 
                                <h5>Lorem ipsum dolor sit amet </h5>
                                    <p>R$99,99</p>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <button id="sendButton" class="btn btn-primary">Enviar</button>
                        <button id="addToCartButton" class="btn btn-primary">Adicionar ao Carrinho</button>
                    <div id="messageContainer"></div>
            </div>
                </div>
            </section>
        </div>
    </main>
    <footer>
        <div id="socialContato">
            <div id="redeSocial">
                <h3>Nossas redes sociais</h3>
                <a href="/">Instagram</a>
                <a href="/">Whatsapp</a>
            </div>
            <div id="contato">
                <h3>Contato</h3>
                <a href="/">(11)96914-1984</a>
                <a href="/">feitoamao@gmail.com</a>
            </div>
        </div>
        <div id="footerDireitos">
            <p>todos os direitos reservados</p>
        </div>
    </footer>
    <nav class="navMobile">
        <ul>
            <li class="navMobileLink"><a href="index.html"><img src="imagens/website/house.svg" alt=""></a></li>
            <li class="navMobileLink"><a href="/"><img src="imagens/website/search.svg" alt=""></a></li>
            <li class="navMobileLink"><a href="box.html"><img src="imagens/website/person.svg" alt=""></a></li>
        </ul>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>