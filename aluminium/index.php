<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
