<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
