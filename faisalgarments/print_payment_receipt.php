<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
