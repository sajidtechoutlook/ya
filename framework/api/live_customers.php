<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
