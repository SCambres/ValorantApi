<?php
/* Smarty version 4.3.0, created on 2023-03-15 12:14:43
  from '/var/www/ejercicios/Tarea5/view/layout/headerView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6411a8a3519752_43672859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ce19a052aced5c19f18ce60309dff2654412403' => 
    array (
      0 => '/var/www/ejercicios/Tarea5/view/layout/headerView.tpl',
      1 => 1678878269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6411a8a3519752_43672859 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Libreria para Jquery-->
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <!-- Archivo js-->
    <?php echo '<script'; ?>
 src="/view/js/script.js"><?php echo '</script'; ?>
>
    <!-- Font Awesome libreria para iconos -->
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/d3ca660c3c.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <!-- Bootstrap libreria estilos-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Bootstrap libreria JavaScript-->
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"><?php echo '</script'; ?>
>

    <!-- SweetAlert2 libreria para personalizar alertas -->
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/sweetalert2@11"><?php echo '</script'; ?>
>
    <!-- Archivo CSS  -->
    <link rel="stylesheet" type="text/css" href="/view/css/estilos.css">

    <title>Tareas Api</title>
</head>
<body>
    <div class="panel">
        <h1>TAREAS API</h1>
        <?php }
}
