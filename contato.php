<!DOCTYPE html>
<html lang="pt-br">
<?php require_once 'layouts/header.php'; ?>

<head>
    <title>| Contato</title>
</head>

<body id="contato-body">
    <div id="contato">
        <div id="header-contato" class="flex-divid">
            <div class="flex-divid">
                <h1>Contate-me</h1>
                <div class="text-sm">
                    <img src="./icons/gmail.png" width="20" height="20" alt="email" class="margin-right-md">
                    <a href="mailto:henrique.madeira1@gmail.com" target="_blank" class="clear-link">henriquemadeira03@gmail.com</a>
                    <br>
                    <img src="./icons/whatsapp.png" width="20" height="20" alt="Whatsapp" class="margin-right-md">
                    <a href="https://api.whatsapp.com/send?phone=5545998493946" target="_blank" class="clear-link" rel="noopener"> (+55) 45 99849-3946</a>
                </div>
            </div>
        </div>
        <form action="#" method="POST" onsubmit="return validar_contato()" id="box-contato" class="flex-divid">
            <div id="contato-inputs" class="flex-divid">
                <p class="error-validacao" id="error-nome" hidden>Nome Invalido</p>
                <div class="field-group">
                    <input id="contato-nome" type="text" class="input-contato" name="nome">
                    <label class="label-field" for="contato-nome">Nome</label>
                </div>
                <p class="error-validacao" id="error-email" hidden>Email Invalido</p>
                <div class="field-group">
                    <input id="contato-email" type="text" class="input-contato" name="email">
                    <label class="label-field" for="contato-email">Email</label>
                </div>
                <p class="error-validacao" id="error-mensagem" hidden>Preencha Este Campo</p>
                <div class="field-group">
                    <textarea id="contato-mensagem" rows="4" class=" input-contato input-contato-textarea" name="mensagem"></textarea>
                    <label class="label-field" for="contato-mensagem">Mensagem</label>
                </div>
                <div>
                    <button id="contato-botao" type="submit" value="enviar">
                        Enviar
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>
<div id="contato-footer">
    <?php require_once 'layouts/footer.php' ?>
</div>
<script type="text/javascript" src="js/errors.js" defer></script>

</html>
