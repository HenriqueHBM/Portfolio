<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icone -->
    <link rel="icon" type="image/x-icon" href="./foto_vermelha.jpeg">
    
    <title>| Henrique B. Madeira</title>
    
    <!-- Font's -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./style.css">

</head>
<body>
    <header>
        <nav>
            <div id="nome">
                <div class="text-lg ">
                    Henrique B. Madeira
                </div>
            </div>
            <div id="menu">
                <a href="#home" class="text-md inline clear-link">HOME</a>
                <a href="#sobre" class="text-md inline clear-link">SOBRE</a>
                <a href="#contato" class="text-md inline clear-link"> CONTATO</a>
            </div>
        </nav>
    </header>
    <main>
        <div id="home">
            <img src="./foto_vermelha.jpeg" alt="Foto Home" id="home-foto">
            <div id="home-nome" class="text-xxl">
                Henrique B. Madeira
            </div>
            <div id="home-sobre" class="text-lg">
                Estudante, Programador e Leitor
            </div>
            <div id="home-links">
                <a href="https://github.com/HenriqueHBM" target="_blank">
                    <img src="./github.png" alt="GitHub" class="links-width-margin">
                </a>
                <a href="https://br.linkedin.com/in/henrique-b-madeira-506598222" target="_blank">
                    <img src="./linkedin.png" alt="Linkedin" class="links-width-margin">
                </a>
                <a href="https://www.instagram.com/henrique_bm_/" target="_blank">
                    <img src="./instagram.png" alt="Instagram" class="links-width-margin">
                </a>
                <a href="https://api.whatsapp.com/send?phone=5545998493946" target="_blank">
                    <img src="./whatsapp.png" alt="Whatsapp" class="links-width-margin">
                </a>
                <a href="mailto:henrique.madeira1@gmail.com" target="_blank">
                    <img src="./gmail.png" alt="Email" class="links-width-margin">
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
                PHP, Javascript, Framework Laravel e sua linguagem de marcaçao de texto como: HTML e CSS, 
                <br>
                No dia a dia, sempre busco me aprimorar mais, descobrindo novas funções e linguangens para o aprimoramento pessoal.
                
            </div>
        </div>
    </main>
    <footer id="contato">
        <div class="text-lg">Contato</div>
        <div id="contato-links">
            <div id="footer-email" class="text-sm">
                Email: <a href="mailto:henrique.madeira1@gmail.com" target="_blank" class="clear-link">henrique.madeira@gmail.com</a>
            </div>
            <div id="footer-telefone" class="text-sm">
                Whatsapp: <a  href="https://api.whatsapp.com/send?phone=5545998493946" target="_blank" class="clear-link"> (+55) 45 998449-3946</a>
            </div>
        </div>
    </footer>
    <div id="footer-copyright" class="text-sm">
        &copy; 2024 Henrique B. Madeira
    </div>
</body>
</html>