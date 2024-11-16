<header>
        </div>

        <div id="logo">
            <a href="../view/index.php"><img src="../imagens/website/logo.png" alt="" /></a>
        </div>

        
        <div id="nomeSite">
            <h2>Feito à mão</h2>
        </div>

        <nav>
            <ul>
                <li class="bttnHeader">
                    <a href="../view/bubble.php">BUBBLES</a>
                </li>
                <li class="bttnHeader">
                    <a href="../view/box_luxo.php">BOX LUXO</a>
                </li>
                <li class="bttnHeader">
                    <a href="../view/cadastro.php">CANECAS</a>
                </li>
                <li class="bttnHeader">
                    <div id="lupa">
                        <img src="../imagens/website/search.svg" alt="Lupa de Pesquisa" class="searchBar" />
                        <input type="Text" id="inputNav" placeholder="Pesquisar" />
                    </div>
                </li>
            </ul>
        </nav>

        <div id="perfil">
            <button class="perfilBttn">
            <div class="dropdown">
            <img src="../imagens/website/person.svg" alt=""/>
                <div id="boxnome">
                <span id="mensagemnome"></span> <!-- Nome do usuário -->
                </div>
                <div id="dropdownContent" class="dropdown-content">
                    <a class="dropdownbuttons" id="linkPerfil" href="../view/perfil.php">Perfil</a>
                    <a class="dropdownbuttons" id="linkLogin" href="../view/logar.php" style="display:none;">Login</a>
                    <a class="dropdownbuttons" id="linkCadastro" href="../view/cadastro.php" style="display:none;">Cadastro</a>
                <div class="dropdownbuttons" id=logoutButton>Sair</div>
                </div>
            </div>
            </button>
        </div>
    </header>
