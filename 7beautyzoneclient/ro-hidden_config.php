<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
