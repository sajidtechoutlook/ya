<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
