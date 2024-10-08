<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
</head>

<body>
    <?php
    include ('components/header.php');
    ?>

    <main>
        <section id="heroSection">
            <div id="bannerH">
                <h1>Lembranças especiais para marcar momentos com as pessoas que você ama.</h1>
                <div id="textoHero">
                    <p>Diversos produtos e embalagens para montar o seu presente</p>
                    <button class="bttnHero">Monte agora</button>
                </div>
            </div>
        </section>

        <section id="produtosProntos">
            <div class="titleProdutos">
                <h2>Produtos Prontos</h2>
                <p>canecas, cestas e bubbles com tudo pronto para você pedir</p>
            </div>

            <div class="cardSection">
                <div class="cardProdutos">
                    <div class="cards">
                        <div class="cardImg"> <img src="imagens/catalogo/the_canecations.png" alt="">
                        </div>

                        <button class="cardText">
                            <p>canecas</p>
                        </button>
                    </div>
                    <div class="cards">
                        <div class="cardImg"> <img src="imagens/catalogo/caixa.png" alt="">
                        </div>

                        <button class="cardText">
                            <p>box de luxo</p>
                        </button>
                    </div>
                    <a href="produtos.html">
                        <div class="cards">
                            <div class="cardImg"> <img src="imagens/catalogo/bubble.png" alt="">
                            </div>

                            <button class="cardText">
                                <p>bubbles</p>
                            </button>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section id="produtosEspeciais">
            <div class="titleProdutosE">
                <h2>Produtos Especiais</h2>
                <p>canecas, cestas e bubbles com tudo pronto para você pedir e presentear naquela data especial</p>
            </div>

            <div class="cardSection">
                <div class="cardProdutos">
                    <div class="cards">
                        <div class="cardImg">
                            <img src="imagens/catalogo/bubble_maes.png" alt="">
                        </div>

                        <button class="cardText2">
                            <p>Dia das mães</p>
                        </button>
                    </div>
                    <div class="cards">
                        <div class="cardImg"> <img src="imagens/catalogo/the_natal_combination.png" alt="">
                        </div>

                        <button class="cardText2">
                            <p>Natal</p>
                        </button>
                    </div>
                    <div class="cards">
                        <div class="cardImg">
                            <img src="imagens/catalogo/the_bubble.png" alt="">
                        </div>

                        <button class="cardText2">
                            <p>Aniversários</p>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="feedback">
            <div class="titleFeedback">
                <h2>Feedbacks</h2>
                <p>Alguns feedbacks de nossos clientes</p>
            </div>

            <div class="comments">
                <div class="unitComments">
                    <div class="feedbackImg"></div>
                    <div class="feedbackContent">
                        <P>Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Maxime molestiae similique est! Temporibus dolor ullam quidem, veritatis inventore
                            qui, architecto aperiam impedit, ipsa labore laborum o </P>
                        <h3>NOME</h3>
                    </div>
                </div>
            </div>
        </section>

        <section id="action">
            <div id="actionH1">
                <h1>Quer presentear muitas pessoas e deseja fazer um pedido em larga escala?</h1>
            </div>
            <div id="actionP">
                <p>Encomende seu pedido empresarial conosco</p>
                <button class="bttnHero">Encomendar</button>
            </div>
        </section>

        <div class="branco"></div>
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
                <a href="/">(11)98888-9999</a>
                <a href="/">feitoamao@gmail.com</a>
            </div>
        </div>
        <div id="footerDireitos">
            <p>todos os direitos reservados</p>
        </div>
    </footer>
    <nav class="navMobile">
        <ul>
            <li class="navMobileLink"><a href="/"><img src="imagens/website/house.svg" alt=""></a></li>
            <li class="navMobileLink"><a href="/"><img src="imagens/website/gift.svg" alt=""></a></li>
            <li class="navMobileLink"><a href="/"><img src="imagens/website/cart3.svg" alt=""></a></li>
            <li class="navMobileLink"><a href="/"><img src="imagens/website/search.svg" alt=""></a></li>
            <li class="navMobileLink"><a href="/"><img src="imagens/website/person.svg" alt=""></a></li>
        </ul>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>