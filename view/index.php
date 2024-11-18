<?php
session_start();

if (isset($_SESSION['nome'])) {
    $nome_usuario = $_SESSION['nome'];
} else {
    $nome_usuario = 'logar';
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="shortcut icon" type="imagex/png" href="../imagens/website/balloon.png">
    <link rel="stylesheet" href="../styles/styles.css" />
    <link rel="stylesheet" href="../styles/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
        @import url('https://fonts.googleapis.com/css2?family=Style+Script&display=swap');
    </style>
</head>

<body>

    <?php
    include "../components/header.php"
    ?>

    <section id="heroSection">
        <div id="bannerH">
            <h1>
                Lembranças especiais para marcar momentos com as pessoas
                que você ama.
            </h1>
            <div id="textoHero">
                <p>
                    Diversos produtos e embalagens para montar o seu
                    presente
                </p>
            </div>
        </div>
    </section>
    <section id="produtosProntos">
        <div class="titleProdutos">
            <h2>Produtos Prontos</h2>
            <p>
                canecas, cestas e bubbles com tudo pronto para você
                pedir
            </p>
        </div>

        <div class="cardSection" id="convencionais">
            <div class="cardProdutos">
                <a id="caneca" href="caneca.php">
                    <div class="cards">
                        <div class="cardImg">
                            <img src="../imagens/catalogo/the_canecations.png" alt="" />
                        </div>

                        <button class="cardText">
                            <p>canecas</p>
                        </button>
                    </div>
                </a>
                <a id="box_luxo" href="box_luxo.php">
                    <div class="cards">
                        <div class="cardImg">
                            <img src="../imagens/catalogo/caixa.png" alt="" />
                        </div>

                        <button class="cardText">
                            <p>box de luxo</p>
                        </button>
                    </div>
                </a>
                <a id="bubble" href="bubble.php">
                    <div class="cards">
                        <div class="cardImg">
                            <img src="../imagens/catalogo/bubble.png" alt="" />
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
            <p>
                canecas, cestas e bubbles com tudo pronto para você
                pedir e presentear naquela data especial
            </p>
        </div>

        <div class="cardSection" id="especiais">
            <div class="cardProdutos">
                <a id="dia_das_maes" href="dia_das_maes.php">
                    <div class="cards">
                        <div class="cardImg">
                            <img src="../imagens/catalogo/bubble_maes.png" alt="" />
                        </div>
                        <button class="cardText2">
                            <p>Dia das mães</p>
                        </button>
                    </div>
                </a>
                <a id="natal" href="natal.php">
                    <div class="cards">
                        <div class="cardImg">
                            <img src="../imagens/catalogo/the_natal_combination.png" alt="" />
                        </div>

                        <button class="cardText2">
                            <p>Natal</p>
                        </button>
                    </div>
                </a>
                <a id="" href="../view/aniversario.php">
                    <div class="cards">
                        <div class="cardImg">
                            <img src="../imagens/catalogo/the_bubble.png" alt="" />
                        </div>

                        <button class="cardText2">
                            <p>Aniversários</p>
                        </button>
                    </div>
                </a>
            </div>
        </div>
    </section>


    <!--<nav id="navLinks">
            <span id="mensagemnome" class="mb-6"></span>
            <a id="linkRegistrosU" href="registros_usuarios.php" style="display:none;">Registros de usuários</a>
            <a id="linkRegistrosP" href="cadastro_produtos.php" style="display:none;">Registros de produtos</a>
            <a id="linkRegistrosPe" href="registros_pedidos.php" style="display:none;">Registros de pedidos</a>
        </nav>-->


    <section class="feedback">
        <div class="titleFeedback">
            <h2>Feedbacks</h2>
            <p>Alguns feedbacks de nossos clientes</p>
        </div>

        <div class="comments">
            <div class="unitComments">
                <div class="feedbacks">
                    <div class="feedbackImg"><img src="../imagens/website/simony.png" alt=""></div>
                    <h3>SIMONY MORAIS</h3>
                </div>
                <div class="feedbackContent">
                    <p>
                        Os personalizados da Feito a Mão fizeram a alegria da festa da minha filha!
                    </p>
                </div>
            </div>
            <div class="unitComments">
                <div class="feedbacks">
                    <div class="feedbackImg"><img src="../imagens/website/gabi.png" alt=""></div>
                    <h3>GABRIELA LEITE</h3>
                </div>
                <div class="feedbackContent">
                    <p>
                        "Adorei receber um trabalho como esse!"
                    </p>
                </div>
            </div>
            <div class="unitComments">
                <div class="feedbacks">
                    <div class="feedbackImg"><img src="../imagens/website/franciele.png" alt=""></div>
                    <h3>FRANCIELE LIMA</h3>
                </div>
                <div class="feedbackContent">
                    <p>
                        A qualidade dos presentes é impressionante, me apaixonei nas boxs.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="branco"></div>
    </main>

    <?php
    include '../components/footer.php';
    ?>

    <?php
    include '../components/navmobile.php';
    ?>



    <div class="modal">
        <main>
            <section id="card">
                <div class="cadastre">
                    <h1>Cadastre-se</h1>
                    <p>Não tem uma conta? Faça um cadastro para que possa realizar os seus pedidos</p>
                    <button class="cadastreBttn">criar conta</button>
                </div>
                <div class="data">
                    <div id="display">
                        <h1>Bem-vindo de volta!</h1>
                        <p>Faça login no nosso site para voltar a fazer seus pedidos</p>
                    </div>
                    <div id="dataDivInput">
                        <input class="input" type="text" placeholder="email">
                        <input class="input" type="text" placeholder="senha">
                    </div>
                    <div id="dataDivBttn">
                        <button class="dataBttn">sign in</button>
                    </div>
                </div>
            </section>

            <section id="card2">
                <div class="cadastre">
                    <h1>Bem-vindo de volta!</h1>
                    <p>Faça login no nosso site para voltar a fazer seus pedidos</p>
                    <button class="cadastreBttn">sign in</button>
                </div>
                <div class="data">
                    <div class="login">
                        <h1>Cadastre-se</h1>
                        <p>Não tem uma conta? Faça um cadastro para que possa realizar os seus pedidos</p>
                    </div>
                    <div id="dataDivInput">
                        <input class="input" type="text" placeholder="nome">
                        <input class="input" type="text" placeholder="email">
                        <input class="input" type="text" placeholder="número">
                        <input class="input" type="text" placeholder="senha">
                    </div>
                    <div id="dataDivBttn">
                        <button class="dataBttn">criar conta</button>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        // Passa o nome do usuário para uma variável do JavaScript
        var nomeUsuario = "<?php echo $nome_usuario; ?>";

        // Exibe o nome do usuário no elemento com id "mensagemnome"
        document.getElementById("mensagemnome").innerHTML = nomeUsuario;

        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("mensagemnome").addEventListener("click", function() {
                var dropdownContent = document.getElementById("dropdownContent");
                // Alterna a visibilidade do conteúdo do dropdown
                dropdownContent.style.display = dropdownContent.style.display === "block" ? "none" : "block";
            });
        });

        // Fechar o dropdown se clicar fora dele
        window.onclick = function(event) {
            if (!event.target.matches('#mensagemnome') && !event.target.matches('.dropdown-content') && !event.target.matches('.dropdown-content a')) {
                var dropdownContent = document.getElementById("dropdownContent");
                dropdownContent.style.display = "none";
            }
        }

        document.addEventListener("DOMContentLoaded", () => {
            // Captura os elementos
            const mensagemnomemobile = document.getElementById("mensagemnomemobile");
            const dropdown = document.getElementById("dropdownContentMobile");

            // Certifica-se de que os elementos existem antes de adicionar os eventos
            if (mensagemnomemobile && dropdown) {

                // Inicializa o dropdown como oculto
                dropdown.style.display = "none";

                // Função para alternar o dropdown
                function toggleDropdown() {
                    if (dropdown.style.display === "block") {
                        dropdown.style.display = "none";
                    } else {
                        dropdown.style.display = "block";
                    }
                }

                // Adiciona o evento de clique no ícone da pessoa (mensagemnomemobile)
                mensagemnomemobile.addEventListener("click", toggleDropdown);

                // Fecha o dropdown ao clicar fora dele
                window.addEventListener("click", (event) => {
                    if (event.target !== mensagemnomemobile && !dropdown.contains(event.target)) {
                        dropdown.style.display = "none";
                    }
                });

                console.log("Eventos registrados com sucesso para mensagemnomemobile!");
            }
        });




        // Ações dos botões no dropdown
        $(document).ready(function() {
            $('#logoutButton, #logoutButtonMobile').on('click', function() {
                $.ajax({
                    url: '../controllers/logout.php', // URL do script de logout
                    type: 'POST',
                    success: function(response) {
                        $('#mensagem').html('<div style="color:green;">' + response.message + '</div>');
                        // Redireciona após 1 segundo
                        setTimeout(function() {
                            window.location.href = 'index.php'; // Redireciona para a página inicial
                        }, 0);
                    },
                    error: function() {
                        $('#mensagem').html('<div style="color:red;">Erro ao realizar logout.</div>');
                    }
                });
            });

        });

        document.addEventListener("DOMContentLoaded", function() {
            $(document).ready(function() {
                // Simulação de chamada AJAX para verificar o estado do usuário
                $.ajax({
                    url: '../controllers/verificar_usuario.php', // Script que verifica o estado do usuário
                    method: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        const usuarioLogado = response.logado;
                        const tipoUsuario = response.tipo;

                        if (!usuarioLogado) {
                            $('#linkLogin').show();
                            $('#linkCadastro').show();
                            $('#logoutButton').hide();
                            $('#linkProd').hide();
                            $('#linkUser').hide();
                            $('#linkPedidos').hide();
                            $('#linkPerfil').hide();
                            $('#linkLoginMobile').show();
                            $('#linkCadastroMobile').show();
                            $('#logoutButtonMobile').hide();
                            $('#linkProdMobile').hide();
                            $('#linkUserMobile').hide();
                            $('#linkPedidosMobile').hide();
                            $('#linkPerfilMobile').hide();
                        } else {
                            $('#logoutButton').show();
                            $('#linkPerfil').show();
                            $('#linkCadastro').hide();
                            $('#linkLogin').hide();
                            $('#logoutButtonMobile').show();
                            $('#linkPerfilMobile').show();
                            $('#linkCadastroMobile').hide();
                            $('#linkLoginMobile').hide();
                            $('#linkUser').hide();
                            $('#linkProd').hide();
                            $('#linkPedidos').hide();
                            $('#linkUserMobile').hide();
                            $('#linkProdMobile').hide();
                            $('#linkPedidosMobile').hide();
                            if (tipoUsuario === 'administrador') {
                                $('#linkUser').show();
                                $('#linkProd').show();
                                $('#linkPedidos').show();
                                $('#linkUserMobile').show();
                                $('#linkProdMobile').show();
                                $('#linkPedidosMobile').show();
                            }
                        }
                    },
                    error: function() {
                        $('#navLinks').append('<span style="color:red;">Erro ao verificar estado do usuário.</span>');
                    }
                });
            });
        });
    </script>


</body>

</html>