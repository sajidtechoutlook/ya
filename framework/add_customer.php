<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
