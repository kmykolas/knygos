<?php
/* Smarty version 3.1.30, created on 2017-02-11 09:58:51
  from "C:\wamp64\www\uzduotis\view\item.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589ee05bcb4c77_90310627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbea97981ab6b07c081796b2ba05b62a115b2c92' => 
    array (
      0 => 'C:\\wamp64\\www\\uzduotis\\view\\item.tpl.html',
      1 => 1486807128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589ee05bcb4c77_90310627 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h1>
<p>Knygos leidimo metai <?php echo $_smarty_tpl->tpl_vars['item']->value['year'];?>
</p>
<p>Knygos autorius <?php echo $_smarty_tpl->tpl_vars['item']->value['author'];?>
</p>
<p>Knygos žanras <?php echo $_smarty_tpl->tpl_vars['item']->value['type'];?>
</p>

<button type="button" onclick="window.history.back()" class="btn btn-primary">Atgal</button><?php }
}
