<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
