<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amiri&display=swap" rel="stylesheet">
    <title>Art baby - Bebês Reborn e Artesanato para enxoval</title>
</head>
<body>
    <header class="alinhar_centro">
        <div class="container">
            <div class="grid-3">
                <a href="index.html">
                    <img src="img/logo-marca.svg" alt="Logo marca da empresa">
                </a>
            </div>
            <nav class="grid-5 menu_navegacao">
                <ul>
                    <li><a href="produtos.html" class="caminho_menu">Produtos</a></li>
                    <li><a href="contato.html" class="caminho_menu ativo">Contato</a></li>
                    <li><a href="blog.html" class="caminho_menu">Blog</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="introducao">
        <h1 class="titulo">Contato</h1>
    </section>
    <section class="dados_contato">
        <div class="container">
            <div class="grid-4">
                <h3>Redes sociais</h3>
                <div class="links_sociais">
                    <a>
                        <img src="img/Ícones/facebook_icon.svg" alt="ícone Facebook">
                    </a>
                    <a>
                        <img src="img/Ícones/instagram_icon.svg" alt="ícone Facebook">
                    </a>
                    <a>
                        <img src="img/Ícones/twitter_icon.svg" alt="ícone Facebook">
                    </a>
                </div>
            </div>
            <div class="grid-7">
                <h3>Mapa</h3>
                <img src="img/mapa.jpg" alt="Av. Primavera, 107 - Vargem Grande">
            </div>
            <div class="grid-5">
                <h3>Contato</h3>
                <ul>
                    <li>Av. Primavera, 107</li>
                    <Li> Vargem Grande</Li>
                    <li> São Paulo, SP</li>
                    <li> rita_seilaoq@gmail.com</li>
                    <li> (11) 99999-9999</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="enviar_mensagem alinhar_centro">
        <div class="container">
            <h2 class="titulo">Enviar mensagem</h2>
            <form class="grid-8">
                <div>
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" placeholder="Nome Completo" required>
                </div>
                <div>
                    <label for="email">E-mail</label>
                    <input type="text" name="email" id="email" placeholder="exemplo@gmail.com" required>
                </div>
                <div>
                    <label for="ass">Assunto</label>
                    <input type="text" name="ass" id="ass" placeholder="Escolha o assunto" required>
                </div>
                <div>
                    <label for="msg">Mensagem</label>
                    <textarea name="msg" id="msg"></textarea>
                </div>
                <button type="submit" class="btn rosa">Enviar</button>
            </form>
        </div>
    </section>
    <footer>
        <div class="container">
            <a href="index.html" class="grid-3">
                <img src="img/logo-marca.svg" alt="Logo marca da empresa">
            </a>
            <div class="grid-4">
                <h3>Redes sociais</h3>
                <div class="links_sociais">
                    <a>
                        <img src="img/Ícones/facebook_icon.svg" alt="ícone Facebook">
                    </a>
                    <a>
                        <img src="img/Ícones/instagram_icon.svg" alt="ícone Facebook">
                    </a>
                    <a>
                        <img src="img/Ícones/twitter_icon.svg" alt="ícone Facebook">
                    </a>
                </div>
            </div>
            <div class="contato_footer">
                <h3>Contato</h3>
                <ul>
                    <li>- Av. Primavera, 107 | Vargem Grande</li>
                    <li>- São Paulo, SP</li>
                    <li>- rita_seilaoq@gmail.com</li>
                    <li>- (11) 99999-9999</li>
                </ul>
            </div>
        </div>
        <div>
            <p> &copy; <span class="texto_azul">Art</span><span class="texto_rosa">Baby</span> 2019 | Todos direitos reservados </p>
        </div>
    </footer>
</body>
</html>