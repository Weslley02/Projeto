<?php

if(!isset($_SESSION["nome"])){
    header('Location: ?pg=login/formulario');
}

?>

<h1>Área restrita</h1>

<p><b>Bem-vindo(a), <?= $_SESSION["nome"] ?>!</b></p>

<div id="btn-limpar-sessao">
    <a href="?pg=login/limpar_sessao">Sair</a>
</div>