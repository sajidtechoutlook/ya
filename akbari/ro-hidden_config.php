<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
