<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
