<?php
/* Smarty version 3.1.33, created on 2019-04-17 14:21:23
  from '/var/www/flamegrail/resources/views/common/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb6b7d33237a5_87649367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '387fde0937eff9fe121a5767cdda9d1fff825213' => 
    array (
      0 => '/var/www/flamegrail/resources/views/common/footer.tpl',
      1 => 1555477227,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb6b7d33237a5_87649367 (Smarty_Internal_Template $_smarty_tpl) {
?><footer>
<small>&copy; 2019-<span id="thisYear"></span> karplusan forest inc.</small>
</footer>

<?php echo '<script'; ?>
>
  date = new Date();
  thisYear = date.getFullYear();
  document.getElementById("thisYear").innerHTML = thisYear;
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo asset('js/util.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo asset('js/menu-aim.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo asset('js/main.js');?>
"><?php echo '</script'; ?>
>
</html><?php }
}
