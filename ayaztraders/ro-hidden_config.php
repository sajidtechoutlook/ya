<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
