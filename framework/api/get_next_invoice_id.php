<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
