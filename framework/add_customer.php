<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
