<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
