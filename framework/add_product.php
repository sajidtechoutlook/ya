<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
