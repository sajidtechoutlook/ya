<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
