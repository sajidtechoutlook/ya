<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
