<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
