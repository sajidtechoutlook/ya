<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
