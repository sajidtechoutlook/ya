<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
