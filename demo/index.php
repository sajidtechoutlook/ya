<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
