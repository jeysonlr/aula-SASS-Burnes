<?php if (!isset($pagina)) exit;
header('Content-Type: text/html; charset=utf-8'); ?>

<h1 class="main-center">Veículos em Destaque:</h1>
<div class="main-grid-destaques">
    <div class="main-grid-destaques-coluna">
        <img src="imagens/1.jpg" alt="KWid">
        <h2>Renault Kwid</h2>
        <p>
            <a href="kwid" title="Kwid" class="main-btn">
                <i class="fa-solid fa-magnifying-glass"></i>
                Detalhes
            </a>
        </p>
    </div>
    <div class="main-grid-destaques-coluna">
        <img src="imagens/7.jpg" alt="Territory">
        <h2>Ford Territory</h2>
        <p>
            <a href="territory" title="Territory" class="main-btn">
                <i class="fa-solid fa-magnifying-glass"></i>
                Detalhes
            </a>
        </p>
    </div>
    <div class="main-grid-destaques-coluna">
        <img src="imagens/3.jpg" alt="Onix">
        <h2>Chevrolet Onix</h2>
        <p>
            <a href="onix" title="Onix" class="main-btn">
                <i class="fa-solid fa-magnifying-glass"></i>
                Detalhes
            </a>
        </p>
    </div>
</div>