<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
