<?php
/* Smarty version 3.1.30, created on 2017-02-11 07:53:15
  from "C:\wamp64\www\uzduotis\view\main.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589ec2eb3decb3_27234324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3cfee4a3832bbaf4cbd73da1dbed5183e08a28e' => 
    array (
      0 => 'C:\\wamp64\\www\\uzduotis\\view\\main.tpl.html',
      1 => 1486799589,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589ec2eb3decb3_27234324 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
">
	<head>
		<title>Uzduotis</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="ROBOTS" content="Index, FOLLOW" />
		<meta name="author" content="Mykolas Kazlauskas" />
		<meta name="Description" content="" />
		<meta name="Keywords" content="" /> 
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <?php echo '<script'; ?>
 src="js/jquery-3.1.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/bootstrap.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
>
	</head>
	<body>
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="">Užduotis-knygos</a>
            </div>
            <ul class="nav navbar-nav">
              <li class="active"><a href="">Pradžia</a></li>
              <li class=""><a href="./?act=data-form">Papildyti</a></li>
            </ul>
          </div>
        </nav>        
		<div class="container"><?php echo $_smarty_tpl->tpl_vars['main_output']->value;?>
</div>
	</body>
</html><?php }
}
