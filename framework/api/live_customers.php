<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
