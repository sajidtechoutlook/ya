<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
