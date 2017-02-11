<?php
ob_start();
require_once('config.php');
require_once('smarty/Smarty.class.php');
require_once('controler/book_controler.php');
$smarty = new Smarty();
$smarty->template_dir = dirname(__FILE__). '/view';
$smarty->compile_dir  = dirname(__FILE__). '/smarty/template_c';
$smarty->config_dir   = dirname(__FILE__). '/smarty/configs';
$smarty->cache_dir    = dirname(__FILE__). '/smarty/cashe';
$smarty->caching = false;
//db connect
$con = mysqli_connect($config['db']['host'],$config['db']['user'],$config['db']['psw'],$config['db']['db_name']);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  die;
  }
mysqli_set_charset($con,"utf8");
//db connect end
$main=new bookControler();
$smarty->assign('lang', 'lt');
$smarty->assign('main_output', $main->process());
echo $smarty->fetch('main.tpl.html');
ob_end_flush();
exit;
?>
