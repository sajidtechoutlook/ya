<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
