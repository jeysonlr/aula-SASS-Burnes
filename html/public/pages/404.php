<?php if ( !isset( $pagina ) ) exit;
header('Content-Type: text/html; charset=utf-8'); ?>

<h1 class="main-center">Ops! Página não encontrada!</h1>
<p class="main-center">
    <img src="imagens/404.jpg" alt="Página não encontrada">
</p>
<p class="main-center">
    <a href="javascript:history.back()" title="Voltar" class="main-btn">
        <i class="fa-solid fa-circle-chevron-left"></i>
        Voltar à Página Anterior
    </a>
</p>