<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('6003D6778D682128AAQAAAAWAAAABIgAAACABAAAAAAAAAD/gpnGz5Q5FMlHVuONgnVpm1oO43JhKQVuAECNKyYPGJRy1hYgw+4IBNjmttymxZPkNCqvgSk6+8+9qfVNViC8jo2rayF2/glqsFcpJBtJ14my2uqUswrP913Y650wPhryJpl+VOzSulTa5xcI7LwUlmcynGyfLJc9IChs2lTOgbbltQFh1N7KGDQAAACQAAAAL1sIkGi06gTZ155MNStmw/wqyZt5uJCDK+QIsPq+l3mFcP4z3ADxV+rcFGtiAlJk3gcOlq+2rjuf1Yjcn3Qr8Xd/clwj3vX2VJx8IM/8xXBaJDAKXuWzc66wVVk8xYg9joJumcYiUcJAqSj3onAGaKB5LcKezrf0cXhmAGCjOfDfmXXxpJjH4sVKZ2hh8kEvNQAAAIgAAACxiRJJUoYDhptP5wWtmqtT75z0vQo8yZpsL7MHnklFh8f6qcjpFagPLa4OeThcH3421x4/VyL4p4sygoUe+1P+kqBWhVv9uhJMVO8NvV25wZz9uvPlZNaXoQBqizdY+9vSZjaXiEbzBlpbdjWQtYIUP/e94DyaUjvpMWadAzDMiY6jZIRb+hV6NgAAAJgAAABXHJ97lB3qCf49+bmXUWKM4iJS8qFtSQJh3KQbF1i61SQJsY+L3zehsebZtd8ZdUayD4xJuz0xTxPde+fEqaH+Mh/cFOcR7V2FKwD5rXH2fnTLhB7gbbQScAczD/8ryhvj3IDHZg89+qp3PXOsa0Quc53wZ4lUYFWJEXEp7IIA5gTpPOJjyzlwkRu2hHdPqVIxrsL0ovBn9DcAAACgAAAAlwOu3SBwYSt5GONS9FtuLH5/pp1SlVdietiTxYL+OksEibxJ734WObsD2P1gyCaU7iyewWQ8Nrpfj/+XAH1UVEsjNes8HfGbVOU3711Xyx8td9wvWznKcsZMv+5Hu0dqn7yKgT14libr2cH4aTkN9HJ/31c/Mms3aUo2vKz58TLT7gdge7uq9fM419YFnxjpzFW/NCkTtL2t1rU5OrDAzzgAAACgAAAAOXj+zYhsZ1b4mmHtw74lLF5TnQosI+g7F4P9PXH6ocyN61LxQoteffEB+wF9BJ3W8/xQBVDFpXqFekqk9a7g+GppbufWC1sBlFxQ9ZRi8sJWuSSXsDALhj3+8kWTqLYHZ3Oj7BOaUbmncBirFSMpmhBzPTyFV4GkuD+5RH28YktL0eff6ph323FNk01c/yK8r0Y3Om8z+bjRLCcxbY/IRQAAAAA=');
