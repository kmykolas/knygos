<?php
/* Smarty version 3.1.30, created on 2017-02-11 07:58:58
  from "C:\wamp64\www\uzduotis\view\data-form.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589ec442535127_23931157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '513abfb892b35d4ef0abde40812ed9b6c208bf23' => 
    array (
      0 => 'C:\\wamp64\\www\\uzduotis\\view\\data-form.tpl.html',
      1 => 1486799935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589ec442535127_23931157 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['inserted']->value > 0) {?>
    <div class="row">
        <div class="alert alert-success">
          <strong>Importuotos</strong> <?php echo $_smarty_tpl->tpl_vars['inserted']->value;?>
 knygos.
        </div>        
    </div>
<?php }?>
 <form method="get" action="">
  <div class="form-group">
    <label for="url">URL is http://www.patogupirkti.lt:</label>
    <input type="text" class="form-control" id="url" name="link">
  </div>
  <div class="form-group">
    <label for="type">Žanras</label>
    <select id="type" name="type">
        <option>Detektyvas</option>
        <option>Romanas</option>
        <option>Fantastika</option>
    </select>
  </div>
  <button type="submit" class="btn btn-default">Importuoti</button>
  <input type="hidden" name="act" value="data" />
</form>

<?php }
}
