<?php
/* Smarty version 3.1.30, created on 2017-02-11 09:44:07
  from "C:\wamp64\www\uzduotis\view\list.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589edce7cf1164_12353197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9705cd0faa53121ed7393e7cf2480203c7d569f7' => 
    array (
      0 => 'C:\\wamp64\\www\\uzduotis\\view\\list.tpl.html',
      1 => 1486806245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589edce7cf1164_12353197 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form method="get" action="" id="list-form">

<div class="row">
    <div class="form-group">
    <label for="filter">Rūšiavimas:</label>
    <select class="selectpicker" name="sort" onchange="$('#list-form').submit();">
      <optgroup label="Pavadinimas" >
        <option <?php if (!empty($_GET['sort'])) {
if ($_GET['sort'] == 0) {?>selected=""<?php }
}?> value="0">A-Z</option>
        <option <?php if (!empty($_GET['sort'])) {
if ($_GET['sort'] == 1) {?>selected=""<?php }
}?> value="1">Z-A</option>
      </optgroup>
      <optgroup label="Autorius">
        <option <?php if (!empty($_GET['sort'])) {
if ($_GET['sort'] == 2) {?>selected=""<?php }
}?> value="2">A-Z</option>
        <option <?php if (!empty($_GET['sort'])) {
if ($_GET['sort'] == 3) {?>selected=""<?php }
}?> value="3">Z-A</option>
      </optgroup>
      <optgroup label="Žanras">
        <option <?php if (!empty($_GET['sort'])) {
if ($_GET['sort'] == 4) {?>selected=""<?php }
}?> value="4">A-Z</option>
        <option <?php if (!empty($_GET['sort'])) {
if ($_GET['sort'] == 5) {?>selected=""<?php }
}?> value="5">Z-A</option>
      </optgroup>
      <optgroup label="Ledimo metai">
        <option <?php if (!empty($_GET['sort'])) {
if ($_GET['sort'] == 6) {?>selected=""<?php }
}?> value="6">0-9</option>
        <option <?php if (!empty($_GET['sort'])) {
if ($_GET['sort'] == 7) {?>selected=""<?php }
}?> value="7">9-0</option>
      </optgroup>
    </select>
    
    <label for="search">Paieška</label>
    <input type="text" name="search" id="search" value="<?php if (!empty($_GET['search'])) {
echo $_GET['search'];
} else {
}?>" />
        
    <button type="button" onclick="$('#page').val('1');$('#list-form').submit();" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
</div>
     <ul class="pagination">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['page']->value) {
?>
            <li class="<?php echo $_smarty_tpl->tpl_vars['page']->value['class'];?>
"><a onclick="$('#page').val('<?php echo $_smarty_tpl->tpl_vars['page']->value['nr'];?>
');$('#list-form').submit();"><?php echo $_smarty_tpl->tpl_vars['page']->value['nr'];?>
</a></li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ul>
<table id="book-list" class="table table-striped table-bordered" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Pavadinimas</th>
                <th>Leidimo metai</th>
                <th>Autorius </th>
                <th>Žanras</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Pavadinimas</th>
                <th>Leidimo metai</th>
                <th>Autorius </th>
                <th>Žanras</th>
            </tr>
        </tfoot>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['book']->value) {
?>
            <tr onclick="window.location='./?act=item&id=<?php echo $_smarty_tpl->tpl_vars['book']->value['id'];?>
';">
                <td><?php echo $_smarty_tpl->tpl_vars['book']->value['title'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['book']->value['year'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['book']->value['author'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['book']->value['type'];?>
</td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </tbody>
    </table>
    <input type="hidden" name="act" value="list" />
    <input type="hidden" name="page" value="<?php if (!empty($_GET['page'])) {
echo $_GET['page'];
} else { ?>1<?php }?>" id="page" />
    
     <ul class="pagination">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['page']->value) {
?>
            <li class="<?php echo $_smarty_tpl->tpl_vars['page']->value['class'];?>
"><a onclick="$('#page').val('<?php echo $_smarty_tpl->tpl_vars['page']->value['nr'];?>
');$('#list-form').submit();"><?php echo $_smarty_tpl->tpl_vars['page']->value['nr'];?>
</a></li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ul>
</form><?php }
}
