<?php

require_once __DIR__ . '/config.php';

$projetos = carregarProjetos();

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>WeCode - Portfólio</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/portifolio.css">
    <link rel="stylesheet" href="../css/nav.css">

    <!-- Favicon -->
    <link
        rel="icon"
        type="image/png"
        href="../imagens/favicon/favicon-96x96.png"
        sizes="96x96"
    >

    <link
        rel="icon"
        type="image/svg+xml"
        href="../imagens/favicon/favicon.svg"
    >

    <link
        rel="shortcut icon"
        href="../favicon.ico"
    >

    <link
        rel="apple-touch-icon"
        sizes="180x180"
        href="../apple-touch-icon.png"
    >

    <link
        rel="manifest"
        href="../site.webmanifest"
    >

</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar">

        <div class="navbar-logo">

            <img
                src="../imagens/Logotipo-WeCode.png"
                alt="Logo WeCode"
            >

            WeCode

        </div>


        <button
            class="navbar-toggle"
            type="button"
            aria-label="Abrir menu"
        >

            <span></span>
            <span></span>
            <span></span>

        </button>


        <ul class="navbar-links">

            <li>
                <a href="../inicio.html">
                    Início
                </a>
            </li>

            <li>
                <a href="../contato.html">
                    Fale conosco
                </a>
            </li>

            <li>
                <a href="../perguntas.html">
                    Perguntas
                </a>
            </li>

        </ul>

    </nav>


    <!-- JAVASCRIPT NAVBAR -->
    <script src="../js/nav.js"></script>


    <!-- CABEÇALHO -->
    <header>

        <p class="p1">
            Nosso trabalho
        </p>

        <br>

        <h1>
            Nossos projetos falam<br>

            <span class="linha-dourada">
                por
            </span>

            si mesmos
        </h1>

    </header>


    <!-- PROJETOS -->
    <main>

        <section class="projetos">

            <?php if (!empty($projetos)): ?>

                <?php foreach ($projetos as $projeto): ?>

                    <div class="projeto-card">

                        <!-- IMAGEM DO PROJETO -->
                        <img
                            src="../imagens/<?php echo htmlspecialchars($projeto['imagem']); ?>"
                            alt="Projeto <?php echo htmlspecialchars($projeto['nome']); ?>"
                        >


                        <div class="projeto-conteudo">

                            <!-- TOPO DO CARD -->
                            <div class="projeto-topo">

                                <div class="icone">
                                    { }
                                </div>

                                <span class="ano">
                                    <?php echo htmlspecialchars($projeto['ano']); ?>
                                </span>

                            </div>


                            <!-- CATEGORIA -->
                            <p class="categoria">
                                <?php echo htmlspecialchars($projeto['categoria']); ?>
                            </p>


                            <!-- NOME -->
                            <h2>
                                <?php echo htmlspecialchars($projeto['nome']); ?>
                            </h2>


                            <!-- DESCRIÇÃO -->
                            <p class="descricao">
                                <?php echo htmlspecialchars($projeto['descricao']); ?>
                            </p>


                            <!-- TECNOLOGIAS -->
                            <div class="tecnologias">

                                <?php if (!empty($projeto['tecnologias'])): ?>

                                    <?php foreach ($projeto['tecnologias'] as $tec): ?>

                                        <span>
                                            <?php echo htmlspecialchars($tec); ?>
                                        </span>

                                    <?php endforeach; ?>

                                <?php endif; ?>

                            </div>


                            <!-- RODAPÉ DO CARD -->
                            <div class="projeto-final">

                                <span class="empresa">
                                    WE CODE
                                </span>


                                <?php if (!empty($projeto['link'])): ?>

                                    <a
                                        href="<?php echo htmlspecialchars($projeto['link']); ?>"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                    >
                                        VER PROJETO →
                                    </a>

                                <?php endif; ?>

                            </div>

                        </div>

                    </div>

                <?php endforeach; ?>

            <?php else: ?>

                <p>
                    Nenhum projeto encontrado.
                </p>

            <?php endif; ?>

        </section>

    </main>


    <!-- RODAPÉ -->
    <section class="roda-pe">

        <footer class="footer">

            <div class="footer-topo">


                <!-- LOGO -->
                <div class="footer-logo">

                    <img
                        src="../imagens/Logotipo-WeCode.png"
                        alt="Logo WeCode"
                    >

                    WeCode

                </div>


                <!-- LINKS -->
                <ul class="footer-links">

                    <li>
                        <a href="../inicio.html">
                            Início
                        </a>
                    </li>

                    <li>
                        <a href="../contato.html">
                            Fale conosco
                        </a>
                    </li>

                    <li>
                        <a href="../perguntas.html">
                            Perguntas
                        </a>
                    </li>

                </ul>



                
                <div class="footer-social">
                <a href="https://www.instagram.com/"> <img src="../imagens/icones-pg-ctt/instagram.png" alt="Instagram"> </a>
                <a href="https://br.linkedin.com/"> <img src="../imagens/icones-pg-ctt/linkedin.png" alt="linkedin"></a>
                <a href="https://github.com/"> <img src="../imagens/icones-pg-ctt/github.png" alt="GitHub"></a>
            </div>

                <!-- REDES SOCIAIS -->
                <div class="footer-social">

                    <a
                        href="#"
                        aria-label="Instagram"
                    >
                        Instagram
                    </a>

                    <a
                        href="#"
                        aria-label="LinkedIn"
                    >
                        LinkedIn
                    </a>

                    <a
                        href="#"
                        aria-label="GitHub"
                    >
                        GitHub
                    </a>

                </div>


            </div>


            <!-- COPYRIGHT -->
            <div class="footer-base">

                <span>
                    © 2026 WeCode. Todos os direitos reservados.
                </span>

            </div>

        </footer>

    </section>

</body>

</html>