<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
