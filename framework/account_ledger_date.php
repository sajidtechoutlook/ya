<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
