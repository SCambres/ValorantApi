<?php
/* Smarty version 4.3.0, created on 2023-03-21 17:31:39
  from '/var/www/ejercicios/Tarea5/view/modules/headerView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6419dbeba8bc32_53281905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d4abfe0856bebd4f6e5d6962ec23ff21baf6a5c' => 
    array (
      0 => '/var/www/ejercicios/Tarea5/view/modules/headerView.tpl',
      1 => 1679416294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6419dbeba8bc32_53281905 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-md navbar-dark bg-dark position-fixed w-100" id="navbar">
  <a class="navbar-brand" href="/home/" style="font-family: 'VALORANT', sans-serif;">VALORANT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto" style="font-family: 'VALORANT', sans-serif;">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="jugabilidadDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          JUGABILIDAD
        </a>
        <div class="dropdown-menu" aria-labelledby="jugabilidadDropdown">
          <a class="dropdown-item" href="/agents/"><i class="fa-solid fa-user"></i> Personajes</a>
          <a class="dropdown-item" href="/modosdejuego/"><i class="fa-solid fa-gamepad"></i> Modos de juego</a>
          <a class="dropdown-item" href="/contratos/"><i class="fa-solid fa-file-contract"></i> Contratos personajes</a>
          <a class="dropdown-item" href="/equipamiento/"><i class="fa-solid fa-shield-halved"></i> Equipamiento</a>
          <a class="dropdown-item" href="/eventos/"><i class="fa-solid fa-calendar"></i> Eventos</a>
          <a class="dropdown-item" href="/mapas/"><i class="fa-solid fa-map"></i> Mapas</a>
          <a class="dropdown-item" href="/armas/"><i class="fa-solid fa-person-rifle"></i> Armas</a>
          </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="cosmeticosDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          COSMÉTICOS
        </a>
        <div class="dropdown-menu" aria-labelledby="cosmeticosDropdown">
          <a class="dropdown-item" href="/gunsskin/"><i class="fa-solid fa-gun"></i> Skin armas</a>
          <a class="dropdown-item" href="/chromasskin/"><i class="fa-sharp fa-solid fa-person-rifle"></i> Skin chromas</a>
          <a class="dropdown-item" href="/bundleskin/"><i class="fa-brands fa-wolf-pack-battalion"></i> Bundle skins</a>
          <a class="dropdown-item" href="/cardsplayer/"><i class="fa-solid fa-id-card-clip"></i> Tarjetas jugador</a>
          <a class="dropdown-item" href="/titleslayer/"><i class="fa-solid fa-closed-captioning"></i> Títulos jugador</a>
          <a class="dropdown-item" href="/sprays/"><i class="fa-solid fa-spray-can"></i> Sprays</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/seasson/">SEASSON</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/rangos/">RANGOS</a>
      </li>
    </ul>
  </div>
</nav>


<?php }
}
