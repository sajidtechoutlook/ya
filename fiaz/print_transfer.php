<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
