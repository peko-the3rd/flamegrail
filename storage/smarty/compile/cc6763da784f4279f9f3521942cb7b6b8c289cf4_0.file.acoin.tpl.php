<?php
/* Smarty version 3.1.33, created on 2019-04-17 13:56:52
  from '/var/www/flamegrail/resources/views/acoin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb6b2149a79d6_99183999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc6763da784f4279f9f3521942cb7b6b8c289cf4' => 
    array (
      0 => '/var/www/flamegrail/resources/views/acoin.tpl',
      1 => 1555381685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5cb6b2149a79d6_99183999 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
  <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <main class="cd-main-content">
    <nav class="cd-side-nav js-cd-side-nav">
      <ul class="cd-side__list js-cd-side__list">
        <li class="cd-side__label"><span></span>
            
            <!-- ads -->
            <?php echo '<script'; ?>
 async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"><?php echo '</script'; ?>
>
            <!-- fast -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-3321194381719400"
                 data-ad-slot="9792460235"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>
            <?php echo '<script'; ?>
>
            (adsbygoogle = window.adsbygoogle || []).push({});
            <?php echo '</script'; ?>
>
            
        </li>
      </ul>
    </nav>
    <table class="fl-table">
      <thead>
        <tr>
          <th>日付</th>
          <th>500円</th>
          <th>1000円</th>
          <th>2500円</th>
          <th>5000円</th>
          <th>10000円</th>
          <th>50000円</th>
        </tr>
      </thead>
      <tbody>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
          <tr>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, explode(",",$_smarty_tpl->tpl_vars['row']->value), 'column');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['column']->value) {
?>
              <td><?php echo $_smarty_tpl->tpl_vars['column']->value;?>
</td>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </tbody>
    </table>
  </main> <!-- .cd-main-content -->
</body>
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
