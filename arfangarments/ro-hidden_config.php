<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
