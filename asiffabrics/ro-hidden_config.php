<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');