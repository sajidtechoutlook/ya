<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
