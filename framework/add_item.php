<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
