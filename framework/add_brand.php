<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
