<?php
function pre($msg)
{
    return '<pre>'.print_r($msg, true).'</pre>';
}
function debug($smth, $returnOutput = false)
{
	return msg($smth, $returnOutput);
}

function d($w, $returnOutput = false)
{
    return debug($w, $returnOutput);
}
function dn(&$w, $returnOutput = false)
{
    return debug(array(vname($w)=>$w), $returnOutput);
}
function dnd(&$w)
{
    debug(array(vname($w)=>$w), false);
    exit();
}
function dd($w)
{
    debug($w, false);
    exit();
}

function dv($w, $returnOutput = false)
{
    return msg($w, $returnOutput, true);
}

function dvd($w)
{
    msg($w, true, false);
    exit;
}

function microtime_float ()
{ 
    list ($msec, $sec) = explode(' ', microtime()); 
    $microtime = (float)$msec + (float)$sec;
    return $microtime; 
}

function s()
{
    return microtime_float();
}

function ss($start, $returnOutput = false)
{
    return msg(round(microtime_float()-$start, 5), $returnOutput); 
}

function st($start, $returnOutput = false)
{
    static $sum = false;
    
    if (!$sum)
    $sum = microtime_float();
    else
    $sum += $start;
    
    return msg(round(microtime_float()-$sum, 5), $returnOutput);   
}

function msg($smth, $returnOutput = false, $var_dump = false)
{
	if($returnOutput) ob_start();
	$title = '';
   	try{
   		throw new Exception();
   	}
   	catch(Exception $e)
   	{
   		$trace = $e->getTrace();
   		$file = isset($trace[2])?$trace[2]:$trace[1];
 	    $line = isset($trace[2])?$trace[2]:$trace[1];
 	    $file = $file['file'];
 	    $line = $line['line'];
   		$title = $file.' - '.$line;
   	}
	?><div title="<?php print $title;?>" style="border: 1px solid #666; padding: 10px; margin:10px; overflow: auto; background-color: #fcfcfc; color: #000; text-align: left !important;"><?php
	if(!$var_dump)
	{
    	if (is_string($smth))
    	{
    		print($smth);
    	}
    	else
    	{
    		print ('<pre>'.print_r($smth, true).'</pre>');
    	}
	}
	else 
	{
    	?><pre><?php var_dump($smth)?></pre><?php    	
	}
	?></div><?php
	if($returnOutput)
	return ob_get_clean();
	return '';
}

function vname(&$var, $scope=false, $prefix='unique', $suffix='value')
  {
    if($scope) $vals = $scope;
    else      $vals = $GLOBALS;
    $old = $var;
    $var = $new = $prefix.rand().$suffix;
    $vname = FALSE;
    foreach($vals as $key => $val) {
      if($val === $new) {$vname = $key;break;}
    }
    $var = $old;
    return $vname;
  }
  function getCallinfo($_deep = 0)
	{
		$title = '';
    	try{
    		throw new Exception();
    	}
    	catch(Exception $e)
    	{
    		$trace = $e->getTrace();
    		$file = $trace[$_deep]['file'];
    		$line = $trace[$_deep]['line'];
    		$title = $file.' - '.$line;
    	}
    	return $title;
	}