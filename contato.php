<!DOCTYPE html>
<html lang="pt-br">
<?php
require_once 'layouts/header.php';
?>

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
                    <a href="https://api.whatsapp.com/send?phone=5545998493946" target="_blank" class="clear-link"> (+55) 45 998449-3946</a>
                </div>
            </div>
        </div>
        <div id="box-contato" class="flex-divid">
            <div id="contato-inputs" class="flex-divid">
                <div class="field-group">
                    <input id="contato-nome" type="text" class="input-contato">
                    <label class="label-field" for="contato-nome">Nome</label>
                </div>
                <div class="field-group">
                    <input id="contato-email" type="text" class="input-contato">
                    <label class="label-field" for="contato-email">Email</label>
                </div>
                <div class="field-group">
                    <textarea name="" id="" rows="4" class=" input-contato input-contato-textarea"></textarea>
                    <label class="label-field" for="contato-mensagem">Mensagem</label>
                </div>
                <div>
                    <button id="contato-botao" type="submit">
                        Enviar
                    </button>
                </div>

            </div>
        </div>
    </div>
</body>
<div id="contato-footer">
    <?php require_once 'layouts/footer.php' ?>

</div>

</html>