<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
