<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
