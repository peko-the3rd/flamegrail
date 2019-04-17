<?php
/* Smarty version 3.1.33, created on 2019-04-17 13:56:52
  from '/var/www/flamegrail/resources/views/common/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb6b214a2eab3_70113786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b144e66202aa81c2ef56bfd66a4c780d2a49b8e' => 
    array (
      0 => '/var/www/flamegrail/resources/views/common/header.tpl',
      1 => 1555381569,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb6b214a2eab3_70113786 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php echo '<script'; ?>
>document.getElementsByTagName("html")[0].className += " js";<?php echo '</script'; ?>
>
  <link rel="stylesheet" href="<?php echo asset('css/style.css');?>
">
  <link rel="stylesheet" href="<?php echo asset('css/table_style.min.css');?>
">
  <link rel="shortcut icon" href="<?php echo asset('img/faviconr.png?v=20190416');?>
">
  <title>jungle coin</title>
  
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <?php echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=UA-134249621-1"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-134249621-1');
  <?php echo '</script'; ?>
>
  
  <?php if ((($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'chartjs') !== null ))) {?>
  <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'chartjs');?>

  <?php }?>
</head><?php }
}
