<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
