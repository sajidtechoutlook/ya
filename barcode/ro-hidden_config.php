<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
