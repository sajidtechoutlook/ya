<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
