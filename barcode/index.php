<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
