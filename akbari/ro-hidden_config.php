<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
