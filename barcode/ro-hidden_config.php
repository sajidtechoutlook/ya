<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
