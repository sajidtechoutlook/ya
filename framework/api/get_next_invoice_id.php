<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
