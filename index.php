<!DOCTYPE html>
<html lang="pt-br">
<?php require_once 'layouts/header.php'; ?>

<head>
    <title>| Henrique B. Madeira</title>
</head>

<body>
    <main>
        <div id="home">
            <img src="./img/foto_vermelha.jpeg" alt="Foto Home" id="home-foto">
            <div id="home-nome" class="text-xxl">
                Henrique B. Madeira
            </div>
            <div id="home-sobre" class="text-lg">
                Estudante, Programador e Leitor
            </div>
            <div id="home-links">
                <a href="https://github.com/HenriqueHBM" target="_blank">
                    <img src="./icons/github.png" alt="GitHub" class="links-width-margin">
                </a>
                <a href="https://br.linkedin.com/in/henrique-b-madeira-506598222" target="_blank">
                    <img src="./icons/linkedin.png" alt="Linkedin" class="links-width-margin">
                </a>
                <a href="https://www.instagram.com/henrique_bm_/" target="_blank">
                    <img src="./icons/instagram.png" alt="Instagram" class="links-width-margin">
                </a>
                <a href="https://api.whatsapp.com/send?phone=5545998493946" target="_blank">
                    <img src="./icons/whatsapp.png" alt="Whatsapp" class="links-width-margin">
                </a>
                <a href="mailto:henrique.madeira1@gmail.com" target="_blank">
                    <img src="./icons/gmail.png" alt="Email" class="links-width-margin">
                </a>
            </div>
        </div>
        <div id="sobre">
            <div class="text-lg">Sobre</div>
            <div id="sobre-texto" class="text-md">
                Eu sou Henrique B. Madeira, atualmente estou estudando Informática na escola Estadual João Manoel Mondrone.
                <br>
                Nascido na data de 03 de Agosto de 2005, na cidade de Medianeira Paraná.
                <br>
                Comecei a focar mais na minnha carreira quando comecei a trabalhar na Frivatti Agro, onde estou atuando nos dias de hoje.
                Na Frivatti, útilizamos o nosso sistema AgroSig, onde foi desenvolvido pelos desenvolvedores da mesma, o qual integra as linguagens:
                PHP, Javascript, Framework Laravel e sua linguagem de marcaçao de texto como: HTML e CSS.
                <br>
                No dia a dia, sempre busco me aprimorar mais, descobrindo novas funções e linguangens para o aprimoramento pessoal.
            </div>
        </div>
        <div id="contato">
        <div id="header-contato" class="flex-divid">
            <div class="flex-divid">
                <h1>Contato</h1>
                <div class="text-sm">
                    <img src="./icons/gmail.png" width="20" height="20" alt="email" class="margin-right-md">
                    <a href="mailto:henrique.madeira1@gmail.com" target="_blank" class="clear-link">henriquemadeira03@gmail.com</a>
                    <br>
                    <img src="./icons/whatsapp.png" width="20" height="20" alt="Whatsapp" class="margin-right-md">
                    <a href="https://api.whatsapp.com/send?phone=5545998493946" target="_blank" class="clear-link"> (+55) 45 998449-3946</a>
                </div>
            </div>
        </div>
        </div>
    </main>

    <?php require_once 'layouts/footer.php' ?>
</body>
</html>
