<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
